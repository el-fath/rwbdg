<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use App\Model\Property;

class PropertyCategory extends Model
{
    use Translatable;
    protected $guarded = [];
    public $translatedAttributes = ['title','description','slug'];
    protected $appends 	= array('ImagePath','ImagePathSmall','ImagePathMedium','CountProperty');

    

    public function getCountPropertyAttribute()
    {
        $count = Property::where('category_id','=',$this->id)->count();
        return $count;
    }

    public function getImagePathAttribute()
    {
        $url = url('/')."/public/image/property-category/".$this->image;
        return $url;
    }

    public function ImagePathLocal()
    {
        $url = public_path("image/property-category/".$this->image);
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
                
                $urlImage = public_path("image/property-category/".$path_parts['filename']."_small.png");
                // dd($urlImage);
                $fileexist = File::exists($urlImage);
                if(!$fileexist){
                    $img = Image::make($this->getImagePathAttribute())->resize(370, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save('public/image/property-category/'.$path_parts['filename']."_small.png",50);
                    // $img->encode('png');
                    // $type = 'png';
                    // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                }
                return url('/')."/public/image/property-category/".$path_parts['filename']."_small.png";
            }else{
                return url('/')."/public/image/property-category/".$this->image;
            }
    }

    public function getImagePathMediumAttribute(){
        if(!is_file($this->ImagePathLocal()))
        {
            return $this->DefaultPath();
        }

        $path_parts = pathinfo($this->ImagePathLocal());
        

        if(isset($path_parts['filename'])){
            
            $urlImage = public_path("image/property-category/".$path_parts['filename']."_medium.png");
            // dd($urlImage);
            $fileexist = File::exists($urlImage);
            if(!$fileexist){
                $img = Image::make($this->getImagePathAttribute())->resize(945, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save('public/image/property-category/'.$path_parts['filename']."_medium.png",50);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/property-category/".$path_parts['filename']."_medium.png";
        }else{
            return url('/')."/public/image/property-category/".$this->image;
        }
    }
}

class PropertyCategoryTranslation extends Model {
    public $timestamps = false;
    protected $guarded = [];
}
