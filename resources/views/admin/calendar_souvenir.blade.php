@extends('admin/sidebar_admin')
@section('title', 'Calendar')
@section('konten')
<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'id',
            events: '/api/deadlines/souvenirs',
            headerToolbar: {
                left: 'prev today next',
                center: 'title',
                right: '',
            },
            eventClick: function(info) {

                const eventId = info.event.id;
                window.location.href = "{{ route('admin.reminder.detail', ['id' => '__ID__']) }}".replace('__ID__', eventId);
            }
        });

      calendar.render();
    });

  </script>

<style>

    #calendar {
        margin: 0 auto;
        margin-left: 304px;
        display: flex;
        justify-content: center;
    }

    .fc-header-toolbar{
        background-color: #28623f;
        display: flex;
        flex-direction: row;
        padding: 10px 20px;
    }

    .fc-toolbar-title {
        font-size: 24px;
        font-weight: bold;
        color: #c29c5b;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .fc-event {
        background-color: #ff6f61;
        border-color: #ff6f61;
    }

    .fc-event:hover {
        background-color: #ff4f3d;
        cursor: pointer;
    }

    .fc .fc-button {
        background-color: #28623f;
        color: white;
        border: none;
        text-transform: capitalize;
    }

    .fc-icon {
        color: #c29c5b;
    }


    .fc .fc-button:disabled {
        background-color: #2f2f2f;
        color: white;
        border: none;
        pointer-events: none;
    }

    .fc .fc-button:hover {
        background-color: #c29c5b;
        color: white;
        border: none;
    }

    .fc .fc-button:hover .fc-icon {
        color: white;
    }

    .fc .fc-next-button, .fc .fc-prev-button {
        border-radius: 100%;
    }

    .fc .fc-col-header-cell-cushion {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .fc-today-button.fc-button.fc-button-primary {
        padding: 10px 10px;
        border-style: solid;
        border-color: #c29c5b;
        border-radius: 30%;
        color: #c29c5b;
    }

    .fc-today-button.fc-button.fc-button-primary:hover {
        border-style: solid;
        border-color: #c29c5b;
        color: white;
    }

    .fc-today-button.fc-button.fc-button-primary:disabled {
        background-color: #2f2f2f;
        color: white;
        border: none;
    }
</style>

<div id="calendar"></div>


@endsection
