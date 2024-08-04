<!DOCTYPE html>
<html>
<head>
<title>Calendario de Eventos</title>

    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
        .orange{
            background-color: #D99748 !important;
            color: white;
        }

        .orange:hover{
          color: white  
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>
</head>
<body>
    <div class="container">

    <h2 class="text-center text-white orange rounded p-2 mb-4">Calendario de Eventos</h2>
    <a class="orange p-2" href="{{ route('dashboard') }}">Volver al Inicio</a>
    




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
                <div class="form-group">
                  <label for="start-date" class="col-form-label">Fecha y Hora de Inicio:</label>
                  <input type="datetime-local" class="form-control datetimepicker" id="start-date" name="start_date">
                </div>
                <div class="form-group">
                  <label for="end-date" class="col-form-label">Fecha y Hora de Fin:</label>
                  <input type="datetime-local" class="form-control datetimepicker" id="end-date" name="end_date">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>
              <form  onsubmit="return confirm('¿Desea eliminar el pendiente?')" method="POST" action="{{ route('calendar.destroy') }}" id="deleteEventForm">
                @csrf
                <input type="hidden" id="delete-event-id" name="id">
                <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                 dateClick: function(info) {
                    $('#eventForm').trigger('reset');
                    $('#deleteEventForm').hide();
                    $('#start-date').val(info.dateStr + 'T00:00');
                    $('#end-date').val(info.dateStr + 'T23:59');
                    $('#eventModal').modal('show');
                },
                eventClick: function(info) {
                    $('#eventForm').trigger('reset');
                    $('#event-title').val(info.event.title);
                    $('#start-date').val(info.event.start.toISOString().slice(0, 16));
                    $('#end-date').val(info.event.end ? info.event.end.toISOString().slice(0, 16) : '');
                    $('#delete-event-id').val(info.event.id);
                    $('#deleteEventForm').show();
                    $('#eventModal').modal('show');
                }
            });

            calendar.render();

            $('.datetimepicker').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss'
            });
        });
    </script>
</body>
</html>
