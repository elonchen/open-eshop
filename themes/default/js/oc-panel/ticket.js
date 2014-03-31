$(document).ready(function() {
    var trigger = false;
    var panels = $('.user-infos');
    $(panels).each(function(){
        $(this).hide();
    });
    

    //Click dropdown
    $('.dropdown-user').click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');


        //current button
        var currentButton = $(this);
        $(dataFor).slideToggle(400, function() {
            //Completed slidetoggle
            if($(this).is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up"></i>');
                $('.short-text', this).addClass('hide');
                $('.long-text', this).removeClass('hide');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down"></i>');
                $('.short-text', this).removeClass('hide');
                $('.long-text', this).addClass('hide');
            }
        })
    });

    $('#collapse-all-tickets').on('click',function(){
        $('.user-ticket').each(function(){
            if(!trigger)
            {
                $('.short-text').hide();
                $('.long-text').show();
                trigger = true; 
            }
            else
            {
                $('.short-text').show();
                $('.long-text').hide();
                trigger = false;
            }
            
        });
    });

    $('[data-toggle="tooltip"]').tooltip();
});