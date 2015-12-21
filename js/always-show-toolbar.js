jQuery(document).ready(function($){
    // Check if toggled
    setTimeout(function() {
        var $toolbarButton = $('div[aria-label="' + always_show_toolbar.tooltip + '"]');
        if ( false == $toolbarButton.hasClass('mce-active') ) {
            $toolbarButton.click();
        }
    }, 1000);
});