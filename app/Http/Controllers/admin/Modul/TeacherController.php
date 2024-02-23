<?php

namespace App\Http\Controllers\Admin\Modul;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\TeacherCatecory as Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.modul.teacher-category.manage',[
            'teachers' => Teacher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modul.teacher-category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect(route('teacher-category.index'))->with('message', 'Teacher categoey create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Teacher::checkStatus($id);
        return redirect(route('teacher-category.index'))->with('message', 'Teacher Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.modul.depertment.edit',[
            'teachers' => Teacher::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect(route('teacher-category.index'))->with('message', 'Teacher Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::deleteTeacher($id);
        return redirect(route('teacher-category.index'))->with('dmessage', 'Teacher Info Deleted Successfully');
    }
}
