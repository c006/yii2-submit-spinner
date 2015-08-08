<?php

namespace c006\spinner;

use c006\spinner\assets\AppAssets;
use yii\base\Widget;

/**
 * Class SubmitSpinner
 *
 * @package c006\spinner
 */
class SubmitSpinner extends Widget
{

    /**
     * @var string
     */
    public $class_id = 'SubmitSpinner';
    /**
     * @var string
     */
    public $form_id = 'form-submit';

    /**
     * @var string
     */
    public $bg_color = '#444444';
    /**
     * @var float
     */
    public $bg_opacity = 0.8;
    /**
     * @var int
     */
    public $spin_speed = 4;
    /**
     * @var int
     */
    public $radius = 200;
    /**
     * @var float
     */
    public $bg_spinner_opacity = 0.5;
    /**
     * @var string
     */
    public $bg_spinner_color = '#000000';
    /**
     * @var string
     */
    public $section_color = '#FFFFFF';
    /**
     * @var int
     */
    public $sections = 15;
    /**
     * @var int
     */
    public $section_size = 20;
    /**
     * @var int
     */
    public $section_offset = 80;
    /**
     * @var float
     */
    public $section_opacity_base = 0.25;
    /**
     * @var int
     */
    public $proportionate_increase = 1;


    /**
     *
     */
    function init()
    {

        parent::init();
        $view = $this->getView();
        AppAssets::register($view);
    }


    /**
     * @return string
     */
    public function run()
    {

        return $this->render('submit-spinner', [
                'class_id'               => $this->class_id,
                'form_id'                => $this->form_id,
                'bg_color'               => $this->bg_color,
                'bg_opacity'             => $this->bg_opacity,
                'spin_speed'             => $this->spin_speed,
                'radius'                 => $this->radius,
                'bg_spinner_opacity'     => $this->bg_spinner_opacity,
                'bg_spinner_color'       => $this->bg_spinner_color,
                'sections'               => $this->sections,
                'section_size'           => $this->section_size,
                'section_color'          => $this->section_color,
                'section_offset'         => $this->section_offset,
                'section_opacity_base'   => $this->section_opacity_base,
                'proportionate_increase' => $this->proportionate_increase,
            ]
        );
    }
}
