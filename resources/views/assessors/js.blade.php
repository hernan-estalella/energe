<script type="text/javascript">
    $(function () {
        $('#form').submit(function(){
            $(this).find(':input[type=submit]').prop('disabled', true);
        });
    });        
</script>