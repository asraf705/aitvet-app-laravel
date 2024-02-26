<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Modul\Depertment;
use App\Models\Admin\GalleryImage as Gallery;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.gallery.gallery-img.manage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.gallery-img.add',[
            'depertments' => Depertment::where('status',1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gallery::newGallery($request);
        return redirect(route('gallery-image.index'))->with('message', 'Create Info successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Gallery::checkStatus($id);
        return redirect(route('gallery-image.index'))->with('message', 'Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.gallery.Gallery-img.edit',[
            'Gallery' => Gallery::find($id),
            'depertments' => Depertment::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gallery::updateGallery($request, $id);
        return redirect(route('gallery-image.index'))->with('message', 'Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gallery::deleteGallery($id);
        return redirect(route('gallery-image.index'))->with('dmessage', 'Info Deleted Successfully');
    }
}
