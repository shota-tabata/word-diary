<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='utf-8' />
    <title>ひとこと日記帳</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

    <!-- FullcalendarのCDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js"></script>
    
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>

  </head>
  <body>
      <div id='calendar'></div>
      
      <form method="POST" action="{{ ('event.store') }}">
        @csrf
        <input type="text" name="title">
        <input type="date" name="start">
        <input type="text" name="word">
        <input type="text" name="other">
        <input type="text" name="file_name">
        <button type="submit">登録</button>
        
      </form>
      
      <script>
        const resetCalendarView = () => {
          const calendarEl = document.getElementById('calendar');
          const calendar = new FullCalendar.Calendar(calendarEl, {
            firstDay: 1,
            headerToolbar: {
                           right: 'prev,next'
                           },
            events: '',
          });
          calendar.render();
        };
      </script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</html>
