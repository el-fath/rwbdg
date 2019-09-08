<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class Property extends Model
{
    use Translatable;
    protected $guarded = [];
    public $translatedAttributes = ['title','description','slug'];
    protected $appends 	= array('ImagePath','ImagePathSmall','ImagePathMedium','Location');


    public function marketplaces()
    {
        return $this->hasMany('App\Model\MarketplaceProperty','property_id', 'id');
    }

    public function marketing()
    {
        return $this->hasOne('App\Model\Marketing','id', 'marketing_id');
    }

    public function category()
    {
        return $this->hasOne('App\Model\PropertyCategory','id', 'category_id');
    }


    public function news()
    {
        return $this->hasMany('App\Model\News','property_id', 'id');
    }

    public function getLocationAttribute()
    {
        $str = "";
        if($this->province_id){
            $province = Province::find($this->province_id);
            $str.=$province->title;
        }

        if($this->city_id){
            $city = City::find($this->city_id);
            $str.=", ".$city->title;
        }

        if($this->district_id){
            $district = District::find($this->district_id);
            $str.=", ".$district->title;
        }

        return $str;
    }


    public function getImagePathAttribute()
    {
        $url = url('/')."/public/image/property/".$this->image;
        return $url;
    }

    public function ImagePathLocal()
    {
        $url = public_path("image/property/".$this->image);
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
                
                $urlImage = public_path("image/property/".$path_parts['filename']."_small.png");
                // dd($urlImage);
                $fileexist = File::exists($urlImage);
                if(!$fileexist){
                    $img = Image::make($this->getImagePathAttribute())->resize(364, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save('public/image/property/'.$path_parts['filename']."_small.png",50);
                    // $img->encode('png');
                    // $type = 'png';
                    // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                }
                return url('/')."/public/image/property/".$path_parts['filename']."_small.png";
            }else{
                return url('/')."/public/image/property/".$this->image;
            }
    }

    public function getImagePathMediumAttribute(){
        if(!is_file($this->ImagePathLocal()))
        {
            return $this->DefaultPath();
        }

        $path_parts = pathinfo($this->ImagePathLocal());
        

        if(isset($path_parts['filename'])){
            
            $urlImage = public_path("image/property/".$path_parts['filename']."_medium.png");
            // dd($urlImage);
            $fileexist = File::exists($urlImage);
            if(!$fileexist){
                $img = Image::make($this->getImagePathAttribute())->resize(945, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save('public/image/property/'.$path_parts['filename']."_medium.png",50);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/property/".$path_parts['filename']."_medium.png";
        }else{
            return url('/')."/public/image/property/".$this->image;
        }
    }
}

class PropertyTranslation extends Model {
    public $timestamps = false;
    protected $guarded = [];
}
