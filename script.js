$(document).ready(function () {
   $('.btn-slide') .click(function () {
  //     $('#panel').slideToggle('slow');
   //    $('.btn-slide').toggleClass('active');
       $('#panel').animate({height:'300px', width: '100%'},3000);
   });

$('.delete').click(function () {
    $(this).parent().animate({height: '20px'},'slow');
    $(this).parent().animate({width: '20px'},'slow')
});
$('.js-ajax').click(function () {
    event.preventDefault();
    $('#content').load($(this).attr('href'));
  //  $.get($(this).attr('href'), function (data) {
   //     $('#content').html(data);
    });
    //alert('Кнопка нажата');

//}) ;
   // $(#button).click(function () {

    })

//$('.js-ajax').on('click', function () {
 //   $('.js-ajax').off('click', function () {
//})

});