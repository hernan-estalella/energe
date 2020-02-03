<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
<script>
$.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
    locale: "{{config('app.locale')}}",
    ignoreReadonly: true,
    icons: {
        time: 'far fa-clock',
        date: 'far fa-calendar-alt',
        up: 'fas fa-angle-up',
        down: 'fas fa-angle-down',
        previous: 'fas fa-angle-left',
        next: 'fas fa-angle-right',
        today: 'far fa-calendar-check',
        clear: 'far fa-calendar-times',
        close: 'fas fa-times'        
    },
    defaultDate: moment()
});

var tempus_datetime = $.extend({}, $.fn.datetimepicker.Constructor.Default);

var tempus_date = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
    format: 'L'
});

var tempus_time = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
    format: 'LT'
});
</script>