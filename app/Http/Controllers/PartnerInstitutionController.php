<?php

namespace App\Http\Controllers;

use App\Models\PartnerInstitution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class PartnerInstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=PartnerInstitution::all();
        return view('admin.scholarship.partner-institutions.index',compact('data'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scholarship.partner-institutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partnerInstitution=new PartnerInstitution();

        $partnerInstitution->institution_name=request('institution_name');
        $partnerInstitution->date=request('date');
        $partnerInstitution->catagory=request('catagory');

        $img_url = time() . '.' . $request->image->extension();
        $request->image->move(public_path('files'), $img_url);
        $img_path = URL::route('files', $img_url);
        $partnerInstitution->image_path = $img_path;
        $partnerInstitution->save();
        return redirect('partner-institutions');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PartnerInstitution  $partnerInstitution
     * @return \Illuminate\Http\Response
     */
    public function show(PartnerInstitution $partnerInstitution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PartnerInstitution  $partnerInstitution
     * @return \Illuminate\Http\Response
     */
    public function edit(PartnerInstitution $partnerInstitution,$id)
    {
        $data= PartnerInstitution::find($id);
        return view('admin.scholarship.partner-institutions.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PartnerInstitution  $partnerInstitution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PartnerInstitution $partnerInstitution)
    {
        $partnerInstitution=PartnerInstitution::find($request->id);

        if ($request->image !=null)
        {
            $img_url = time() . '.' . $request->image->extension();
            $request->image->move(public_path('files'), $img_url);
            $img_path = URL::route('files', $img_url);
            $partnerInstitution->image_path = $img_path;
        }
        $partnerInstitution->institution_name=request('institution_name');
        $partnerInstitution->date=request('date');
        $partnerInstitution->catagory=request('catagory');

        $partnerInstitution->save();
        return redirect('partner-institutions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PartnerInstitution  $partnerInstitution
     * @return \Illuminate\Http\Response
     */
    public function destroy(PartnerInstitution $partnerInstitution,$id)
    {
       $partnerInstitution=PartnerInstitution::find($id);
       $partnerInstitution->delete();
       return redirect('partner-institutions');
    }
}
