/**
 * Created by user on 5/24/14.
 */

jQuery(function () {
    jQuery('#c006').height(jQuery(window).height());
});

function set_submit_spinner_form(form_id) {
    if (form_id.indexOf('#') == -1) {
        form_id = '#' + form_id;
    }
    jQuery(form_id)
        .unbind('submit')
        .submit(
        function (event) {
            jQuery('#c006').show();
            jQuery('html').scrollTop(0);
            /* Used for testing, prevents submit */
            //event.preventDefault();
        });
}
