$('.datepicker').pickadate({
    // Strings and translations
    monthsFull: ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября',
        'Ноября', 'Декабря'],
    monthsShort: ['Янв', 'Февр.', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сент', 'Окт', 'Ноя', 'Дек'],
    weekdaysFull: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
    weekdaysShort: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    showMonthsShort: undefined,
    showWeekdaysFull: undefined,
    // Buttons
    today: 'Сегодня',
    clear: 'Очистить',
    close: 'Закрыть',
    // Accessibility labels
    labelMonthNext: 'Следующий месяц',
    labelMonthPrev: 'Предыдущий месяц',
    labelMonthSelect: 'Выбрать месяц',
    labelYearSelect: 'Выбрать год',
    // Formats
    format: 'yyyy-mm-dd',
    // First day of the week
    firstDay: 1,
});

$('#time').pickatime({
// 12 or 24 hour
    twelvehour: false,
});

$(document).ready(function() {
    $("#form").submit(function() {
        $.ajax({
            type: "POST",
            url: "../mail.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            alert("Данные отправлены");
            $("#form").trigger("reset");
        });
        return false;
    });
});