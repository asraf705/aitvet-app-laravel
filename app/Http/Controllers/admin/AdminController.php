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
    public function adminaccount()
    {
        return view('admin.account.admin-index', [
            'users' => User::all(),
        ]);
    }

    public function subAdminaccount()
    {
        return view('admin.account.subAdmin-index', [
            'users' => User::all(),
        ]);
    }

    public function studentaccount()
    {
        return view('admin.account.student-index', [
            'users' => User::all(),
        ]);
    }

    public function editAccount($id)
    {
        return view('admin.account.edit', [
            'user' => User::find($id),
        ]);
    }



    public function updateAccount(Request $request)
    {
        User::updateAcco($request);
        return back();
    }

}
