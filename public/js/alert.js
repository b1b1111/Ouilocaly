$(function() {
    $("#tabs").tabs({
        show: { effect: "blind", direction: "right", duration: 300 }
    });
    $( "#accordion" ).accordion();

    var btn = $('#accordion li a');
    var wrapper = $('#accordion li');

    $(btn).on('click', function() {
        $(btn).removeClass('active');
        $(btn).parent().find('.addon').removeClass('fadein');
        
        $(this).addClass('active');
        $(this).parent().find('.addon').addClass('fadein');
    });
});

$('#icon2').click(function(){
    $(this).toggleClass('transform');
  });


/**
 * Alert confirmation d'envoie du mail
 */
function SendMail() {
    var msg="Votre email est envoyé";
    alert(msg);
}