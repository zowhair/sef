<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use URL;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=Scholarship::all();
        return view('admin.scholarship.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scholarship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scholarships=new Scholarship();
        $img_url = time() . '.' . $request->video->extension();
        $request->video->move(public_path('files'), $img_url);
        $img_path = URL::route('files', $img_url);
//        dd($img_path);
        $scholarships->introduction=$request->introduction;
        $scholarships->video_path=$img_path;

        $scholarships->save();
        return redirect('/scholarships/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function show(Scholarship $scholarship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function edit(Scholarship $scholarship,$id)
    {
      $data= Scholarship::find($id);
      return view('admin.scholarship.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $scholarship=Scholarship::find($request->id);
        $scholarship->introduction=$request->introduction;
        $scholarship->save();
        return redirect('/scholarships/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scholarship=Scholarship::find($id);
        $scholarship->delete();
        return redirect('/scholarships/');
    }
}
