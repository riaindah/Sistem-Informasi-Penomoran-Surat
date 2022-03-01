<?php

namespace App\Http\Controllers;

use App\Spp;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SppController extends Controller
{

    protected $rulesCreate = [
        'spp_name' => ['required', 'min:2','unique:spp'],
        'singkatan' => ['required', 'min:2','max:5'],
    ];

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spps = Spp::paginate(10);

        return view('pages.dashboard.spp.indexspp', compact('spps'));
    }

    public function tambahData()
    {
        return view('pages.dashboard.spp.createspp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $validator = Validator::make($data, $this->rulesCreate);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Spp::create($data);

        return redirect('spp/tampil')->with('message', 'Sumber SPP Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spps = Spp::findOrFail($id);
        return view('pages.dashboard.spp.updatespp',compact('spps'));
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
        $spp = Spp::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'spp_name' => 'required|unique:spp,spp_name,'.$spp->id,
            'singkatan' => 'required|unique:spp,singkatan,'.$spp->id,
        ]);

        //If Rules update not reached, return back with errors
        if($validator->fails()){
            return redirect('spp/edit/'.$id)->withErrors($validator)->withInput();
        }

        $spp->update($request->all());
        return redirect()->route('spp.tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spp = Spp::findOrFail($id);
        $spp->delete();
        return redirect()->route('spp.tampil');
    }
}