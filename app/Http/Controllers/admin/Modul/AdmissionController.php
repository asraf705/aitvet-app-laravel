<?php

namespace App\Http\Controllers\Admin\Modul;

use App\Http\Controllers\Controller;
use App\Models\Admin\Modul\Depertment;
use Illuminate\Http\Request;
use App\Models\AdmissionCatecory as Admission;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.modul.admission.manage',[
            'admissions' => Admission::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modul.admission.add',[
            'depertments' => Depertment::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Admission::newAdmission($request);
        return redirect(route('admission-category.index'))->with('message', 'Create Admission Info successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Admission::checkStatus($id);
        return redirect(route('admission-category.index'))->with('message', 'Admission Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.modul.admission.edit',[
            'admission' => Admission::find($id),
            'depertments' => Depertment::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Admission::updateAdmission($request, $id);
        return redirect(route('admission-category.index'))->with('message', 'Depertment Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admission::deleteAdmission($id);
        return redirect(route('admission-category.index'))->with('dmessage', 'Depertment Info Deleted Successfully');
    }
}
