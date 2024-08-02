<!DOCTYPE html>
<html>
<head>
    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="card-body">
        <div id='calendar'></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="eventModalLabel">Agregar Pendiente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('calendar.store') }}" id="eventForm">
              @csrf
              <div class="form-group">
                <label for="event-title" class="col-form-label">Título:</label>
                <input type="text" class="form-control" id="event-title" name="event">
              </div>
              <input type="hidden" id="event-date" name="start_date">
              <input type="hidden" id="end-date" name="end_date">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: @json($events),
                dateClick: function(info) {
                    $('#event-date').val(info.dateStr);
                    $('#end-date').val(info.dateStr); // O puedes ajustar según la lógica de tu aplicación
                    $('#eventModal').modal('show');
                }
            });

            calendar.render();
        });
    </script>
</body>
</html>
