<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Admin\Modul\Depertment;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    private static $gallery, $image, $imageUrl, $directory, $imageName, $extension;


    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000) . '.' . self::$extension;
        self::$directory = 'upload/modul/depertment-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
    }

    public static function newGallery($request)
    {
        if ($request->file('image')) {
            self::getImageUrl($request);
        } else {
            self::$imageUrl = ' ';
        }

        self::$gallery = new GalleryImage();
        self::$gallery->depertment_id           = $request->depertment_id;
        self::$gallery->image          = self::$imageUrl;
        self::$gallery->save();
    }

    public static function  updateGallery($request, $id)
    {

        self::$gallery = GalleryImage::find($id);

        if ($request->file('image')) {
            if (file_exists(self::$gallery->image)) {
                unlink(self::$gallery->image);
            }

            self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$gallery->image;
        }

        self::saveBasicInfo(self::$gallery, $request, self::$imageUrl);
    }

    public static function  deleteGallery($id)
    {

        self::$gallery = GalleryImage::find($id);

        if (file_exists(self::$gallery->image)) {
            unlink(self::$gallery->image);
        }
        self::$gallery->delete();
    }

    public function depertment(){
        return $this->belongsTo(Depertment::class);
    }

    private static function saveBasicInfo($gallery, $request, $imageUrl)
    {
        $gallery->depertment_id           = $request->depertment_id;
        $gallery->image                   =  $imageUrl;
        $gallery->save();
    }

    public static function checkStatus($id){
        self::$gallery = GalleryImage::find($id);
        if (self::$gallery->status == 1){
            self::$gallery->status = 0;
        }else{
            self::$gallery->status = 1;

        }
        self::$gallery->save();
    }
}
