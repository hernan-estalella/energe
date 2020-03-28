<script>
    exchange_rate = new AutoNumeric("#exchange_rate", decimal);
    exchange_rate.set({{$exchange_rate->value}});
    panel_potency = new AutoNumeric("#panel_potency", integer);
    panel_potency.set({{$panel_potency->value}});
    kg_co2 = new AutoNumeric("#kg_co2", decimal_3);
    kg_co2.set({{$kg_co2->value}});
    trees = new AutoNumeric("#trees", decimal);
    trees.set({{$trees->value}});
    benefit = new AutoNumeric("#benefit", integer);
    benefit.set({{$benefit->value}});
    benefit_usd = new AutoNumeric("#benefit_usd", decimal);
    limit_kwp = new AutoNumeric("#limit_kwp", integer);
    limit_kwp.set({{$limit_kwp->value}});
    limit_usd_kwp = new AutoNumeric("#limit_usd_kwp", decimal);    

    function setDefault(field) {
        const value = window[field].getNumber();
        var _token = $('input[name="_token"]').val();
        var data = {
            'field' : field,
            'value' : value,
            _token : _token
        };
        $.ajax({
            type: "POST",
            url: "{{route('constants.ajaxUpdate')}}",
            data: data,
            dataType: "json",
            success: function (response) {
                $.notify(
                    {
                        // options
                        icon: 'fas fa-check-circle',
                        title: def_title,
                        message: "Valor actualizado"
                    },{
                        // settings
                        type: "success",
                        newest_on_top: newest,
                        showProgressbar: progressBar,
                        mouse_over: mouse,
                        animate: {
                            enter: animate_enter,
                            exit: animate_exit
                        }
                    }
                );
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                $.notify(
                    {
                        // options
                        icon: 'fas fa-exclamation-circle',
                        message: "Se ha producido un error"
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
            }
        });
    }

    function exchangeRateUpdated() {
        benefitUpdated();
        limitKwpUpdated();
        fiscalBonusUpdated();
        investmentUpdated();
    }

    function panelPotencyUpdated() {
        if (proposalsItems.length > 0) {
            proposalsItems.forEach(proposal => {
                proposal.usd_iva = proposal.panels_q * panel_potency.getNumber() * proposal.usd_w;
                proposal.kw = proposal.panels_q * panel_potency.getNumber() / 1000;
                benefit_calculated = proposalkw  * limit_usd_kwp.getNumber();
                proposal.benefit = benefit_calculated > benefit_usd.getNumber() ? benefit_usd.getNumber() : benefit_calculated;
                proposal.porc_price = __decimalFormatter.format(proposal.benefit / proposal.usd_iva);
                if (proposal.main) {
                    potency.set(proposal.kw * 1000);
                }
            });            
            proposalsTable.ajax.reload();
            proposalsTable.columns.adjust().draw();
        }
    }

    function kgCo2Updated() {
        actual_kg_co2.set(annual_consumption.getNumber() * kg_co2.getNumber());
    }

    function treesUpdated() {
        if (proposalsItems.length > 0) {
            proposalsItems.forEach(proposal => {
                proposal.trees = proposal.co2 * trees.getNumber();
            });            
            proposalsTable.ajax.reload();
            proposalsTable.columns.adjust().draw();
        }
    }

    function benefitUpdated() {
        benefit_usd.set(benefit.getNumber() / exchange_rate.getNumber());
        if (proposalsItems.length > 0) {
            proposalsItems.forEach(proposal => {
                benefit_calculated = proposal.kw  * limit_usd_kwp.getNumber();
                proposal.benefit = benefit_calculated > benefit_usd.getNumber() ? benefit_usd.getNumber() : benefit_calculated;
                proposal.porc_price = __decimalFormatter.format(proposal.benefit / proposal.usd_iva);
            });            
            proposalsTable.ajax.reload();
            proposalsTable.columns.adjust().draw();
        }
    }

    function limitKwpUpdated() {
        limit_usd_kwp.set(limit_kwp.getNumber() / exchange_rate.getNumber());
    }
</script>