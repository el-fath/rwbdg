<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class Album extends Model
{
    use Translatable;
    protected $guarded = [];
    public $translatedAttributes = ['title','description','slug'];
    protected $appends 	= array('ThumbPath');

    public function getThumbPathAttribute()
    {
        $photo = AlbumPhoto::where("album_id",$this->id)->limit(1)->first();
        if($photo){
            return $photo;
        }
    }
}

class AlbumTranslation extends Model {
    public $timestamps = false;
    protected $guarded = [];
}
