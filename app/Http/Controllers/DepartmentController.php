<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use DB;
use URL;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Department::all();
        return view('admin.department.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img_url = time() . '.' . $request->file->extension();
        $request->file->move(public_path('files'), $img_url);
        $img_path = URL::route('files', $img_url);
        

        $department = new Department();
        $department->page_title = $request->input('page_title');
        if($request->input('sub_title')!=null){
            $department->sub_title = $request->input('sub_title');
        }
        else
        {
            $department->sub_title = "";

        }

        $department->page_name = $request->input('page_name');
        $department->decription = $request->input('decription');
        $department->bannar_img = $img_path;
        $department->save();
        return redirect('/department/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('departments')->find($id);
        return view('admin.department.edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->file != null)
        {
            $img_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $img_url);
            $img_path = URL::route('files', $img_url);
            $department->bannar_img = $img_path;

        }
        
        
        $id=$request->id;
        $department =Department::find($id);
        $department->page_title = $request->input('page_title');
        if($request->input('sub_title')!=null){
            $department->sub_title = $request->input('sub_title');
        }
        else
        {
            $department->sub_title = "";

        }

        $department->page_name = $request->input('page_name');
        $department->decription = $request->input('decription');
        $department->update();
        return redirect('/department/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('departments')->where('id', $id)->delete();
        return redirect()->back();
    }
}
