<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\kepada;
use Validator;



class KepadaController extends Controller
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
        $kepada = kepada::paginate(10);

        return view('pages.dashboard.kepada.index', compact('kepada'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.kepada.create');
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

        kepada::create($input);


        //return redirect('kategori.index')->with('message', 'Jenis Kategori Berhasil Di Tambahkan');
         return redirect(route('kepada.index'));
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
        $kepada = kepada::findOrFail($id);
        return view('pages.dashboard.kepada.update',compact('kepada'));
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
         $kepada=kepada::find($id);
           $input=$request->all();


           if (empty($kepada)){
               return redirect(route('kepada.index'));
           }

           $kepada->update($input);
        return redirect()->route('kepada.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kepada=kepada::find($id);

         if (empty($kepada)){
             return redirect(route('kepada.index'));
         } 

         $kepada->delete();
         return redirect(route('kepada.index'));
        

    }
}
