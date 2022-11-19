<?php

namespace App\Http\Controllers;
use App\Models\Sujaag;
use DB;
use URL;
use Illuminate\Http\Request;

class SujaagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Sujaag::all();
        return view('admin.publication.sujaag.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publication.sujaag.create');
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

        $sujaag = new Sujaag();
        $sujaag->title = $request->input('title');
        $sujaag->date = $request->input('date');
        $sujaag->decription = $request->input('decription');
        $sujaag->image = $img_path;
        $sujaag->file_url = $file_path;
        $sujaag->save();
        return redirect('/sujaag/');
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
        $data=DB::table('sujaags')->find($id);
        return view('admin.publication.sujaag.edit',compact('data','id'));
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
        $sujaag=Sujaag::find($id);
        $sujaag->title=$request->title;
        $sujaag->date=$request->date;
        $sujaag->decription=$request->decription;
        if ($request->file !=null)
        {
            $file_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $file_url);
            $file_path = URL::route('files', $file_url);
            $sujaag->file_url = $file_path;
        }
        if ($request->img !=null)
        {
            $img_url = time() . '.' . $request->img->extension();
            $request->img->move(public_path('files'), $img_url);
            $img_path = URL::route('files', $img_url);
            $sujaag->image = $img_path;
        }
        $sujaag->update();
        return redirect('/sujaag/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sujaag')->where('id', $id)->delete();
        return redirect()->back();
    }
}
