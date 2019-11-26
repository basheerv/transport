<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport;
use Session;

class TransportController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 
   


    public function index()
    {
        $transportReg = Transport::paginate(6);
        return view('pages.transportReg.index')->with('transportReg', $transportReg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.transportReg.create'); 
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
            'model'            => 'required',
            'plat_no'          => 'required',
            'tag_no'           => 'required',
            'owner_name'       => 'required',
            'year'             => 'required',
            'owner_passport'   => 'required',
            'chassis_no'       => 'required',
            'city'             => 'required',
            'emr_id'           => 'required|numeric|min:5',
            'category'         => 'required',
            'owner_mob_number' => 'required|numeric',
            'color'            => 'required',
            'weight'           => 'required',
            'temperature'      => 'required',
            'status'           => 'required|numeric',
            'start_date'       => 'required',
            'end_date'         => 'required'
        ]);


        $transportReg = Transport::create([
            'model'         => $request->model,
            'plat_no'       => $request->plat_no,
            'tag_no'        => $request->tag_no,
            'owner_name'    => $request->owner_name,
            'year'          => $request->year,
            'owner_passport'=> $request->owner_passport,
            'emr_id'        => $request->emr_id,
            'category'      => $request->category,
            'city'          => $request->city,
            'chassis_no'    => $request->chassis_no,
            'owner_mob_number' => $request->owner_mob_number,
            'color'         => $request->color,
            'weight'        => $request->weight,
            'temperature'   => $request->temperature,
            'status'        => $request->status,
            'start_date'    => $request->start_date,
            'end_date'      => $request->end_date
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
        $transportReg = Transport::find($id);
        return view('pages.transportReg.edit')->with('transportReg', $transportReg);
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
        // dd($request->all());

          $this->validate($request, [
            'model'            => 'required',
            'plat_no'          => 'required',
            'tag_no'           => 'required',
            'owner_name'       => 'required',
            'year'             => 'required',
            'owner_passport'   => 'required',
            'chassis_no'       => 'required',
            'city'             => 'required',
            'emr_id'           => 'required|numeric|min:5',
            'category'         => 'required',
            'owner_mob_number' => 'required|numeric',
            'color'            => 'required',
            'weight'           => 'required',
            'temperature'      => 'required',
            'status'            => 'required|numeric',
            'start_date'       => 'required',
            'end_date'         => 'required'
        ]);


          $transportReg = Transport::find($id);

          $transportReg->model = $request->model;
          $transportReg->plat_no     = $request->plat_no;
          $transportReg->tag_no      = $request->tag_no;
          $transportReg->owner_name  = $request->owner_name;
          $transportReg->year  = $request->year;
          $transportReg->owner_passport = $request->owner_passport;
          $transportReg->emr_id = $request->emr_id;
          $transportReg->chassis_no = $request->chassis_no;
          $transportReg->city = $request->city;
          $transportReg->category = $request->category;
          $transportReg->owner_mob_number = $request->owner_mob_number;
          $transportReg->color = $request->color;
          $transportReg->weight = $request->weight;
          $transportReg->temperature = $request->temperature;
          $transportReg->status = $request->status;
          $transportReg->start_date = $request->start_date;
          $transportReg->end_date = $request->end_date;
          $transportReg->save();

          Session::flash('success', 'Updated Record successfully');
          return redirect()->route('transportReg.index') ;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transportReg = Transport::find($id);

        $transportReg->delete();

        Session::flash('danger', 'Deleted successfully');
        return redirect()->back();
    }
}
