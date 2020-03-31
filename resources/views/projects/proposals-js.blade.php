<script>
    proposalsItems = [];
    proposalsTable = $('#proposalsTable').DataTable({
        'ordering': false,
        'searching': false,
        'paging': false,
        'info': false,
        "scrollX": true,
        'columns': [
            {data:"name"},
            {data:"usd_w"},
            {data:"inverter_1_q"},
            {data:"inverter_1_name"},
            {data:"inverter_2_q"},
            {data:"inverter_2_name"},
            {data:"inverter_3_q"},
            {data:"inverter_3_name"},
            {data:"panels_q"},
            {data:"usd_iva"},
            {data:"kw"},
            {data:"benefit"},
            {data:"porc_price"},
            {data:"m2"},
            {data:"generation"},
            {data:"solar_fraction"},
            {data:"co2"},
            {data:"trees"},
            {data:"specific_gener"},
            {data:"actions"},
            //
            {data:"inverter_1_id", visible: false},
            {data:"inverter_2_id", visible: false},
            {data:"inverter_3_id", visible: false}
        ],
        'ajax': function (data, callback, settings) {
                callback({ data: proposalsItems })
        },
        columnDefs: [
            {
                targets: '_all',
                className: 'dt-right'
            }
        ],
        "createdRow": function( row, data, dataIndex){
            if (data.proposal_main) {
                $(row).addClass('success');
            }
        }
    });

    usd_w = new AutoNumeric("#proposal_usd_w", decimal);
    q_inverter_1 = new AutoNumeric("#proposal_q_inverter_1", integer);
    q_inverter_2 = new AutoNumeric("#proposal_q_inverter_2", integer);
    q_inverter_3 = new AutoNumeric("#proposal_q_inverter_3", integer);
    q_panels = new AutoNumeric("#proposal_q_panels", integer);

    function resizeProposalsTable() {
        $('#proposalsTable').css('width', '100%');
        proposalsTable.draw(true);
    }

    function addProposal() {
        var errors = isProposalComplete();
        if (errors.length == 0) {
            proposal_name = $("#proposal_name").val();
            proposal_usd_w = usd_w.getNumber();
            proposal_inverter_1_id  = $("#proposal_inverter_1").val() != '' ? $("#proposal_inverter_1").val() : null;
            proposal_inverter_1_q = proposal_inverter_1_id == null ? null : q_inverter_1.getNumber();
            proposal_inverter_1_name = proposal_inverter_1_id == null ? null : $("#proposal_inverter_1 option:selected").text();
            proposal_inverter_2_id  = $("#proposal_inverter_2").val() != '' ? $("#proposal_inverter_2").val() : null;
            proposal_inverter_2_q = proposal_inverter_2_id == null ? null : q_inverter_2.getNumber();
            proposal_inverter_2_name = proposal_inverter_2_id == null ? null : $("#proposal_inverter_2 option:selected").text();
            proposal_inverter_3_id  = $("#proposal_inverter_3").val() != '' ? $("#proposal_inverter_3").val() : null;
            proposal_inverter_3_q = proposal_inverter_3_id == null ? null : q_inverter_3.getNumber();
            proposal_inverter_3_name = proposal_inverter_3_id == null ? null : $("#proposal_inverter_3 option:selected").text();
            proposal_panels_q = q_panels.getNumber();
            proposal_usd_iva = roundTo(proposal_panels_q * panel_potency.getNumber() * proposal_usd_w, 0);
            proposal_kw = roundTo(proposal_panels_q * panel_potency.getNumber() / 1000, 2);
            benefit_calculated = roundTo(proposal_kw * limit_usd_kwp.getNumber(), 0);
            proposal_benefit = benefit_calculated > benefit_usd.getNumber() ? benefit_usd.getNumber() : benefit_calculated;
            proposal_porc_price = roundTo(proposal_benefit / proposal_usd_iva * 100, 0);
            proposal_m2 = proposal_panels_q * 3;
            proposal_generation = proposal_kw * 1700;            
            proposal_solar_fraction = roundTo(proposal_generation / annual_consumption.getNumber() * 100, 0);
            proposal_co2 = proposal_generation * kg_co2.getNumber();
            proposal_trees = roundTo(proposal_co2 * trees.getNumber(), 0);
            proposal_specific_gener = roundTo(proposal_generation / proposal_kw, 0);
            proposal_actions = "<button type='button' class='btn btn-sm btn-" + (proposalsItems.length == 0 ? '' : 'outline-') + "success' onclick='setMain(\"" + proposal_name + "\");'>Principal</button>";
            proposal_actions += "&nbsp;<button type='button' class='btn btn-sm btn-" + (proposalsItems.length == 0 ? '' : 'outline-') + "danger' onclick='deleteProposal(\"" + proposal_name + "\");'><i class='fas fa-trash-alt'></i></button>";
            proposal_main = false;
            if (proposalsItems.length == 0) {
                proposal_main = true;
                potency.set(proposal_kw * 1000);
                potencyUpdated();
                fiscal_bonus.set(proposal_benefit);
                fiscalBonusUpdated();
                investment.set(proposal_usd_iva);
                investmentUpdated();
            }
            proposal = {
                'name' : proposal_name,
                'usd_w' : proposal_usd_w,
                'inverter_1_id' : proposal_inverter_1_id,
                'inverter_1_q' : proposal_inverter_1_q,
                'inverter_1_name' : proposal_inverter_1_name,
                'inverter_2_id' : proposal_inverter_2_id,
                'inverter_2_q' : proposal_inverter_2_q,
                'inverter_2_name' : proposal_inverter_2_name,
                'inverter_3_id' : proposal_inverter_3_id,
                'inverter_3_q' : proposal_inverter_3_q,
                'inverter_3_name' : proposal_inverter_3_name,
                'panels_q' : proposal_panels_q,
                'usd_iva' : proposal_usd_iva,
                'kw' : proposal_kw,
                'benefit' : proposal_benefit,
                'porc_price' : proposal_porc_price,
                'm2' : proposal_m2,
                'generation' : proposal_generation,
                'solar_fraction' : proposal_solar_fraction,
                'co2' : proposal_co2,
                'trees' : proposal_trees,
                'specific_gener' : proposal_specific_gener,
                'actions' : proposal_actions,
                'main' : proposal_main
            };

            proposalsItems.push(proposal);
            clearProposalHeader();
            proposalsTable.ajax.reload();
            proposalsTable.columns.adjust().draw();
        } else {
            errors.forEach(error => {
                $.notify(
                    {
                        // options
                        icon: 'fas fa-exclamation-circle',
                        message: error
                    },{
                        // settings
                        type: "warning",
                        showProgressbar: false,
                        mouse_over: 'pause',
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    }
                );
            });
            
        }
    }

    function clearProposalHeader() {
        $("#proposal_name").val('');
        usd_w.set(0);
        clearInverter1();
        clearInverter2();
        clearInverter3();
        q_panels.set(0);
    }

    function clearInverter1() {
        $("#proposal_inverter_1").selectpicker('val', '');
        q_inverter_1.set(0);
    }

    function clearInverter2() {
        $("#proposal_inverter_2").selectpicker('val', '');
        q_inverter_2.set(0);
    }

    function clearInverter3() {
        $("#proposal_inverter_3").selectpicker('val', '');
        q_inverter_3.set(0);
    }

    function isProposalComplete() {
        var errors = [];

        if(proposalsItems.length == 3) {
            errors.push("Sólo se pueden ingresar 3 alternativas");
            return errors;
        }

        if ($("#proposal_name").val() == '') {
            errors.push("Ingrese el nombre");
        }

        proposalsItems.forEach(element => {
            if(element.name == $("#proposal_name").val()) {
                errors.push("Ya existe una propuesta con el mismo nombre");
            }
        });
        
        if (usd_w.getNumber() == 0) {
            errors.push("Ingrese el valor de USD/W")
        }

        if ($("#proposal_inverter_1").val() == '' && $("#proposal_inverter_3").val() == '' && $("#proposal_inverter_3").val() == '') {
            errors.push("Debe seleccionar al menos un inverter");
        } else {
            if ($("#proposal_inverter_1").val() != '' && q_inverter_1.getNumber() == 0) {
                errors.push("Ingrese la cantidad del inverter (1)");
            }
            if ($("#proposal_inverter_2").val() != '' && q_inverter_2.getNumber() == 0) {
                errors.push("Ingrese la cantidad del inverter (2)");
            }
            if ($("#proposal_inverter_3").val() != '' && q_inverter_3.getNumber() == 0) {
                errors.push("Ingrese la cantidad del inverter (3)");
            }
        }

        if (q_panels.getNumber() == 0) {
            errors.push("Ingrese la cantidad de paneles");
        }

        if (panel_potency.getNumber() == 0) {
            errors.push("Ingrese la potencia del panel");
        }

        if (limit_usd_kwp.getNumber() == 0) {
            errors.push("Ingrese el valor de Límite USD/kWp");
        }

        if (benefit_usd.getNumber() == 0) {
            errors.push("Ingrese el valor de Límite beneficio");
        }

        if (annual_consumption.getNumber() == 0) {
            errors.push("No se han cargado facturas");
        }

        if (kg_co2.getNumber() == 0) {
            errors.push("Ingrese el valor de Conversión kg CO2");
        }

        if (trees.getNumber() == 0) {
            errors.push("Ingrese el valor de Conversión árboles");
        }

        return errors;
    }

    function deleteProposal(proposal_name) {
        proposalsItems.forEach(element => {
            if(element.name == proposal_name) {
                proposalsItems.splice( $.inArray(element, proposalsItems), 1 );
            }
        });
        if (proposalsItems.length > 0) {
            var element = proposalsItems[0];
            setMain(element.name);
        } else {            
            proposalsTable.ajax.reload();
            proposalsTable.columns.adjust().draw();
        }
    }

    function setMain(proposal_name) {
        proposalsItems.forEach(element => {
            if(element.name == proposal_name) {
                element.actions = element.actions.replace("btn-outline-success", "btn-success").replace("btn-outline-danger", "btn-danger");
                element.main = true;
                potency.set(element.kw * 1000);
                potencyUpdated();
                fiscal_bonus.set(element.benefit);
                fiscalBonusUpdated();
                investment.set(element.usd_iva);
                investmentUpdated();
            } else {
                element.actions = element.actions.replace("btn-success", "btn-outline-success").replace("btn-danger", "btn-outline-danger");
                element.main = false;
            }
        });
        proposalsTable.ajax.reload();
        proposalsTable.columns.adjust().draw();
    }
</script>