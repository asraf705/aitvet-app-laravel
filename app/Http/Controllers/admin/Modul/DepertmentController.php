<?php

namespace App\Http\Controllers\Admin\Modul;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Modul\Depertment;



class DepertmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.modul.depertment.manage',[
            'depertments' => Depertment::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modul.depertment.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Depertment::newDepertment($request);
        return redirect(route('depertment-category.index'))->with('message', 'Depertment categoey create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Depertment::checkStatus($id);
        return redirect(route('depertment-category.index'))->with('message', 'Depertment Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.modul.depertment.edit',[
            'depertments' => Depertment::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Depertment::updateCategory($request, $id);
        return redirect(route('depertment-category.index'))->with('message', 'Depertment Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Depertment::deleteCategory($id);
        return redirect(route('depertment-category.index'))->with('message', 'Depertment Info Deleted Successfully');
    }
}
