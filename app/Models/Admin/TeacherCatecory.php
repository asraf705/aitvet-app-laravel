<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCatecory extends Model
{
    use HasFactory;

    private static $teacher;


    public static function newTeacher($request)
    {
        self::$teacher = new TeacherCatecory();
        self::$teacher->name    = $request->name;
        self::$teacher->save();
    }



    public static function  updateTeacher($request, $id)
    {
        self::$teacher = TeacherCatecory::find($id);
        self::saveBasicInfo(self::$teacher, $request);
    }

    public static function  deleteTeacher($id)
    {
        self::$teacher = TeacherCatecory::find($id);
        self::$teacher->delete();
    }

    private static function saveBasicInfo($teacher, $request)
    {
        $teacher->name    = $request->name;
        $teacher->save();
    }

    public static function checkStatus($id){
        self::$teacher = TeacherCatecory::find($id);
        if (self::$teacher->status == 1){
            self::$teacher->status = 0;
        }else{
            self::$teacher->status = 1;

        }
        self::$teacher->save();
    }
}
