<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipGallery;
use Illuminate\Http\Request;
use URL;

class ScholarshipGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ScholarshipGallery::all();
        return view('admin.scholarship.gallary.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scholarship.gallary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img_url = time() . '.' . $request->img->extension();
        $request->img->move(public_path('files'), $img_url);
        $img_path = URL::route('files', $img_url);

        $scholarshipGallery = new ScholarshipGallery();
        $scholarshipGallery->url = $img_path;

        $scholarshipGallery->save();
        return redirect('/galleries/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScholarshipGallery  $scholarshipGallery
     * @return \Illuminate\Http\Response
     */
    public function show(ScholarshipGallery $scholarshipGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScholarshipGallery  $scholarshipGallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= ScholarshipGallery::find($id);
        return view('admin.scholarship.gallary.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScholarshipGallery  $scholarshipGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $scholarshipGallery=ScholarshipGallery::find($request->id);

        if ($request->img !=null)
        {
            $img_url = time() . '.' . $request->img->extension();
            $request->img->move(public_path('files'), $img_url);
            $img_path = URL::route('files', $img_url);
            $scholarshipGallery->url = $img_path;
        }
        $scholarshipGallery->save();
        return redirect('/galleries/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScholarshipGallery  $scholarshipGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scholarshipGallery=ScholarshipGallery::find($id);
        $scholarshipGallery->delete();
        return redirect('/galleries/');
    }
}
