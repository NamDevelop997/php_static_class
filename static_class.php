<?php

class Rectangle
{
    public static $width;
    public static $height;

    public static function get_perimeter()
    {
        return 2 * (self::$width + self::$height);
    }

    public static function get_area()
    {
        return self::$width * self::$height;
    }
}


class b
{
    function __construct()
    {
        Rectangle::$height = 10;
        Rectangle::$width = 20;
        echo  Rectangle::get_perimeter();
    }
}
new b();
