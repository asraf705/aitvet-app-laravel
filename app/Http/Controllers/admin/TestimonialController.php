<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Modul\Depertment;
use App\Models\Admin\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.testimonial.index',[
            'teastimonials' => Testimonial::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.add',[
            'depertments' => Depertment::where('status','1')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Testimonial::newTestimonial($request);
        return redirect(route('testimonial.index'))->with('message', 'Add Info successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Testimonial::checkStatus($id);
        return redirect(route('testimonial.index'))->with('message', 'Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.teacher-mange.edit',[
            'testimonial' =>Testimonial::find($id),
            'depertments'=> Depertment::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Testimonial::updateTestimonial($request, $id);
        return redirect(route('testimonial.index'))->with('message', 'Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::deleteTestimonial($id);
        return redirect(route('testimonial.index'))->with('dmessage', 'Info Deleted Successfully');
    }
}
