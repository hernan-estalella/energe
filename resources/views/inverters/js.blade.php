<script type="text/javascript">
    min_panels = new AutoNumeric("#min_panels", integer);
    max_panels = new AutoNumeric("#max_panels", integer);

    @if (old('min_panels') !== null)
    min_panels.set({{old('min_panels')}});
    @elseif(isset($inverter))
    min_panels.set({{$inverter->min_panels}});
    @endif

    @if (old('max_panels') !== null)
    max_panels.set({{old('max_panels')}});
    @elseif(isset($inverter))
    max_panels.set({{$inverter->max_panels}});
    @endif

    $(function () {
        $('#form').submit(function(){
            $(this).find(':input[type=submit]').prop('disabled', true);
        });
    });        
</script>