document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'America/Sao_Paulo',
        initialView: 'dayGridMonth',
        initialDate: $('#data_inicial').val(),/* '2020-09-01', */
        editable: false,
        height: '75vh',
        events: {
            url: '../includes/getEvents.php',
            failure: function() {
                alert('Não foi possível carregar os eventos');
            }
        },
        eventClick: function(info) {
            info.jsEvent.preventDefault(); // don't let the browser navigate
            if (info.event.url) {
                console.log(info.event.url)
                window.open(info.event.url);
            }
          }
    });
    calendar.render();
});
