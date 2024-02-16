<?php

namespace App\Models\Admin\Modul;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depertment extends Model
{
    use HasFactory;


    private static $depertment, $image, $imageUrl, $directory, $imageName, $extension;


    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/modul/depertment-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
    }

    public static function newDepertment($request)
    {
        if ($request->file('image'))
        {
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }

        self::$depertment = new Depertment();
        self::$depertment->name           = $request->name;
        self::$depertment->description    = $request->description;
        self::$depertment->image          = self::$imageUrl;
        self::$depertment->save();
    }



    public static function  updateDepertment($request, $id)
    {

        self::$depertment = Depertment::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$depertment->image))
            {
                unlink(self::$depertment->image);
            }

            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$depertment->image;
        }

        self::saveBasicInfo(self::$depertment, $request, self::$imageUrl);
    }

    public static function  deleteDepertment($id)
    {

        self::$depertment = Depertment::find($id);

        if (file_exists(self::$depertment->image))
        {
            unlink(self::$depertment->image);
        }
        self::$depertment->delete();
    }

    private static function saveBasicInfo($depertment, $request, $imageUrl){
        $depertment->name           = $request->name;
        $depertment->description    = $request->description;
        $depertment->image          = $imageUrl;
        $depertment->save();

    }


}
