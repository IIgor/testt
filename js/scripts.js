/**
 * Created by shulga on 22.02.18.
 */
$(document).ready(function (e) {
    var login = 'https://api.worldoftanks.ru/wot/auth/login/?application_id=be8dcc1ce16763ad34eb081db8a94c4d&redirect_uri=http%3A%2F%2Fyour-number.top&display=popup&expires_at=30000&nofollow=0';
    //var logout = ;

    // var linkEnter = $('.header_enter'),
    //     linkOut = $('.header_out');
    //
    // linkOut.on('click', function(e){
    //     e.preventDefault();
    //     var token = $(this).data('token');
    //     // console.log(logout + token);
    //     $.ajax({
    //         method: "POST",
    //         url: 'https://api.worldoftanks.ru/wot/auth/logout/?application_id=be8dcc1ce16763ad34eb081db8a94c4d&access_token=2b1ada59faa46a030ee2075d181b55cbff7f9ff8',
    //         data: ''
    //     })
    //     .done(function( msg ) {
    //         console.log('done ' +  msg );
    //     })
    //     .fail(function(error) {
    //         console.log('error ' +  error );
    //     });
    // })


    $(".accordion_title").on('click', function(e){
        console.log($(this).parent());
        $(this).parent().toggleClass('open');
    });


});