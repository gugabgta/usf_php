document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'America/Sao_Paulo',
        initialView: 'dayGridMonth',
        initialDate: $('#data_inicial').val(),
        editable: false,
        height: '75vh',
        locale: 'br',
        events: {
            url: '../includes/getEvents.php',
            failure: function() {
                alert('Não foi possível carregar os eventos');
            }
        },
        eventClick: function(info) {
            info.jsEvent.preventDefault(); // don't let the browser navigate
            if (info.event.url) {
                window.open(info.event.url);
            }
        },
    });
    calendar.render();
});
