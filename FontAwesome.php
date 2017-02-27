<?php
namespace blackho1e\fontawesome;

use yii\helpers\Html;

class FontAwesome
{
    public static function icon($classes, $options = [])
    {
        if (is_string($classes)) {
            $iconClasses = preg_split('/\s+/', $classes);
        } else {
            return;
        }
        Html::addCssClass($options, 'fa');
        foreach ($iconClasses as $class) {
            Html::addCssClass($options, 'fa-' . $class);
        }
        return Html::tag('i', '', $options);
    }
}
