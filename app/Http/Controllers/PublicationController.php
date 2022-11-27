<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\PublicationCategory;
use DB;
use URL;
class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=PublicationCategory::all();
        $data=Publication::all();
        return view('admin.publication.index',compact('data','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=PublicationCategory::all();
        return view('admin.publication.create',compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publication = new Publication();
        if($request->img != null)
        {
            $img_url = time() . '.' . $request->img->extension();
            $request->img->move(public_path('files'), $img_url);
            $img_path = URL::route('files', $img_url);
            $publication->image = $img_path;
        }

        if($request->file !=null){
            $file_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $file_url);
            $file_path = URL::route('files', $file_url);
            $publication->file_url = $file_path;
        }
        $publication->title = $request->input('title');
        $publication->date = $request->input('date');
        $publication->decription = $request->input('decription');
        $publication->page_name = $request->input('page_name');
        $publication->save();
        return redirect('/publication/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=PublicationCategory::all();
        $publication_category=PublicationCategory::find($id);

        $data=Publication::all()->where('page_name',$id);
        return view('admin.publication.home',compact('data','category','publication_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('publications')->find($id);
        $category=PublicationCategory::all();
        return view('admin.publication.edit',compact('data','id','category'));
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
        if($request->img != null)
        {
            $img_url = time() . '.' . $request->img->extension();
            $request->img->move(public_path('files'), $img_url);
            $img_path = URL::route('files', $img_url);
            $publication->image = $img_path;
        }

        if($request->file !=null){
            $file_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $file_url);
            $file_path = URL::route('files', $file_url);
            $publication->file_url = $file_path;
        }
        $id=$request->id;
        $publication =Publication::find($id);
        $publication->title = $request->input('title');
        $publication->date = $request->input('date');
        $publication->decription = $request->input('decription');
        $publication->page_name = $request->input('page_name');
        $publication->update();
        return redirect('/publication/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('publications')->where('id', $id)->delete();
        return redirect()->back();
    }
    public function category()
    {
        $data=PublicationCategory::all();
        return view('admin.publication.category',compact('data'));
    }
    public function add(Request $request)
    {
        $category = new PublicationCategory();
        $category->title = $request->input('title');
        $category->save();
        return redirect('/publication-category/');
    }
    public function delete($id)
    {
        DB::table('publication_categories')->where('id', $id)->delete();
        return redirect()->back();
    }
}
