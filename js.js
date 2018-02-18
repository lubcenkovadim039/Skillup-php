$(document).ready(function() {
    $('#btn1').click(function () {
        $('h2.task1').html('!');
    });
    $('#btn2').click(function () {
        $('h3.task2').css('color', 'red');
    });
    $('#btn3').click(function () {
        $('h2.task3').css({color: 'deepskyblue', 'font-size': '20px'});
    });
    $('#btn4').click(function () {
        $('.test').css('color', 'red');
    });
    $('#btn5').click(function () {
        $('h2.task5').css('color', 'red');
    });
    $('#btn6').click(function () {
        $('p + p').css('color', 'red');
    });
    $('#btn7').click(function () {
        $('li + li.task7').css('color', 'red');
    });
    $('#btn8').click(function () {
        $('h2.task8 i').css('color', 'red');
    });
    $('#btn9').click(function () {
        $('h2.task9 > i').css('color', 'red');
    });
    $('#btn10').click(function () {
        $(':header.task10').css('color', 'red');
    });
    $('#btn11').click(function () {
        $('h6:not(.task11)').css('color', 'red');
    });
    $('#btn12').click(function () {
        $(':header:not(.task12)').css('color', 'red');
    });
    $('#btn13').click(function () {
        $(':header.task13 + :header.task13').css('color', 'red');
    });
    $('#btn16').click(function () {
        $('p.task16:first').css('color', 'red');
    });
    $('#btn17').click(function () {
        $('p.task17:last').css('color', 'red');
    });
    $('#btn19').click(function () {
        $('h2.task19:has(i) ').css('color', 'red');
    });
    $('#btn20').click(function () {
        $('h2.task20 > i ').css('color', 'red');
    });
    $('#btn21').click(function () {
        $('li.task21:eq(2)').css('color', 'red');
    });
    $('#btn23').click(function () {
        $('li.task23:lt(9)').css('color', 'red');
    });
});
