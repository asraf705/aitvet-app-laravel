<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AdmissionCatecory extends Model
{
    use HasFactory;
    private static $admission;


    public static function newAdmission($request)
    {
        self::$admission = new AdmissionCatecory();
        self::$admission->depertment_id           = $request->depertment_id;
        self::$admission->admission_fees    = $request->admission_fees;
        self::$admission->save();
    }



    public static function  updateAdmission($request, $id)
    {
        self::$admission = AdmissionCatecory::find($id);
        self::saveBasicInfo(self::$admission, $request);
    }

    public static function  deleteAdmission($id)
    {
        self::$admission = AdmissionCatecory::find($id);
        self::$admission->delete();
    }

    private static function saveBasicInfo($admission, $request)
    {
        $admission->depertment_id           = $request->depertment_id;
        $admission->admission_fees    = $request->admission_fees;
        $admission->save();
    }

    public static function checkStatus($id){
        self::$admission = AdmissionCatecory::find($id);
        if (self::$admission->status == 1){
            self::$admission->status = 0;
        }else{
            self::$admission->status = 1;

        }
        self::$admission->save();
    }

}
