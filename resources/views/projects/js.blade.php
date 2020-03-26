<script>
    $('#project-list a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show');
    });    

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
    } );

    $(document).ready(function() {
        exchangeRateUpdated();
        resizeRadiationTable();
        resizeProposalsTable();

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
        $("select[name='zone_id'").selectpicker('val', 1);
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
        proposal_usd_iva = roundTo(proposal_panels_q * panel_potency.getNumber() * proposal_usd_w,2);
        proposal_kw = roundTo(proposal_panels_q * panel_potency.getNumber() / 1000, 2);
        benefit_calculated = roundTo(proposal_kw * limit_usd_kwp.getNumber(), 2);
        proposal_benefit = benefit_calculated > benefit_usd.getNumber() ? benefit_usd.getNumber() : benefit_calculated;
        proposal_porc_price = roundTo(proposal_benefit / proposal_usd_iva * 100 ,2);
        proposal_m2 = proposal_panels_q * 3;
        proposal_generation = proposal_kw * 1700;
        proposal_solar_fraction = roundTo(proposal_generation / annual_consumption.getNumber() * 100, 2);
        proposal_co2 = proposal_generation * kg_co2.getNumber();
        proposal_trees = roundTo(proposal_co2 * trees.getNumber(), 0);
        proposal_specific_gener = roundTo(proposal_generation / proposal_kw, 0);
        proposal_actions = "<button type='button' class='btn btn-sm btn-" + (proposalsItems.length == 0 ? '' : 'outline-') + "success' onclick='setMain(\"" + proposal_name + "\");'>Principal</button>";
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
            'proposal_name' : proposal_name,
            'proposal_usd_w' : proposal_usd_w,
            'proposal_inverter_1_id' : proposal_inverter_1_id,
            'proposal_inverter_1_q' : proposal_inverter_1_q,
            'proposal_inverter_1_name' : proposal_inverter_1_name,
            'proposal_inverter_2_id' : proposal_inverter_2_id,
            'proposal_inverter_2_q' : proposal_inverter_2_q,
            'proposal_inverter_2_name' : proposal_inverter_2_name,
            'proposal_inverter_3_id' : proposal_inverter_3_id,
            'proposal_inverter_3_q' : proposal_inverter_3_q,
            'proposal_inverter_3_name' : proposal_inverter_3_name,
            'proposal_panels_q' : proposal_panels_q,
            'proposal_usd_iva' : proposal_usd_iva,
            'proposal_kw' : proposal_kw,
            'proposal_benefit' : proposal_benefit,
            'proposal_porc_price' : proposal_porc_price,
            'proposal_m2' : proposal_m2,
            'proposal_generation' : proposal_generation,
            'proposal_solar_fraction' : proposal_solar_fraction,
            'proposal_co2' : proposal_co2,
            'proposal_trees' : proposal_trees,
            'proposal_specific_gener' : proposal_specific_gener,
            'proposal_actions' : proposal_actions,
            'proposal_main' : proposal_main
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
        $("select[name='zone_id'").blur();
        $("#inflation_1").blur();
        $("#inflation_8").blur();
        $("#inflation_rest").blur();
        $("#discount_rate").blur();
    });
</script>