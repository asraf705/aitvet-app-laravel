<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Admin\Modul\Depertment;
use App\Models\admin\TeacherCatecory as Post;
use App\Models\admin\TeacherInfo as Teacher;
use Illuminate\Http\Request;

class TeacherinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.teacher-mange.index',[
            'teachers'=>Teacher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher-mange.add',[
            'depertments' => Depertment::all(),
            'posts' =>Post::where('status',1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect(route('teachers-info.index'))->with('message', 'Add Info successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Teacher::checkStatus($id);
        return redirect(route('teachers-info.index'))->with('message', 'Teacher Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.teacher-mange.edit',[
            'teacher' =>Teacher::find($id),
            'posts' => Post::all(),
            'depertments'=> Depertment::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect(route('teachers-info.index'))->with('message', 'Teacher Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::deleteTeacher($id);
        return redirect(route('teachers-info.index'))->with('dmessage', 'Teacher Info Deleted Successfully');
    }
}
