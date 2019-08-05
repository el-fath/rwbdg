<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Slide extends Model
{
    use Translatable;
    protected $guarded = [];
    public $translatedAttributes = ['name','description'];
}

class SlideTranslation extends Model {
    public $timestamps = false;
    protected $guarded = [];
}
