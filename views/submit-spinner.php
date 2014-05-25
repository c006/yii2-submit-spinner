<?php
    /** @var $bg_color string */
    /** @var $bg_opacity float */
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

    list($r, $g, $b) = sscanf($bg_spinner_color, "#%02x%02x%02x");
    $bg_spinner_color = "rgba({$r},{$g},{$b},{$bg_spinner_opacity})";

    if ( $proportionate_increase ) {
        $ratio          = $radius / 100 / 2;
        $section_size   = $ratio * $section_size;
        $section_offset = $ratio * $section_offset;
    }
?>
<style type="text/css">
    #c006 {
        display          : none;
        position         : absolute;
        left             : 0;
        top              : 0;
        width            : 100%;
        height           : 100%;
        background-color : <?= $bg_color ?>;
        opacity          : <?= $bg_opacity ?>;
        z-index          : 100000;
    }

    #c006 #submit-spinner {
        position         : absolute;
        left             : 45%;
        top              : 40%;
        width            : <?= $radius ?>px;
        height           : <?= $radius ?>px;
        background-color : <?= $bg_spinner_color ?>;
        border-radius    : <?= $radius / 2 ?>px;
        overflow         : hiddenX;
    }

    #c006 .circle {
        position         : absolute;
        top              : <?= $radius / 2 - $section_size / 2 ?>px;
        left             : <?= $radius / 2 - $section_size / 2  ?>px;
        width            : <?= $section_size ?>px;
        height           : <?= $section_size ?>px;
        border-radius    : <?= $section_size / 2 ?>px;
        background-color : <?= $section_color ?>;
    }
</style>
<div id="c006">
    <div id="submit-spinner" class="rotating">
        <?php for ($i = 0; $i < $sections; $i++) : ?>
            <div class="circle" style="transform:  rotate(<?= 360 / $sections * $i ?>deg) translateY(<?= $section_offset ?>px); opacity: <?= ( $i / $sections + $section_opacity_base ) ?>"></div>
        <?php endfor ?>
    </div>
</div>

