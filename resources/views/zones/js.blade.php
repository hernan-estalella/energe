<script type="text/javascript">
    @for($i = 1; $i <= 12; $i++)
    m_{{$i}} = new AutoNumeric("#m_{{$i}}", decimal);
    @endfor

    @if (old('m_1') !== null)
    m_1.set({{old('m_1')}});
    @elseif(isset($zone))
    m_1.set({{$zone->radiation->m_1}});
    @endif
    @if (old('m_2') !== null)
    m_2.set({{old('m_2')}});
    @elseif(isset($zone))
    m_2.set({{$zone->radiation->m_2}});
    @endif
    @if (old('m_3') !== null)
    m_3.set({{old('m_3')}});
    @elseif(isset($zone))
    m_3.set({{$zone->radiation->m_3}});
    @endif
    @if (old('m_4') !== null)
    m_4.set({{old('m_4')}});
    @elseif(isset($zone))
    m_4.set({{$zone->radiation->m_4}});
    @endif
    @if (old('m_5') !== null)
    m_5.set({{old('m_5')}});
    @elseif(isset($zone))
    m_5.set({{$zone->radiation->m_5}});
    @endif
    @if (old('m_6') !== null)
    m_6.set({{old('m_6')}});
    @elseif(isset($zone))
    m_6.set({{$zone->radiation->m_6}});
    @endif
    @if (old('m_7') !== null)
    m_7.set({{old('m_7')}});
    @elseif(isset($zone))
    m_7.set({{$zone->radiation->m_7}});
    @endif
    @if (old('m_8') !== null)
    m_8.set({{old('m_8')}});
    @elseif(isset($zone))
    m_8.set({{$zone->radiation->m_8}});
    @endif
    @if (old('m_9') !== null)
    m_9.set({{old('m_9')}});
    @elseif(isset($zone))
    m_9.set({{$zone->radiation->m_9}});
    @endif
    @if (old('m_10') !== null)
    m_10.set({{old('m_10')}});
    @elseif(isset($zone))
    m_10.set({{$zone->radiation->m_10}});
    @endif
    @if (old('m_11') !== null)
    m_11.set({{old('m_11')}});
    @elseif(isset($zone))
    m_11.set({{$zone->radiation->m_11}});
    @endif
    @if (old('m_12') !== null)
    m_12.set({{old('m_12')}});
    @elseif(isset($zone))
    m_12.set({{$zone->radiation->m_12}});
    @endif

    $(function () {
        $('#form').submit(function(){
            $(this).find(':input[type=submit]').prop('disabled', true);
        });
    });        
</script>