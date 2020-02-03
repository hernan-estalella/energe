<script>
    $('select[name="client_id"]').selectpicker({
        noneResultsText: $.fn.selectpicker.Constructor.DEFAULTS.noneResultsText + "<br><button type='button' class='btn btn-success' onclick='newClient()'>Crear nuevo</button>"
    });
</script>