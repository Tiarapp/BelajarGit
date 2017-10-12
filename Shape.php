<?php

//kelas abstrak dari bentuk
abstract class Shape
{
	// macam bentuknya dan nilainya (value) dari lebar dan tinggi
    protected $width = 0;
    protected $height = 0;
    
    //fungsi abstrak untuk perintah menghitung luasnya
    abstract public function getArea();
}