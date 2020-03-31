<script>
    $('#project-list a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show');
    });    

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
    } );

    function save() {
        var errors = isProjectComplete();
        if (errors.length == 0) {
            var _token = $('input[name="_token"]').val();
            let cashflowData = [];
            var r = 0;
            cashflowItems.forEach(element => {
                var registry = [];
                cashflowData.push({
                    row: r,
                    label: element.name,
                    value_0: element['0'],
                    value_1: element['1'],
                    value_2: element['2'],
                    value_3: element['3'],
                    value_4: element['4'],
                    value_5: element['5'],
                    value_6: element['6'],
                    value_7: element['7'],
                    value_8: element['8'],
                    value_9: element['9'],
                    value_10: element['10'],
                    value_11: element['11'],
                    value_12: element['12'],
                    value_13: element['13'],
                    value_14: element['14'],
                    value_15: element['15'],
                    value_16: element['16'],
                    value_17: element['17'],
                    value_18: element['18'],
                    value_19: element['19'],
                    value_20: element['20'],
                    value_21: element['21'],
                    value_22: element['22'],
                    value_23: element['23'],
                    value_24: element['24'],
                    value_25: element['25'],
                });
                r++;
            });

            compareChart.update();
            cashflowChart.update();
            var radiation_base64 = compareChart.toBase64Image();
            var cashflow_base64 = cashflowChart.toBase64Image();
            //console.log(radiation_base64);
            //console.log(cashflow_base64);
            //return;
            var project = {
                 _token: _token,
                client_id: $("#client_id").val(),
                client_name:  $("#client_id option:selected").text(),
                client_address: $("#client_address").html(),
                zone_id: $("#zone_id").val(),
                zone_name:  $("#zone_id option:selected").text(),
                assessor_id: $("#assessor_id").val(),
                assessor_name:  $("#assessor_id option:selected").text(),
                assessor_email: 'Assessor E-mail',
                assessor_telephone: 'Assessor telephone',
                constants: {
                    exchange_rate: exchange_rate.getNumber(),
                    panel_potency: panel_potency.getNumber(),
                    kg_co2: kg_co2.getNumber(),
                    trees: trees.getNumber(),
                    benefit: benefit.getNumber(),
                    benefit_usd: benefit_usd.getNumber(),
                    limit_kwp: limit_kwp.getNumber(),
                    limit_usd_kwp: limit_usd_kwp.getNumber(),
                },
                invoices: {
                    @for($i = 1; $i <= 12; $i++)
                    consumption_{{$i}}: consumption_{{$i}}.getNumber(),
                    value_{{$i}}: value_{{$i}}.getNumber(),
                    @endfor
                    annual_consumption: annual_consumption.getNumber(),
                    average_consumption: average_consumption.getNumber(),
                    kwh_cost: kwh_cost.getNumber(),
                    hired_potency: hired_potency.getNumber(),
                    actual_kg_co2: actual_kg_co2.getNumber()
                },
                proposals: JSON.stringify(proposalsItems),
                loan: {
                    ammount: null, //loan_ammount.getNumber(),
                    rate: null, ///loan_rate.getNumber(),
                    recovery_years: null, //loan_years.getNumber(),
                    
                },
                recovery: {
                    potency: potency.getNumber(),
                    investment: investment.getNumber(),
                    fiscal_bonus: fiscal_bonus.getNumber(),
                    inflation_1: inflation_1.getNumber(),
                    inflation_8: inflation_8.getNumber(),
                    inflation_rest: inflation_rest.getNumber(),
                    discount_rate: discount_rate.getNumber(),
                    van: van.getNumber(),
                    tir: tir.getNumber(),
                    recovery_years: recovery_years.getNumber()
                },
                radiation: JSON.stringify(radiationItems),
                cashflow: JSON.stringify(cashflowData),
                radiation_base64: radiation_base64,
                cashflow_base64: cashflow_base64
            };

            proposalsItems.forEach(element => {
                if(element.name == $("#proposal_name").val()) {
                    errors.push("Ya existe una propuesta con el mismo nombre");
                }
            });

            var old_txt = $("#save-btn").html();
            $("#save-btn").html("<h4>GENERANDO EL<br>COMPROBANTE</h4>");
            $("#save-btn").attr("disabled", true);
            $.ajax({
                type: "post",
                url: "{{route('projects.store')}}",
                data: project,
                dataType: "json",
                success: function (response) {
                    if(response["exception"] != undefined) {
                        $.notify(
                            {
                                // options
                                icon: 'fas fa-exclamation-circle',
                                message: response["exception"]
                            },{
                                // settings
                                type: "danger",
                                showProgressbar: false,
                                mouse_over: 'pause',
                                animate: {
                                    enter: 'animated bounceIn',
                                    exit: 'animated bounceOut'
                                }
                            }
                        );
                        $("#save-btn").html(old_txt);
                        $("#save-btn").attr("disabled", false);
                    } else {
                        window.open(response["reportUrl"], "_blank");
                        window.location.href = "{{route('projects.index')}}"
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('error');
                    $.notify(
                        {
                            // options
                            icon: 'fas fa-exclamation-circle',
                            message: "{{__('An error has occured')}}"
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
                    $("#save-btn").html(old_txt);
                    $("#save-btn").attr("disabled", false);
                }
            });
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

    function isProjectComplete() {
        var errors = [];

        if (exchange_rate.getNumber() == 0) {
            errors.push("Ingrese el tipo de cambio ARS/USD (Constantes)");
        }

        if (panel_potency.getNumber() == 0) {
            errors.push("Ingrese el valor de Potencia panel (Constantes)");
        }

        if (kg_co2.getNumber() == 0) {
            errors.push("Ingrese el valor de Conversión kg CO<sub>2</sub> (Constantes)");
        }

        if (trees.getNumber() == 0) {
            errors.push("Ingrese el valor de Conversión árboles (Constantes)");
        }

        if (benefit.getNumber() == 0) {
            errors.push("Ingrese el valor de Límite beneficio (Constantes)");
        }

        if (limit_kwp.getNumber() == 0) {
            errors.push("Ingrese el valor de Límite USD/kWp (Constantes)");
        }

        if ($("#client_id").val() == '') {
            errors.push("Seleccione el cliente (Proyecto)");
        }

        if ($("#zone_id").val() == '') {
            errors.push("Seleccione la zona (Proyecto)");
        }

        if ($("#assessor_id").val() == '') {
            errors.push("Seleccione el asesor (Proyecto)");
        }

        @for($i = 1; $i <= 12; $i++)
        if (consumption_{{$i}}.getNumber() == 0) {
            errors.push("Faltan datos de consumos de factura (Facturas)");
        } else if (value_{{$i}}.getNumber() == 0) {
            errors.push("Faltan datos de valores de factura (Facturas)");
        }
        @endfor

        if (kwh_cost.getNumber() == 0) {
            errors.push("Ingrese el valor de Costo kWh (Facturas)");
        }

        if (hired_potency.getNumber() == 0) {
            errors.push("Ingrese el valor de Pot. contratada (Facturas)");
        }

        if (exchange_rate.getNumber() == 0) {
            errors.push("Ingrese el tipo de cambio ARS/USD (Facturas)");
        }

        if (proposalsItems.length == 0) {
            errors.push("Ingrese al menos una propuesta (Propuestas)");
        }
        return errors;
    }

    $(document).ready(function() {
        exchangeRateUpdated();
        resizeRadiationTable();
        resizeProposalsTable();
        return;
        consumption_1.set(43128);
        value_1.set(43128);
        $("#consumption_1").blur();
        $("#value_1").blur();
        consumption_2.set(49104);
        value_2.set(162043);
        consumption_3.set(48960);
        value_3.set(161568);
        consumption_4.set(28152);
        value_4.set(92902);
        consumption_5.set(21168);
        value_5.set(69854);
        consumption_6.set(23328);
        value_6.set(76982);
        consumption_7.set(22464);
        value_7.set(74131);
        consumption_8.set(20808);
        value_8.set(68666);
        consumption_9.set(18504);
        value_9.set(61063);
        consumption_10.set(19584);
        value_10.set(64627);
        consumption_11.set(20592);
        value_11.set(67954);
        consumption_12.set(33408);
        value_12.set(110246);
        kwh_cost.set(2.8);
        hired_potency.set(35);
        $("#client_id").selectpicker('val', 1);
        $("#zone_id").selectpicker('val', 1);
        $("#assessor_id").selectpicker('val', 1);
        
        $("#consumption_1").blur();
        $("#value_1").blur();
        $("#consumption_2").blur();
        $("#value_2").blur();
        $("#consumption_3").blur();
        $("#value_3").blur();
        $("#consumption_4").blur();
        $("#value_4").blur();
        $("#consumption_5").blur();
        $("#value_5").blur();
        $("#consumption_6").blur();
        $("#value_6").blur();
        $("#consumption_7").blur();
        $("#value_7").blur();
        $("#consumption_8").blur();
        $("#value_8").blur();
        $("#consumption_9").blur();
        $("#value_9").blur();
        $("#consumption_10").blur();
        $("#value_10").blur();
        $("#consumption_11").blur();
        $("#value_11").blur();
        $("#consumption_12").blur();
        $("#value_12").blur();
        $("#kwh_cost").blur();
        $("#client_id").blur();
        $("#zone_id").blur();
        proposal_name = 'Techo bodega y planta';
        proposal_usd_w = 1.3;
        proposal_inverter_1_id  = 1;
        proposal_inverter_1_q = 2;
        proposal_inverter_1_name = 'ECO 27 90';
        proposal_inverter_2_id  = 2;
        proposal_inverter_2_q = 1;
        proposal_inverter_2_name = 'INVERSORES SYMO 20';
        proposal_inverter_3_id  = null;
        proposal_inverter_3_q = null;
        proposal_inverter_3_name = null;
        proposal_panels_q = 245;
        proposal_usd_iva = roundTo(proposal_panels_q * panel_potency.getNumber() * proposal_usd_w, 0);
        proposal_kw = roundTo(proposal_panels_q * panel_potency.getNumber() / 1000, 2);
        benefit_calculated = roundTo(proposal_kw * limit_usd_kwp.getNumber(), 0);
        proposal_benefit = benefit_calculated > benefit_usd.getNumber() ? benefit_usd.getNumber() : benefit_calculated;
        proposal_porc_price = roundTo(proposal_benefit / proposal_usd_iva * 100 ,0);
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
        proposalsTable.ajax.reload();
        proposalsTable.columns.adjust().draw();

        inflation_1.set(10);
        inflation_8.set(22);
        inflation_rest.set(2);
        discount_rate.set(10);
        
        $("#consumption_1").blur();
        $("#value_1").blur();
        $("#consumption_2").blur();
        $("#value_2").blur();
        $("#consumption_3").blur();
        $("#value_3").blur();
        $("#consumption_4").blur();
        $("#value_4").blur();
        $("#consumption_5").blur();
        $("#value_5").blur();
        $("#consumption_6").blur();
        $("#value_6").blur();
        $("#consumption_7").blur();
        $("#value_7").blur();
        $("#consumption_8").blur();
        $("#value_8").blur();
        $("#consumption_9").blur();
        $("#value_9").blur();
        $("#consumption_10").blur();
        $("#value_10").blur();
        $("#consumption_11").blur();
        $("#value_11").blur();
        $("#consumption_12").blur();
        $("#value_12").blur();
        $("#kwh_cost").blur();
        $("#client_id").blur();
        $("#zone_id").blur();
        $("#inflation_1").blur();
        $("#inflation_8").blur();
        $("#inflation_rest").blur();
        $("#discount_rate").blur();
    });
</script>