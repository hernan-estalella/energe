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
    });
</script>