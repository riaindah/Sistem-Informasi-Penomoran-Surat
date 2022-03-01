<?php

namespace App\Http\Controllers;

use App\Berkas;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    protected $rulesCreate = [
        'namaPeserta' => ['required', 'min:2'],
        'notas' => ['required'],
        'tanggal' => ['required'],
        'jenisLayanan' => ['required'],
        'spp_id' => ['required'],
    ];

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
        $berkas = Berkas::paginate(10);

        return view('pages.dashboard.berkas.indexberkas', compact('berkas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahBerkas()
    {
        return view('pages.dashboard.berkas.createnewdata');
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

        $berkas = Berkas::create($data);
        $berkas->jenisLayanan()->attach($request->input('jenisLayanan'));



        return redirect()->route('berkas.tampil')->with('message', 'Catatan berhasil');

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
        $berkas = Berkas::findOrFail($id);
        //$this->authorize('modify',$post);

        $selectedJenisLayanan = DB::table('jenisLayanan_berkas_relation')
            ->where('berkas_id','=',$id)
            ->leftJoin('jenisLayanan', 'jenisLayanan_berkas_relation.jenisLayanan_id', '=', 'jenisLayanan.id')
            ->get();

        $timeForEdit = strtotime($berkas['tanggal']);
        $getFormat = date('d/m/Y', $timeForEdit);
        $berkas['tanggal'] = $getFormat;

        $getSelected = [];
        foreach ($selectedJenisLayanan as $sc){
            array_push($getSelected, $sc->id);
        }

        $berkas['jenisLayanan'] = $getSelected;

        return view('pages.dashboard.berkas.updateberkas',compact('berkas'));
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
        $berkas = Berkas::findOrFail($id);

        $dataBerkas = $request->all();

        $validator = Validator::make($request->all(), [
            'namaPeserta' => 'required',
            'notas' => 'required',
            'tanggal' => 'required',
            'spp_id' => 'required',
            'jenisLayanan' => 'required'
        ]);

        //If Rules update not reached, return back with errors
        if($validator->fails()){
            return redirect('berkas/edit/'.$id)->withErrors($validator)->withInput();
        }

        $time = strtotime($dataBerkas['tanggal']);
        $newFormat = date('Y-m-d', $time);

        $dataBerkas['tanggal'] = $newFormat;

        $berkas->update($dataBerkas);

        $berkas->jenisLayanan()->sync($request->input('jenisLayanan'));

        return redirect()->route('berkas.tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berkas = Berkas::findOrFail($id);
        //$this->authorize('modify',$berkas);
        $berkas->delete();
        return redirect()->route('berkas.tampil');
    }
}