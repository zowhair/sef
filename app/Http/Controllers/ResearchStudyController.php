<?php

namespace App\Http\Controllers;
use App\Models\ResearchStudy;
use DB;
use URL;
use Illuminate\Http\Request;

class ResearchStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=ResearchStudy::all();
        return view('admin.publication.researchStudy.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publication.researchStudy.create');
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

        $file_url = time() . '.' . $request->file->extension();
        $request->file->move(public_path('files'), $file_url);
        $file_path = URL::route('files', $file_url);

        $researchStudy = new ResearchStudy();
        $researchStudy->title = $request->input('title');
        $researchStudy->date = $request->input('date');
        $researchStudy->decription = $request->input('decription');
        $researchStudy->image = $img_path;
        $researchStudy->file_url = $file_path;
        $researchStudy->save();
        return redirect('/research-studies/');
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
        $data=DB::table('research_studies')->find($id);
        return view('admin.publication.researchStudy.edit',compact('data','id'));
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
        $researchStudy=ResearchStudy::find($id);
        $researchStudy->title=$request->title;
        $researchStudy->date=$request->date;
        $researchStudy->decription=$request->decription;
        if ($request->file !=null)
        {
            $file_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $file_url);
            $file_path = URL::route('files', $file_url);
            $researchStudy->file_url = $file_path;
        }
        if ($request->img !=null)
        {
            $img_url = time() . '.' . $request->img->extension();
            $request->img->move(public_path('files'), $img_url);
            $img_path = URL::route('files', $img_url);
            $researchStudy->image = $img_path;
        }
        $researchStudy->update();
        return redirect('/research-studies/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('research_studies')->where('id', $id)->delete();
        return redirect()->back();
    }
}
