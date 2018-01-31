/**
 * Created by feroz on 1/30/2018.
 */


$(document).ready(function(){
    $('#login_form_submit').click(function(){
        var user_name = $("#user_name").val();
        var password = $("#password").val();
        //console.log("username = "+user_name+" password = "+password)

        $.ajax({
            url: 'users.php',
            dataType: 'text',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: 'user='+user_name+'pass='+password,
            success: function( data, textStatus, jQxhr ){
                //$('#response pre').html( data );
                alert('asdfasdf');
            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });
    });

    var timer = new Timer();
    $('#chronoExample .startButton').click(function () {
        alert('bin hier');
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
    timer.addEventListener('started', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });
    timer.addEventListener('reset', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });



});
