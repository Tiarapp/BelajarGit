<?php

/**
 * kelas abstrak dari bentuk
 */
abstract class Shape
{
    /**
     * property lebar
     */
    protected $width = 0;

    /**
     * property tinggi
     */
    protected $height = 0;
    
    /**
     * fungsi abstrak untuk perintah menghitung luasnya
     */
    abstract public function getArea();
}
