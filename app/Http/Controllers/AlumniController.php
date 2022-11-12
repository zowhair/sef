<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use DB;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Alumni::all();
        return view('admin.alumni.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $alumni=new Alumni;
        $alumni->fill($input)->save();
        return redirect('/alumnis/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit($alumni_id)
    {
        $alumni_Data=DB::table('alumnis')->find($alumni_id);
        return view('admin.alumni.edit',compact('alumni_Data','alumni_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $id=$request->id;
        $alumni=Alumni::find($id);
        $alumni->name=$request->name;
        $alumni->father_name=$request->father_name;
        $alumni->domsile_dirtrict=$request->domsile_dirtrict;
        $alumni->school_category=$request->school_category;
        $alumni->class_adm_in=$request->class_adm_in;
        $alumni->institution_studied=$request->institution_studied;
        $alumni->passing_year=$request->passing_year;
        $alumni->contact=$request->contact;
        $alumni->current_status=$request->current_status;
        $alumni->update();

        return redirect('/alumnis/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy($alumni_id)
    {
        DB::table('alumnis')->where('id', $alumni_id)->delete();
        return redirect()->back();
    }
}
