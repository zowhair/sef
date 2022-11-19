<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use DB;
use URL;
class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Newsletter::all();
        return view('admin.publication.newsletter.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publication.newsletter.create');
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

        $newsletter = new Newsletter();
        $newsletter->title = $request->input('title');
        $newsletter->decription = $request->input('decription');
        $newsletter->file_url = $file_path;
        $newsletter->save();
        return redirect('/newsletters/');
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
        $data=DB::table('newsletters')->find($id);
        return view('admin.publication.newsletter.edit',compact('data','id'));
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
        $newsletter=Newsletter::find($id);
        $newsletter->title=$request->title;
        $newsletter->decription=$request->decription;
        if ($request->file !=null)
        {
            $file_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $file_url);
            $file_path = URL::route('files', $file_url);
            $newsletter->file_url = $file_path;
        }
        $newsletter->update();
        return redirect('/newsletters/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('newsletters')->where('id', $id)->delete();
        return redirect()->back();
    }
}
