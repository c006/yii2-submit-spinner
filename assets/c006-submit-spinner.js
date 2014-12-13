/**
 * Created by user on 5/24/14.
 */

jQuery(function () {
    jQuery('#c006').height(jQuery(window).height());

    jQuery('#table-form').submit(
        function (event) {
            jQuery('#c006').show();
            jQuery('html').scrollTop(0);
            /* Used for testing, prevents submit */
            //event.preventDefault();
        });
});

