<<<<<<< HEAD
function changePos() 
{
   //Centra el contenedor de los tile
    var containerX = $('#events-promo') .width();
    var contentX = $('#tile-container').width();
    var margin = ( containerX - contentX ) / 2;
    $('#tile-container').css({'margin-left': margin + 3 });
}

function removeClass()
{
    $('#tile-container').removeClass( 'eight' );
    $('#tile-container').removeClass( 'six' );
    $('#tile-container').removeClass( 'four' );
    $('#tile-container').removeClass( 'two' );
}

function switchTileGroup()
{
    if( $(window).width() >= 1200 )
    {
        removeClass();
        $('#tile-container').addClass( 'eight' );
    }
    else 
    {
        if( $(window).width() >= 910 )
        {
            removeClass();
            $('#tile-container').addClass( 'six' );
        }
        else
        {
            if ( $(window).width() >= 650 )
            {
                removeClass();
                $('#tile-container').addClass( 'four' );
            }
            else
            {
                removeClass();
                $('#tile-container').addClass( 'two' );
            }
        }
    } // end if...else
        
}

function showAllEvents()
{
    $('.all-events-content').animate({
        left: "+=0",
        height: "toggle"
    }, 500, function() {
            $('.all-events-content').toggleClass( 'block' );
            $( '.arrow' ).toggleClass('fa-chevron-up');
            $( '.arrow' ).toggleClass('fa-chevron-down');      
      });

    if(! $('.all-events-content').hasClass('block') )
    {
        changePosSearch();
    }
}

$(document).on( 'ready', function(){

    changePos();
    switchTileGroup();
    $('#search-form .form-control').focus();

    $('.brand').on( 'click' , showAllEvents );
    
});

(function () {
    width = $(window).width();
    height = $(window).height();
    setInterval( function () {
        if ( $(window).width() !== width || $(window).height() !== height ) {
            width = $(window).width();
            height = $(window).height();
            changePos();
            switchTileGroup();
        }
    }, 50);
=======
function changePos() 
{
   //Centra el contenedor de los tile
    var containerX = $('#events-promo') .width();
    var contentX = $('#tile-container').width();
    var margin = ( containerX - contentX ) / 2;
    $('#tile-container').css({'margin-left': margin + 3 });
}

function removeClass()
{
    $('#tile-container').removeClass( 'eight' );
    $('#tile-container').removeClass( 'six' );
    $('#tile-container').removeClass( 'four' );
    $('#tile-container').removeClass( 'two' );
}

function switchTileGroup()
{
    if( $(window).width() >= 1200 )
    {
        removeClass();
        $('#tile-container').addClass( 'eight' );
    }
    else 
    {
        if( $(window).width() >= 910 )
        {
            removeClass();
            $('#tile-container').addClass( 'six' );
        }
        else
        {
            if ( $(window).width() >= 650 )
            {
                removeClass();
                $('#tile-container').addClass( 'four' );
            }
            else
            {
                removeClass();
                $('#tile-container').addClass( 'two' );
            }
        }
    } // end if...else
        
}

function showAllEvents()
{
    $('.all-events-content').animate({
        left: "+=0",
        height: "toggle"
    }, 500, function() {
            $('.all-events-content').toggleClass( 'block' );
            $( '.arrow' ).toggleClass('fa-chevron-up');
            $( '.arrow' ).toggleClass('fa-chevron-down');      
      });

    if(! $('.all-events-content').hasClass('block') )
    {
        changePosSearch();
    }
}

$(document).on( 'ready', function(){

    changePos();
    switchTileGroup();
    $('#search-form .form-control').focus();

    $('.brand').on( 'click' , showAllEvents );
    
});

(function () {
    width = $(window).width();
    height = $(window).height();
    setInterval( function () {
        if ( $(window).width() !== width || $(window).height() !== height ) {
            width = $(window).width();
            height = $(window).height();
            changePos();
            switchTileGroup();
        }
    }, 50);
>>>>>>> e8478b0143f76fe086bcb99c853b6b0d5ac212af
}());