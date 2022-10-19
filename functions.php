add_action('wp_footer', function () {

    ?>
    <script>
    ( function( $ ) {

        $( document ).on( 'ready', function() {

            $( '.vc_tta-tabs' ).each( function() {
                var $tabs = $( this ).find( '.vc_tta-tab' );
                $tabs.each( function( index, value ) {
                    $( this ).addClass( 'tab-index-' + index );
                } );
                var $tabContent = $( this ).find( '.vc_tta-panel' );
                $tabContent.each( function( index, value ) {
                    $( this ).addClass( 'tab-index-' + index );
                } );
            } );

        } );

    } ) ( jQuery );
    </script>

<?php });
