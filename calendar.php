<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css">

<?php include("head.php"); ?>

<body>
  <style>
    #calendar {
      max-width: 1100px;
      margin: 40px auto;
    }
  </style>
  <div id="app">

    <div id="main">
      <?php include("nav.php"); ?>

      <div class="main-content container-fluid">

        <div class="page-title bg-primary">
          <h3 class="text-white" style="padding-left:20px;padding-top:20px;">Calendar of Your Schedule</h3>
          <p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
            Check your schedule</p>
        </div>
        <section class="section">
          <div class="row mb-4">
            <div class="col-md-12">
              <div class="card ">

                <div class="card-body">

                  <div id="calendar"></div>

                </div>
              </div>

            </div>


          </div>

        </section>
      </div>
      <?php include("footer.php"); ?>
      <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>

      <script>

        document.addEventListener('DOMContentLoaded', function () {
          var calendarEl = document.getElementById('calendar');

          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            initialDate: '2024-12-01',
            themeSystem: "bootstrap",
            headerToolbar: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: [
              {
                title: 'My Event Kenz',
                start: '2024-12-01'
              },
              {
                title: 'Long Event Holy Week',
                start: '2024-12-07',
                end: '2024-12-10'
              },
              {
                groupId: '999',
                title: 'Repeating Event',
                start: '2024-12-09T16:00:00'
              },
              {
                groupId: '999',
                title: 'Repeating Event',
                start: '2024-12-16T16:00:00'
              },
              {
                title: 'Conference',
                start: '2024-12-11',
                end: '2024-12-13'
              },
              {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2024-12-28'
              }
            ]
          });

          calendar.render();
        });
      </script>
</body>

</html>