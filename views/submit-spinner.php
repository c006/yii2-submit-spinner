<?php
/** @var $class_id string */
/** @var $form_id string */
/** @var $bg_color string */
/** @var $bg_opacity float */
/** @var $spin_speed float */
/** @var $radius int */
/** @var $sections int */
/** @var $section_size int */
/** @var $section_offset int */
/** @var $bg_spinner_color string */
/** @var $bg_spinner_opacity float */
/** @var $section_opacity_base float */
/** @var $section_color string */
/** @var $proportionate_increase boolean */
/** @var $button_id string */
/** @var $form_validate boolean */
list($r, $g, $b) = sscanf($bg_spinner_color, "#%02x%02x%02x");
$bg_spinner_color = "rgba({$r},{$g},{$b},{$bg_spinner_opacity})";
if ($proportionate_increase) {
    $ratio          = $radius / 100 / 2;
    $section_size   = $ratio * $section_size;
    $section_offset = $ratio * $section_offset;
}
$spin_speed *= 1000;
?>
<style type="text/css">

    <?= '#'. $class_id ?>
    {
        display          :none;
        position         :absolute;
        left             :0;
        top              :0 ;
        width            :100% ;
        height           :100%;
        background-color :<?= $bg_color ?>;
        opacity          :<?= $bg_opacity ?>;
        z-index          :100000;
    }

    <?= '#'. $class_id ?>
    .spinner {
        display          :inline-block;
        position         :absolute;
        left             :50%;
        top              :50%;
        transform: translate(-50%, -50%);
        width            :<?= $radius ?>px;
        height           :<?= $radius ?>px;
        background-color : <?= $bg_spinner_color ?>;
        border-radius    :<?= $radius / 2 ?>px;
    }

    <?= '#'. $class_id ?>
    .circle {
        display          :inline-block;
        position         :absolute;
        top              :<?= $radius / 2 - $section_size / 2 ?>px;
        left             :<?= $radius / 2 - $section_size / 2  ?>px;
        width            :<?= $section_size ?>px;
        height           :<?= $section_size ?>px;
        border-radius    :<?= $section_size / 2 ?>px;
        background-color : <?= $section_color ?>;
    }

    <?= '#'. $class_id ?>
    .rotating {
        -webkit-animation-name: spin;
        -webkit-animation-duration: <?= $spin_speed ?>ms;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;

        -moz-animation-name: spin;
        -moz-animation-duration: <?= $spin_speed ?>ms;
        -moz-animation-iteration-count: infinite;
        -moz-animation-timing-function: linear;

        -ms-animation-name: spin;
        -ms-animation-duration: <?= $spin_speed ?>ms;
        -ms-animation-iteration-count: infinite;
        -ms-animation-timing-function: linear;

        animation-name: spin;
        animation-duration: <?= $spin_speed ?>ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @-ms-keyframes spin {
        from { -ms-transform: rotate(0deg); }
        to { -ms-transform: rotate(360deg); }
        }
    @-moz-keyframes spin {
        from { -moz-transform: rotate(0deg); }
        to { -moz-transform: rotate(360deg); }
        }
    @-webkit-keyframes spin {
        from { -webkit-transform: rotate(0deg); }
        to { -webkit-transform: rotate(360deg); }
        }
    @keyframes spin {
        from {
            transform:rotate(0deg);
            }
        to {
            transform:rotate(360deg);
            }
        }


</style>
<div id="<?= $class_id ?>">
    <div class="spinner rotating">
        <?php for ($i = 0; $i < $sections; $i++) : ?>
            <div class="circle" style="transform:  rotate(<?= 360 / $sections * $i ?>deg) translateY(<?= $section_offset ?>px);
                opacity: <?= ($i / $sections + $section_opacity_base) ?>">
            </div>
        <?php endfor ?>
    </div>
</div>

<script type="text/javascript">
    jQuery(function () {
        set_submit_spinner_form('<?= $form_id ?>');
    });
    /**
     *
     * @param form_id
     */
    <?php if ($form_validate == FALSE) : ?>
    function set_submit_spinner_form(form_id) {
        jQuery('#<?= $class_id ?>').height(jQuery(window).height());
        if (form_id.indexOf('#') == -1) {
            form_id = '#' + form_id;
        }
        jQuery(form_id)
                .unbind('submit')
                .submit(
                        function (event) {
                            show_submit_spinner();
                            jQuery('html').scrollTop(0);
                            jQuery('body').scrollTop(0);
                        });
    }
    <?php else : ?>
    function set_submit_spinner_form(form_id) {
        jQuery('#<?= $class_id ?>').height(jQuery(window).height());
        if (form_id.indexOf('#') == -1) {
            form_id = '#' + form_id;
        }
        jQuery(form_id)
                .on('afterValidate', function (event, params) {
                    if (jQuery(form_id).find('.has-error').length == 0) {
                        show_submit_spinner();
                    }
                });
    }
    <?php endif ?>

    function show_submit_spinner() {
        jQuery('html').scrollTop(0);
        jQuery('body').scrollTop(0);
        jQuery('#<?= $class_id ?>').show();
    }

    function hide_submit_spinner() {
        jQuery('#<?= $class_id ?>').hide();
    }
</script>
