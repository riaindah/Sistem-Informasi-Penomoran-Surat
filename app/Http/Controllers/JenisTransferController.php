<?php

namespace App\Http\Controllers;

use App\JenisTransfer;
use Validator;
use Illuminate\Http\Request;

class JenisTransferController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    protected $rulesCreate = [
        'jenisTransfer' => ['required', 'min:2','unique:jenisTransferPrioritas'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisTransfer = JenisTransfer::paginate(10);

        return view('pages.dashboard.transfer.indextrasnfer', compact('jenisTransfer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.transfer.tambahTransfer');
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

        JenisTransfer::create($data);

        return redirect('jenisTransfer/tampil')->with('message', 'Jenis Transfer Berhasil Di Tambahkan');
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
        $jenisTransfer = JenisTransfer::findOrFail($id);

        return view('pages.dashboard.transfer.updateTransfer',compact('jenisTransfer'));
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
        $jenisTransfer = JenisTransfer::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'jenisTransfer' => 'required|unique:jenisTransferPrioritas,jenisTransfer,'.$jenisTransfer->id,
        ]);

        //If Rules update not reached, return back with errors
        if($validator->fails()){
            return redirect('jenisTransfer/edit/'.$id)->withErrors($validator)->withInput();
        }

        $jenisTransfer->update($request->all());
        return redirect()->route('jenisTransfer.tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisTransfer = JenisTransfer::findOrFail($id);
        $jenisTransfer->delete();
        return redirect()->route('jenisTransfer.tampil');
    }
}
