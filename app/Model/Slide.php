<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Slide extends Model
{
    use Translatable;
    protected $guarded = [];
    public $translatedAttributes = ['title','description','slug'];
    protected $appends 	= array('ImagePath');


    public function getImagePathAttribute()
    {
        return url('/')."/public/image/slide/".$this->logo;
    }
}

class SlideTranslation extends Model {
    public $timestamps = false;
    protected $guarded = [];
}
