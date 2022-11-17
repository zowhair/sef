<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsUpdate;
use Auth;
use DB;
use Illuminate\Support\Facades\URL;


class NewsUpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=NewsUpdate::all();
        return view('admin.news_updates.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news_updates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $user->name;
        $img_url = time() . '.' . $request->file->extension();
        $request->file->move(public_path('files'), $img_url);
        $img_path = URL::route('files', $img_url);

        $newsUpdates = new NewsUpdate();
        $newsUpdates->title = $request->input('title');
        $newsUpdates->date = $request->input('date');
        $newsUpdates->content = $request->input('content');
        if($request->input('category') !=null)
        {
            $newsUpdates->category = $request->input('category');
        }
        $newsUpdates->img_url = $img_path;
        $newsUpdates->post_by = $user->name;

        $newsUpdates->save();
        return redirect('/news-update/');
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
        $data=DB::table('news_updates')->find($id);
        return view('admin.news_updates.edit',compact('data','id'));
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
        $newsUpdates=NewsUpdate::find($id);
        $newsUpdates->title=$request->title;
        $newsUpdates->date=$request->date;
        $newsUpdates->content=$request->content;
        $newsUpdates->category = $request->category;
        if ($request->file !=null)
        {
            $img_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $img_url);
            $img_path = URL::route('files', $img_url);
            $newsUpdates->img_url = $img_path;
        }
        $newsUpdates->update();
        return redirect('/news-update/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('news_updates')->where('id', $id)->delete();
        return redirect()->back();
    }
}
