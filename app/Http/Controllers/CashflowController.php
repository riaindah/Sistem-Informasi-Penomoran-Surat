<?php

namespace App\Http\Controllers;

use App\Cashflow;
use Validator;
use Illuminate\Http\Request;

class CashflowController extends Controller
{
    protected $rulesCreate = [
        'jenisSpp' => ['required'],
        'kodeSpp' => ['required'],
        'jumlah' => ['required'],
        'tanggal' => ['required'],
        'transfer' => ['required'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cashflow = Cashflow::paginate(10);

        return view('pages.dashboard.cashflow.indexcashflow',compact('cashflow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.cashflow.createcashflow');
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

        $time = strtotime($data['tanggal']);
        $newFormat = date('Y-m-d', $time);
        $data['tanggal'] = $newFormat;

        Cashflow::create($data);

        return redirect()->route('cashflow.tampil')->with('message', 'Catatan berhasil');
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
