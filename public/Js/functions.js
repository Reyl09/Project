//Menu Toggle
var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

//Chart
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',

    });
    calendar.render();
  });

//sbar
$(document).ready(function() {
    function toggleSidebar() {
        $('#wrapper').toggleClass('sidebar-closed');
    }

    $(window).resize(function() {
        if ($(window).width() <= 767) {
            $('#wrapper').addClass('sidebar-closed');
        } else {
            $('#wrapper').removeClass('sidebar-closed');
        }
    });

    $('.toggle-sidebar').click(function() {
        toggleSidebar();
    });
});

