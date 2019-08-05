<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Config extends Model
{
    protected $guarded = [];
    protected $appends 	= array('LogoPath','FaviconPath');

    public function getLogoPathAttribute()
    {
        return url('/')."/public/image/config/".$this->logo;
    }

    public function getFaviconPathAttribute()
    {
        return url('/')."/public/image/config/".$this->logo;
    }  
}
