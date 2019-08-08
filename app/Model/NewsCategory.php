<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class NewsCategory extends Model
{
    use Translatable;
    protected $guarded = [];
    public $translatedAttributes = ['title','description','slug'];
}

class NewsCategoryTranslation extends Model {
    public $timestamps = false;
    protected $guarded = [];
}
