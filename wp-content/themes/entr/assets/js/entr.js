( function ( $ ) {
    // Menu fixes
    function onResizeMenuLayout() {
        if ( $( window ).width() > 767 ) {
            $( ".main-menu" ).on( 'hover', '.dropdown', function () {
                $( this ).addClass( 'open' )
            },
                function () {
                    $( this ).removeClass( 'open' )
                }
            );
            $( ".dropdown" ).on( 'focusin',
                function () {
                    $( this ).addClass( 'open' )
                }
            );
            $( ".dropdown" ).on( 'focusout',
                function () {
                    $( this ).removeClass( 'open' )
                }
            );

        } else {
            $( ".dropdown" ).on( 'hover',
                function () {
                    $( this ).removeClass( 'open' )
                }
            );
        }
    }
    ;
    // initial state
    onResizeMenuLayout();
    // on resize
    $( window ).on( 'resize', onResizeMenuLayout );

    $( '.navbar .dropdown-toggle' ).on( 'focus', function () {
        $( this ).addClass( 'disabled' );
    } );

    var $myDiv = $( '#theme-menu' );

    $( document ).ready( function () {
        if ( $myDiv.length ) {
            mmenu = mmlight( document.querySelector( "#theme-menu" ) );
            mmenu.create( "(max-width: 767px)" );
            mmenu.init( "selected" );
            $( "#main-menu-panel" ).on( 'click', function ( e ) {
                e.preventDefault();
                $( "#theme-menu" ).appendTo( ".navbar-header" );
                if ( $( "#theme-menu" ).hasClass( "mm--open" ) ) {
                    mmenu.close();
                } else {
                    mmenu.open();
                    $( "#theme-menu li:first" ).focus();
                    $( "a.dropdown-toggle" ).focusin(
                        function () {
                            $( '.dropdown' ).addClass( 'open' )
                        }
                    );
                    $( "#theme-menu li:last" ).on( 'focusout',
                        function () {
                            mmenu.close();
                        }
                    );
                    $( '#theme-menu' ).on( 'focusout', function ( e ) {
                        setTimeout( function () { // needed because nothing has focus during 'focusout'
                            if ( $( ':focus' ).closest( '#theme-menu' ).length <= 0 ) {
                                mmenu.close();
                                $( "a#main-menu-panel" ).focus();
                            }
                        }, 0 );
                    } );
                    $( "#main-menu-panel" ).on( 'focuin',
                        function () {
                            mmenu.close();
                        }
                    );
                    $( "#main-menu-panel" ).on( 'keydown blur', function ( e ) {
                        if ( e.shiftKey && e.keyCode === 9 ) {
                            mmenu.close();
                        }
                    } );
                }
                e.stopPropagation();
            } );
        }
    } );

    $( document ).ready( function () {
        $( '.cart-open .page-wrap' ).on( 'click', function () {
            $( "body" ).removeClass( "cart-open" );
        } );
        $( '.site-header-cart .la-times-circle' ).on( 'click', function () {
            $( "body" ).toggleClass( "cart-open" );
        } );
        $( '.header-cart' ).on( 'click', function () {
            $( "body" ).addClass( "cart-open" );
        } );
    } );
} )( jQuery );