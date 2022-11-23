<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnnualReport;
use DB;
use URL;
class AnnualReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=AnnualReport::all();
        return view('admin.publication.annualReport.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publication.annualReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_url = time() . '.' . $request->file->extension();
        $request->file->move(public_path('files'), $file_url);
        $file_path = URL::route('files', $file_url);

        $annualReport = new AnnualReport();
        $annualReport->title = $request->input('title');
        $annualReport->decription = $request->input('decription');
        $annualReport->file_url = $file_path;
        $annualReport->save();
        return redirect('/annual-report/');
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
        $data=DB::table('annual_reports')->find($id);
        return view('admin.publication.annualReport.edit',compact('data','id'));
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
        $id=$request->id;
        $annualReport=AnnualReport::find($id);
        $annualReport->title=$request->title;
        $annualReport->decription=$request->decription;
        if ($request->file !=null)
        {
            $file_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $file_url);
            $file_path = URL::route('files', $file_url);
            $annualReport->file_url = $file_path;
        }
        $annualReport->update();
        return redirect('/annual-report/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('annual_reports')->where('id', $id)->delete();
        return redirect()->back();
    }
}
