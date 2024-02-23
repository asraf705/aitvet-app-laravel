<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    private static $user;
    /**
     * Display a listing of the resource.
     */
    public function accountholder()
    {
        return view('admin.account.admin-index',[
            'users'=>User::all(),
        ]);
    }
    public function show(string $id)
    {
        self::$user = User::find($id);
        if (self::$user->type == 1){
            self::$user->type = 2;
        }
        elseif (self::$user->type == 2) {
            self::$user->type = 0;
        }
        else{
            self::$user->type = 1;

        }
        self::$user->save();
    }

}
