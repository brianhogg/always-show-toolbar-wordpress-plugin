jQuery(document).ready(function($){
    // Check if toggled
    setTimeout(function() {
        var $toolbarButton = $('div[aria-label="' + always_show_toolbar.tooltip + '"]:first');
        if ( false == $toolbarButton.hasClass('mce-active') ) {
            window.tinymce.execCommand('WP_Adv');
        }
    }, 1000);
});