<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Tender::all();
        return view('admin.tender.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


//        $request->validate([
//            'file' => 'required|file|mimes:doc,docx,csv,rtf,xlsx,xls,txt,pdf',
//        ]);

        $fileName_biding = time() . '.' . $request->file->extension();

        $request->file->move(public_path('files'), $fileName_biding);
        $bidding_path = URL::route('files', $fileName_biding);


        $fileName_bidding_rep = time() . '2.' . $request->file2->extension();
        $request->file2->move(public_path('files'), $fileName_bidding_rep);
        $bidding_rep_path = URL::route('files', $fileName_bidding_rep);
        $fileName_contract_rep = time() . '3.' . $request->file3->extension();
        $request->file3->move(public_path('files'), $fileName_contract_rep);
        $contract_rep_path = URL::route('files', $fileName_contract_rep);

        $fileName_contract = time() . '4.' . $request->file4->extension();
        $request->file4->move(public_path('files'), $fileName_contract);
        $contract_path = URL::route('files', $fileName_contract);


        $tender = new Tender();
        $tender->title = $request->input('title');
        $tender->tender_opening_date = $request->input('date');
        $tender->bidding_document = $bidding_path;
        $tender->bid_report = $bidding_rep_path;
        $tender->contract_report = $contract_rep_path;
        $tender->contract = $contract_path;

        $tender->save();
        return redirect('/tenders/');

    }

    public function download($fileName)
    {
        $path = public_path() . '/storage/images/' . $fileName;
        return Response::download($path);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */

 
    public function show(Tender $tender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit($tender_id)
    {
        $tender_Data=DB::table('tenders')->find($tender_id);
       return view('admin.tender.edit',compact('tender_Data','tender_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->id);
        // dd($tender_id);
        $id=$request->id;
        $tender =Tender::find($id);
        
        if ($request->file !=null)
        {
            $fileName_biding = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $fileName_biding);
            $bidding_path = URL::route('files', $fileName_biding);
            
            $tender->bidding_document = $bidding_path;
        } 
        else if($request->file2 !=null)
        {
            $fileName_bidding_rep = time() . '2.' . $request->file2->extension();
            $request->file2->move(public_path('files'), $fileName_bidding_rep);
            $bidding_rep_path = URL::route('files', $fileName_bidding_rep);

            $tender->bid_report = $bidding_rep_path;
        }   
        else if($request->file3 !=null) 
        {
            $fileName_contract_rep = time() . '3.' . $request->file3->extension();
            $request->file3->move(public_path('files'), $fileName_contract_rep);
            $contract_rep_path = URL::route('files', $fileName_contract_rep);

            $tender->contract_report = $contract_rep_path;
        }   
        else if($request->file4 !=null)
        {
            $fileName_contract = time() . '4.' . $request->file4->extension();
            $request->file4->move(public_path('files'), $fileName_contract);
            $contract_path = URL::route('files', $fileName_contract);

            $tender->contract = $contract_path;
        }
        else{
            $tender->title = $request->input('title');
            $tender->tender_opening_date = $request->input('date');

        }
            $tender->update();
            return redirect('/tenders/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy( $tender_id)
    {
        DB::table('tenders')->where('id', $tender_id)->delete();
        return redirect()->back();
    }
}
