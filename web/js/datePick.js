$(function() {
    $('#datetimepicker1').datetimepicker({
        locale: 'fr',
        format: 'L',
        daysOfWeekDisabled: [0, 2],
        minDate: 'now',
        disabledDates: [
            /*moment("25-12", "DD-MM"),*/
            moment().paques(),
            moment().lundiDePaques(),
            moment().ascension(),
            moment().pentecote(),

            moment().jourDeLAn(),
            moment().feteDuTravail(),
            moment().victoireDeAllies(),
            moment().feteNationale(),
            moment().assomption(),
            moment().toussaint(),
            moment().armistice(),
            moment().noel()

        ]
    });
});

$(function() {
    $('#datetimepicker2').datetimepicker({
        locale: 'fr',
        format: 'L',

    });
});
