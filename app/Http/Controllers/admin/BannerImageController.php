<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Modul\Depertment;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class BannerImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.gallery.banner-img.manage',[
            'banners' => Banner::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.banner-img.add',[
            'depertments' => Depertment::where('status',1)->get(),
            'banner' => Banner::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Banner::newBanner($request);
        return redirect(route('banner-image.index'))->with('message', 'Create Info successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Banner::checkStatus($id);
        return redirect(route('banner-image.index'))->with('message', 'Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.gallery.banner-img.edit',[
            'banner' => Banner::find($id),
            'depertments' => Depertment::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Banner::updateBanner($request, $id);
        return redirect(route('banner-image.index'))->with('message', 'Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Banner::deleteBanner($id);
        return redirect(route('banner-image.index'))->with('dmessage', 'Info Deleted Successfully');
    }
}
