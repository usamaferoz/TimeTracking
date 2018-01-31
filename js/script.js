/**
 * Created by feroz on 1/31/2018.
 */


$(document).ready(function(){


    var timer = new Timer();
    $('#chronoExample .startButton').click(function () {
        var task = $('#task').val();

        $.ajax({
            url: 'timeTracking',
            dataType: 'text',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: 'do=start&task='+task,
            success: function( data, textStatus, jQxhr ){
            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });
        timer.start();
    });
    $('#chronoExample .pauseButton').click(function () {
        timer.pause();
    });
    $('#chronoExample .stopButton').click(function () {
        timer.stop();
    });
    $('#chronoExample .resetButton').click(function () {
        timer.reset();
    });
    timer.addEventListener('secondsUpdated', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });
    timer.addEventListener('minutesUpdated', function (e) {

        //alert(timer.getTimeValues().toString());
        var task = $('#task').val();
        $.ajax({
            url: 'timeTracking',
            dataType: 'text',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: 'do=autoupdate&task='+task,
            success: function( data, textStatus, jQxhr ){
            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });
    });
    timer.addEventListener('started', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });
    timer.addEventListener('reset', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });



});
