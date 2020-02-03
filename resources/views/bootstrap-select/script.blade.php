<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.6/js/bootstrap-select.min.js"></script>

<script>
$.fn.selectpicker.defaults = {
    countSelectedText: function (numSelected, numTotal) {
      return (numSelected == 1) ? '{0} {{__("item selected")}}' : '{0} {{__("items selected")}}';
    }
}
$.fn.selectpicker.Constructor.DEFAULTS.actionsBox = true;
$.fn.selectpicker.Constructor.DEFAULTS.deselectAllText = "{{__('None')}}";
$.fn.selectpicker.Constructor.DEFAULTS.liveSearch = true;
$.fn.selectpicker.Constructor.DEFAULTS.liveSearchNormalize = true;
$.fn.selectpicker.Constructor.DEFAULTS.noneSelectedText = "{{__('Nothing selected')}}";
$.fn.selectpicker.Constructor.DEFAULTS.noneResultsText = "{{__('No matches for')}} {0}";
$.fn.selectpicker.Constructor.DEFAULTS.selectAllText = "{{__('All')}}";
$.fn.selectpicker.Constructor.DEFAULTS.selectedTextFormat = 'count > 2';
$.fn.selectpicker.Constructor.DEFAULTS.showTick = true;
$.fn.selectpicker.Constructor.DEFAULTS.title = "{{__('Select')}}";
$.fn.selectpicker.Constructor.DEFAULTS.style = "btn-primary";
$.fn.selectpicker.Constructor.DEFAULTS.width = '100%';
</script>