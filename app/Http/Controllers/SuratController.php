<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\surat;
use App\kategori;
use App\kepada;
use App\disposisi;
use Validator;

class SuratController extends Controller
{
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
        $surat = surat::paginate(10);

        return view('pages.dashboard.suratmasuk.index', compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
     $disposisi=disposisi::pluck('disposisi','id');
    
    $kepada=kepada::pluck('kepada','id');
     $kategori=kategori::pluck('namakategori','id');
   
   
    
      //  return view('pages.dashboard.suratmasuk.create');
        return view('pages.dashboard.suratmasuk.create', compact('kepada','disposisi','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input=$request->all();

        surat::create($input);


        //return redirect('kategori.index')->with('message', 'Jenis Kategori Berhasil Di Tambahkan');
         return redirect(route('suratmasuk.index'));
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
    	$suratmasuk = surat::findOrFail($id);
    	$kepada=kepada::pluck('kepada','id');
    	$disposisi=disposisi::pluck('disposisi','id');

        $kategori=kategori::pluck('namakategori','id');
	 	
	 	return view('pages.dashboard.suratmasuk.update', compact('suratmasuk','kepada','disposisi','kategori'));

       //return view('pages.dashboard.suratmasuk.update',compact('surat'));
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
         $suratmasuk=surat::find($id);
           $input=$request->all();



           if (empty($suratmasuk)){
               return redirect(route('suratmasuk.index'));
           }

           $suratmasuk->update($input);
        return redirect()->route('suratmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat=surat::find($id);

         if (empty($surat)){
             return redirect(route('suratmasuk.index'));
         } 

         $surat->delete();
         return redirect(route('suratmasuk.index'));
        

    }


    public function cetakpdfsuratmasuk(){
     $list=surat::with(['kategori','kepada','disposisi'])->get();
           
        return view('pages.dashboard.suratmasuk.cetakpdfsuratmasuk', compact('list'));


}

}