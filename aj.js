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


$(document).ready(function() {
    $('.second-button').on('click', function() {
        $('.animated-icon2').toggleClass('open');
    });

    //count up from birthdate
    countUpFromTime("Jan 6, 1989 19:00:00", 'countup1');
});