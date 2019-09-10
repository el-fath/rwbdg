<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use Nicolaslopezj\Searchable\SearchableTrait;


class News extends Model
{
    use SearchableTrait;
    use Translatable;
    protected $guarded = [];
    public $translatedAttributes = ['title','description','slug'];
    protected $appends 	= array('ImagePath','ImagePathSmall','ImagePathMedium','SimilarProperties');

    protected $searchable = [
        'columns' => [
            'news_translations.title' => 2,
            'property_translations.title' => 1,
        ],
        'joins' => [
            'properties' => ['news.property_id','properties.id'],
            'news_translations' => ['news.id','news_translations.news_id'],
            'property_translations' => ['properties.id','property_translations.property_id'],
        ],
    ];

    public function Category()
    {
        return $this->hasOne('App\Model\NewsCategory', 'category_id', 'id');
    }

    public function Property()
    {
        return $this->hasOne('App\Model\Property', 'id', 'property_id');
    }

    public function getSimilarPropertiesAttribute()
    {
        $properties = Property::where("category_id",$this->Property->category_id)->get();
        return $properties;
    }

    public function getImagePathAttribute()
    {
        $url = url('/')."/public/image/news/".$this->image;
        return $url;
    }

    public function ImagePathLocal()
    {
        $url = public_path("image/news/".$this->image);
        return $url;
    }

    public function DefaultPath()
    {
        $url = url('/')."/public/image/placeholder-image.png";
        return $url;
    }



    public function getImagePathSmallAttribute(){
            if(!is_file($this->ImagePathLocal()))
            {
                return $this->DefaultPath();
            }

            $path_parts = pathinfo($this->ImagePathLocal());
            

            if(isset($path_parts['filename'])){
                
                $urlImage = public_path("image/news/".$path_parts['filename']."_small.png");
                // dd($urlImage);
                $fileexist = File::exists($urlImage);
                if(!$fileexist){
                    $img = Image::make($this->getImagePathAttribute())->resize(370, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save('public/image/news/'.$path_parts['filename']."_small.png",50);
                    // $img->encode('png');
                    // $type = 'png';
                    // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                }
                return url('/')."/public/image/news/".$path_parts['filename']."_small.png";
            }else{
                return url('/')."/public/image/news/".$this->image;
            }
    }

    public function getImagePathMediumAttribute(){
        if(!is_file($this->ImagePathLocal()))
        {
            return $this->DefaultPath();
        }

        $path_parts = pathinfo($this->ImagePathLocal());
        

        if(isset($path_parts['filename'])){
            
            $urlImage = public_path("image/news/".$path_parts['filename']."_medium.png");
            // dd($urlImage);
            $fileexist = File::exists($urlImage);
            if(!$fileexist){
                $img = Image::make($this->getImagePathAttribute())->resize(945, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save('public/image/news/'.$path_parts['filename']."_medium.png",50);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/news/".$path_parts['filename']."_medium.png";
        }else{
            return url('/')."/public/image/news/".$this->image;
        }
    }
}

class NewsTranslation extends Model {
    public $timestamps = false;
    protected $guarded = [];
}