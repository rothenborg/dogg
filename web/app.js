$('#box').click(function() {
    $(this).animate({width: 200,height: 200});
});

$(document).keyup(function( event ) {
    if(event.which === 13) {
        $('#box').animate({width: 100,height: 100});
    }
});