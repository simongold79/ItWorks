(function($) {
$('#toggle').toggle( 
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="../wp-content/themes/itWorks/images/menu.png">');
        });
    }, 
    function() {
        $('#popout').animate({ left: -250 }, 'slow', function() {
            $('#toggle').html('<img src="../wp-content/themes/itWorks/images/menu.png">');
        });
    }
);
})(jQuery);