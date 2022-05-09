(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */


    // On form submit
    $( document ).ready(function() {
    $( '#submit' ).click( function( event ) {
        event.preventDefault();
        alert('you sure ! ');
        // console.log('CLICKED!!');
        // Validate form (optional)
        // $( this ).validate();

         var count = document.getElementById('posts_count').value;

         var formData = new FormData( );

        // From the wp_ajax_prefix_ajax_first hook
        formData.append( 'action', 'prefix_import_posts' );
        formData.append( 'count', count );

        $.ajax({
            cache: false,
            type: "POST",
            url: ajaxurl,
            data: formData,
            processData: false, // Required for file upload
            contentType: false, // Required for file upload
            success: function( response ){

	            alert ('scussess !!');

            },
            error: function( xhr, status, error ) {
                console.log( 'Status: ' + xhr.status );
                console.log( 'Error: ' + xhr.responseText );
            }
        });

    });
    console.log('test');
 
jQuery( '#some-id' ).click(function(){
    var ajax_url = $( this ).data( 'ajaxurl' );
    console.log('CLICKED!!');
});
});

})( jQuery );


