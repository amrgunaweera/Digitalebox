$( document ).ready(function() {

    // Password Toggle
    $(".show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('.show_hide_password input').attr("type") == "text"){
            $('.show_hide_password input').attr('type', 'password');
            $('.show_hide_password i').addClass( "fa-eye-slash" );
            $('.show_hide_password i').removeClass( "fa-eye" );
        }else if($('.show_hide_password input').attr("type") == "password"){
            $('.show_hide_password input').attr('type', 'text');
            $('.show_hide_password i').removeClass( "fa-eye-slash" );
            $('.show_hide_password i').addClass( "fa-eye" );
        }
    });
    /////////////////////////////////////////////////////////////////////////////////

    // side menu start
    $("#menu1").metisMenu();

    // side menu scroller start
    $('#slimscrolldiv').slimScroll({
        width: '220px',
        height: '100%'
    });
    /////////////////////////////////////////////////////////////////////////////////


    //initial sizes
    set_sidebar_heights();

    // change heights when window resized
    $( window ).resize(function() {
        set_sidebar_heights();
    });

    function set_sidebar_heights() {
        //side bar height set
        $('#side-bar').height( $(window).height() - $('.app-header .navbar-expand-lg').height() );

        //menu height set
        $('.slimScrollDiv').height( menu_height() );

        function menu_height(){
            var header_h = $('.app-header .navbar-expand-lg').height();
            var w_height = $(window).height();
            var box_h = $('.account-section').height();
            var menu_h = w_height - header_h - box_h;

            return menu_h;
        }
    }
    /////////////////////////////////////////////////////////////////////////////////


    // Account status toglle
    $(".account-status i").click( function(event){
        event.preventDefault();

        if ( $(this).hasClass("isDown") ) {

            var menu_h = $('#side-bar').height() - 210;

            $( ".slimScrollDiv" ).animate({
                height: menu_h
            }, 500, function() {
                // Animation complete.
            });
            $( ".account-status" ).animate({
                height: "180"
            }, 500, function() {
                // Animation complete.
            });

        } else {

            var menu_h = $('#side-bar').height() - 70;

            $( ".slimScrollDiv" ).animate({
                height: menu_h
            }, 500, function() {
                // Animation complete.
            });
            $( ".account-status" ).animate({
                height: '40'
            }, 500, function() {
                // Animation complete.
            });

        }
        $(this).toggleClass("isDown");
        return false;
    });


    // Menu button toggle
    $( ".menu-btn" ).click(function(event) {
        event.preventDefault();

        //closing connection popup
        $('.connection-popup').hide();
        $('.connection').removeClass("isDown");

        if ( $(this).hasClass("isDown") ) {

            $( ".side-bar" ).animate({
                left: -220
            }, 500, function() {
                // Animation complete.
            });

        } else {

            $( ".side-bar" ).animate({
                left: 0
            }, 500, function() {
                // Animation complete.
            });

        }
        $(this).toggleClass("isDown");
        return false;
    });
    /////////////////////////////////////////////////////////////////////////////////


    // Social Connect popup

    $( ".connection" ).click(function(event) {
        event.preventDefault();

        if ( $(this).hasClass("isDown") ) {

            $('.connection-popup').hide();

        } else {

            $('.connection-popup').show();

        }
        $(this).toggleClass("isDown");
        return false;
    });


    // Check box recolor initiate

    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal',
        increaseArea: '20%' // optional
    });
    /////////////////////////////////////////////////////////////////////////////////


    //Tooltips Initiating
    $('[data-toggle="tooltip"]').tooltip();
    /////////////////////////////////////////////////////////////////////////////////

});