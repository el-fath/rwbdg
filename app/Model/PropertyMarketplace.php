<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class PropertyMarketplace extends Model
{
    protected $guarded = [];
    protected $appends 	= array('ImagePath','ImagePathSmall','ImagePathMedium');

    public function properties()
    {
        return $this->hasMany('App\Model\MarketplaceProperty','marketplace_id', 'id');
    }

    public function getImagePathAttribute()
    {
        $url = url('/')."/public/image/property-marketplace/".$this->image;
        return $url;
    }

    public function ImagePathLocal()
    {
        $url = public_path("image/property-marketplace/".$this->image);
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
                
                $urlImage = public_path("image/property-marketplace/".$path_parts['filename']."_small.png");
                // dd($urlImage);
                $fileexist = File::exists($urlImage);
                if(!$fileexist){
                    $img = Image::make($this->getImagePathAttribute())->resize(370, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save('public/image/property-marketplace/'.$path_parts['filename']."_small.png",50);
                    // $img->encode('png');
                    // $type = 'png';
                    // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                }
                return url('/')."/public/image/property-marketplace/".$path_parts['filename']."_small.png";
            }else{
                return url('/')."/public/image/property-marketplace/".$this->image;
            }
    }

    public function getImagePathMediumAttribute(){
        if(!is_file($this->ImagePathLocal()))
        {
            return $this->DefaultPath();
        }

        $path_parts = pathinfo($this->ImagePathLocal());
        

        if(isset($path_parts['filename'])){
            
            $urlImage = public_path("image/property-marketplace/".$path_parts['filename']."_medium.png");
            // dd($urlImage);
            $fileexist = File::exists($urlImage);
            if(!$fileexist){
                $img = Image::make($this->getImagePathAttribute())->resize(945, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save('public/image/property-marketplace/'.$path_parts['filename']."_medium.png",50);
                // $img->encode('png');
                // $type = 'png';
                // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            }
            return url('/')."/public/image/property-marketplace/".$path_parts['filename']."_medium.png";
        }else{
            return url('/')."/public/image/property-marketplace/".$this->image;
        }
    }
}
