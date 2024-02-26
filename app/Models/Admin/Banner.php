<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Modul\Depertment;

class Banner extends Model
{
    use HasFactory;

    private static $banner, $image, $imageUrl, $directory, $imageName, $extension;


    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000) . '.' . self::$extension;
        self::$directory = 'upload/modul/depertment-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
    }

    public static function newBanner($request)
    {
        if ($request->file('image')) {
            self::getImageUrl($request);
        } else {
            self::$imageUrl = ' ';
        }

        self::$banner = new Banner();
        self::$banner->depertment_id           = $request->depertment_id;
        self::$banner->image          = self::$imageUrl;
        self::$banner->save();
    }

    public static function  updateBanner($request, $id)
    {

        self::$banner = Banner::find($id);

        if ($request->file('image')) {
            if (file_exists(self::$banner->image)) {
                unlink(self::$banner->image);
            }

            self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$banner->image;
        }

        self::saveBasicInfo(self::$banner, $request, self::$imageUrl);
    }

    public static function  deleteBanner($id)
    {

        self::$banner = Banner::find($id);

        if (file_exists(self::$banner->image)) {
            unlink(self::$banner->image);
        }
        self::$banner->delete();
    }

    public function depertment(){
        return $this->belongsTo(Depertment::class);
    }

    private static function saveBasicInfo($banner, $request, $imageUrl)
    {
        $banner->depertment_id           = $request->depertment_id;
        $banner->image                   =  $imageUrl;
        $banner->save();
    }

    public static function checkStatus($id){
        self::$banner = Banner::find($id);
        if (self::$banner->status == 1){
            self::$banner->status = 0;
        }else{
            self::$banner->status = 1;

        }
        self::$banner->save();
    }

}
