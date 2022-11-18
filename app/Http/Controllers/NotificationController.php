<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use URL;
use DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Notification::all();
        return view('admin.notification.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notification.create');
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

        $notification = new Notification();
        $notification->title = $request->input('title');
        $notification->date = $request->input('date');
        $notification->department = $request->input('department');
        $notification->category = $request->input('category');
        $notification->file_url = $file_path;

        $notification->save();
        return redirect('/notifications/');
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
        $data=DB::table('notifications')->find($id);
        return view('admin.notification.edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id=$request->id;
        $notification=Notification::find($id);
        $notification->title=$request->title;
        $notification->date=$request->date;
        $notification->department=$request->department;
        $notification->category = $request->category;
        if ($request->file !=null)
        {
            $file_url = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $file_url);
            $file_path = URL::route('files', $file_url);
            $notification->file_url = $file_path;
        }
        $notification->update();
        return redirect('/notifications/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('notifications')->where('id', $id)->delete();
        return redirect()->back();
    }
}
