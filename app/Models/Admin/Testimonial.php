<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Modul\Depertment;

class Testimonial extends Model
{
    use HasFactory;

    private static $testimonial, $image, $imageUrl, $directory, $imageName, $extension;


    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(20000, 800000) . '.' . self::$extension;
        self::$directory = 'upload/testimonial-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
    }


    private static function saveBasicInfo($testimonial, $request, $imageUrl)
    {
        self::$testimonial->name             = $request->name;
        self::$testimonial->depertment_id    = $request->depertment_id;
        self::$testimonial->description      = $request->description;
        $testimonial->image                  = $imageUrl;
        $testimonial->save();
    }

    public static function newTestimonial($request)
    {
        self::$testimonial = new Testimonial();

        if ($request->file('image')) {
            self::getImageUrl($request);
        } else {
            self::$imageUrl = ' ';
        }
        self::saveBasicInfo(self::$testimonial, $request, self::$imageUrl);
    }

    public static function  updateTestimonial($request, $id)
    {

        self::$testimonial = Testimonial::find($id);

        if ($request->file('image')) {
            if (file_exists(self::$testimonial->image)) {
                unlink(self::$testimonial->image);
            }

            self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$testimonial->image;
        }

        self::saveBasicInfo(self::$testimonial, $request, self::$imageUrl);
    }

    public static function  deleteTestimonial($id)
    {

        self::$testimonial = Testimonial::find($id);

        if (file_exists(self::$testimonial->image)) {
            unlink(self::$testimonial->image);
        }
        self::$testimonial->delete();
    }

    public static function checkStatus($id)
    {
        self::$testimonial = Testimonial::find($id);
        if (self::$testimonial->status == 1) {
            self::$testimonial->status = 0;
        } else {
            self::$testimonial->status = 1;
        }
        self::$testimonial->save();
    }



    public function depertment()
    {
        return $this->belongsTo(Depertment::class);
    }


}
