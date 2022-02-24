<?php

if (!function_exists('alias')) {
    function alias($alias, $throwException = true)
    {
        return Yii::getAlias($alias, $throwException);
    }
}