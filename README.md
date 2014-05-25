Yii2 Submit Spinner
===================


*( Please do not use, testing only )*
---------------------------------------

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist c006/yii2-submit-spinner "*"
```

or add

```
"c006/yii2-submit-spinner": "*"
```

to the require section of your `composer.json` file.


Options
-------

bg_color
: Color of overlay, covers entire screen

```bg_opacity /* The opacity of the overlay */```

```spin_speed /* How many seconds a for a complete 360 rotation */```

```radius /* The radius/width (in px) of the spinner */```

```bg_color /* Color of overlay, covers entire screen */```

```bg_color /* Color of overlay, covers entire screen */```

```bg_color /* Color of overlay, covers entire screen */```

```bg_color /* Color of overlay, covers entire screen */```

```bg_color /* Color of overlay, covers entire screen */```

```bg_color /* Color of overlay, covers entire screen */```

```bg_color /* Color of overlay, covers entire screen */```

```bg_color /* Color of overlay, covers entire screen */```





Usage
-----

Once the extension is installed, simply use it in your code by  :


Simple option:

```<?= \c006\yii2\SubmitSpinner::widget(); ?>```




All options (5 large dots, no background circle):


<pre><code>
&lt;?= c006\yii2\SubmitSpinner::widget(
                              [
                                  'bg_color'               => '#333333',
                                  'bg_opacity'             => 0.8,
                                  'spin_speed'             => 4,
                                  'radius'                 => 250,
                                  'bg_spinner_opacity'     => 0.0,
                                  'bg_spinner_color'       => '#000000',
                                  'sections'               => 5,
                                  'section_size'           => 80,
                                  'section_color'          => '#FFFFFF',
                                  'section_offset'         => 80,
                                  'section_opacity_base'   => .2,
                                  'proportionate_increase' => 0,
                              ]
       ) ?&gt;

<code></pre>








































