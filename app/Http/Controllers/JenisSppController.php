<?php

namespace App\Http\Controllers;

use App\JenisSpp;
use Illuminate\Http\Request;
use Validator;

class JenisSppController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    protected $rulesCreate = [
        'jenisSpp' => ['required', 'min:2','unique:jenisSpp'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisSpp = JenisSpp::paginate(10);

        return view('pages.dashboard.jenisSpp.indexJenisSpp', compact('jenisSpp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.jenisSpp.createJenisSpp');
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

        JenisSpp::create($data);

        return redirect('jenisSpp/tampil')->with('message', 'Jenis SPP Berhasil Di Tambahkan');
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
        $jenisSpp = JenisSpp::findOrFail($id);
        return view('pages.dashboard.jenisSpp.updateJenisSpp',compact('jenisSpp'));
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
        $jenisSpp = JenisSpp::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'jenisSpp' => 'required|unique:jenisSpp,jenisSpp,'.$jenisSpp->id,
        ]);

        //If Rules update not reached, return back with errors
        if($validator->fails()){
            return redirect('jenisSpp/edit/'.$id)->withErrors($validator)->withInput();
        }

        $jenisSpp->update($request->all());
        return redirect()->route('jenisSpp.tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisSpp = JenisSpp::findOrFail($id);
        $jenisSpp->delete();
        return redirect()->route('jenisSpp.tampil');
    }
}
