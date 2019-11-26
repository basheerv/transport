<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agreement;
use App\Transport;
use Session;
class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.agreements.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transports = Transport::where('status','0')->pluck('plat_no','id');
        return view('pages.agreements.create')->with('transports' ,$transports);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

         $this->validate($request, [
            'contruct_with_driver'  => 'required',
            'start_date'            => 'required',
            'end_date'              => 'required',
            'company_name'          => 'required',
            'comp_address'             => 'required',
            'comp_office_no'           => 'required',
            'comp_licence'             => 'required',
            'com_mob_no'               => 'required|numeric|min:5',      
            'meter_reding'             => 'required|numeric',
            'price'                    => 'required',
            'cheques'                  => 'required',
            'plat_no'                 => 'required',
            'agent'               => 'required',
            'agent_name'           => 'required',
            'agent_email'           => 'required|email',      
            'agent_address'         => 'required',
            'select_price'          => 'required',
            'agent_emr_id'            => 'required',
            'agent_company_name'      => 'required'
        ]);

          $agreements = Agreement::create([
            'contruct_with_driver' => $request->contruct_with_driver,
            'start_date'      => $request->start_date,
            'end_date'        => $request->end_date,
            'company_name'    => $request->company_name,
            'select_price'    => $request->select_price,
            'comp_address'=> $request->comp_address,
            'comp_office_no'    => $request->comp_office_no,
            'comp_licence'      => $request->comp_licence,
            'com_mob_no'        => $request->com_mob_no,
            'meter_reding'    => $request->meter_reding,
            'price'           => $request->price,
            'cheques'         => $request->cheques,
            'plat_no'        => $request->plat_no,
            'agent'           => $request->agent,
            'agent_name'      => $request->agent_name,

            'agent_email'         => $request->agent_email,
            'agent_address'        => $request->agent_address,
            'agent_emr_id'           => $request->agent_emr_id,
            'agent_company_name'      => $request->agent_company_name
        ]);

        Session::flash('success', 'Create new Transport Reg successfully');
        return redirect()->back() ;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
