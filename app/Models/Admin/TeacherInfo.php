<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Modul\Depertment;
use App\Models\admin\TeacherCatecory as Post;

class TeacherInfo extends Model
{
    use HasFactory;

    private static $teacherinfo, $image, $imageUrl, $directory, $imageName, $extension;


    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(20000, 800000) . '.' . self::$extension;
        self::$directory = 'upload/teacherInfo-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
    }

    public static function newTeacher($request)
    {
        if ($request->file('image')) {
            self::getImageUrl($request);
        } else {
            self::$imageUrl = ' ';
        }

        self::$teacherinfo = new TeacherInfo();
        self::$teacherinfo->name             = $request->name;
        self::$teacherinfo->depertment_id    = $request->depertment_id;
        self::$teacherinfo->post_id          = $request->post_id;
        self::$teacherinfo->email            = $request->email;
        self::$teacherinfo->phone            = $request->phone;
        self::$teacherinfo->education        = $request->education;
        self::$teacherinfo->other_education  = $request->other_education;
        self::$teacherinfo->description      = $request->description;
        self::$teacherinfo->image            = self::$imageUrl;
        self::$teacherinfo->save();
    }



    public static function  updateTeacher($request, $id)
    {

        self::$teacherinfo = TeacherInfo::find($id);

        if ($request->file('image')) {
            if (file_exists(self::$teacherinfo->image)) {
                unlink(self::$teacherinfo->image);
            }

            self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$teacherinfo->image;
        }

        self::saveBasicInfo(self::$teacherinfo, $request, self::$imageUrl);
    }

    public static function  deleteTeacher($id)
    {

        self::$teacherinfo = TeacherInfo::find($id);

        if (file_exists(self::$teacherinfo->image)) {
            unlink(self::$teacherinfo->image);
        }
        self::$teacherinfo->delete();
    }

    private static function saveBasicInfo($teacherinfo, $request, $imageUrl)
    {
        self::$teacherinfo->name             = $request->name;
        self::$teacherinfo->depertment_id    = $request->depertment_id;
        self::$teacherinfo->post_id          = $request->post_id;
        self::$teacherinfo->email            = $request->email;
        self::$teacherinfo->phone            = $request->phone;
        self::$teacherinfo->education        = $request->education;
        self::$teacherinfo->other_education  = $request->other_education;
        self::$teacherinfo->description      = $request->description;
        $teacherinfo->image                  = $imageUrl;
        $teacherinfo->save();
    }

    public function depertment()
    {
        return $this->belongsTo(Depertment::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public static function checkStatus($id)
    {
        self::$teacherinfo = TeacherInfo::find($id);
        if (self::$teacherinfo->status == 1) {
            self::$teacherinfo->status = 0;
        } else {
            self::$teacherinfo->status = 1;
        }
        self::$teacherinfo->save();
    }
}
