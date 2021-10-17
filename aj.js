function countUpFromTime(countFrom, id) {
    countFrom = new Date(countFrom).getTime();
    var now = new Date(),
        countFrom = new Date(countFrom),
        timeDifference = (now - countFrom);

    var secondsInADay = 60 * 60 * 1000 * 24,
        secondsInAHour = 60 * 60 * 1000;

    days = Math.floor(timeDifference / (secondsInADay) * 1);
    years = Math.floor(days / 365);
    if (years > 1) { days = days - (years * 365) }
    hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
    mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
    secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);

    // var idEl = document.getElementById(id);
    // idEl.getElementsByClassName('years')[0].innerHTML = years;
    // idEl.getElementsByClassName('days')[0].innerHTML = days;
    // idEl.getElementsByClassName('hours')[0].innerHTML = hours;
    // idEl.getElementsByClassName('minutes')[0].innerHTML = mins;
    // idEl.getElementsByClassName('seconds')[0].innerHTML = secs;

    $(".years").text(years + " y");
    $(".days").text(days + " d");
    $(".hours").text(hours + " h");
    $(".minutes").text(mins + " m");
    $(".seconds").text(secs + " s");

    clearTimeout(countUpFromTime.interval);
    countUpFromTime.interval = setTimeout(function() { countUpFromTime(countFrom, id); }, 1000);
}


function scrollUp() {
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
}


function upButton() {
    var btn = $('#upbutton');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });
}


$(document).ready(function() {
    $('.second-button').on('click', function() {
        $('.animated-icon2').toggleClass('open');
    });

    //count up from birthdate
    countUpFromTime("Jan 6, 1989 19:00:00", 'countup1');

    //scroll up button
    //scrollUp();

    upButton();

});