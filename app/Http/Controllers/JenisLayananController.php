<?php

namespace App\Http\Controllers;

use App\JenisLayanan;
use Validator;
use Illuminate\Http\Request;

class JenisLayananController extends Controller
{

    protected $rulesCreate = [
        'nama_jenis_layanan' => ['required', 'min:2','unique:jenisLayanan'],
        'kode' => ['required', 'min:2','max:5','unique:jenisLayanan'],
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
        $jenisLayanan = JenisLayanan::paginate(10);

        return view('pages.dashboard.jenisLayanan.indexLayanan', compact('jenisLayanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.jenisLayanan.createJenisLayanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rulesCreate);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        JenisLayanan::create($request->all());

        return redirect('jenisLayanan/tampil')->with('message', 'Jenis Layanan Berhasil Di Tambahkan');
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
        $jenisLayanan = JenisLayanan::findOrFail($id);
        //$this->authorize('modify',$post);

        return view('pages.dashboard.jenisLayanan.updateJenisLayanan',compact('jenisLayanan'));
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
        $jl = JenisLayanan::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'nama_jenis_layanan' => 'required|unique:jenisLayanan,nama_jenis_layanan,'.$jl->id,
            'kode' => 'required|unique:jenisLayanan,kode,'.$jl->id,
        ]);

        //If Rules update not reached, return back with errors
        if($validator->fails()){
            return redirect('jenisLayanan/edit/'.$id)->withErrors($validator)->withInput();
        }

        $jl->update($request->all());
        return redirect()->route('jl.tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jl = JenisLayanan::findOrFail($id);
        $jl->delete();
        return redirect()->route('jl.tampil');
    }
}
