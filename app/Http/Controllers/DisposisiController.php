<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\disposisi;
use Validator;


class DisposisiController extends Controller
{
    //
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
        $disposisi = disposisi::paginate(10);

        return view('pages.dashboard.disposisi.index', compact('disposisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.disposisi.create');
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

        disposisi::create($input);


        //return redirect('kategori.index')->with('message', 'Jenis Kategori Berhasil Di Tambahkan');
         return redirect(route('disposisi.index'));
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
        $disposisi = disposisi::findOrFail($id);
        return view('pages.dashboard.disposisi.update',compact('disposisi'));
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
         $disposisi=disposisi::find($id);
           $input=$request->all();


           if (empty($disposisi)){
               return redirect(route('disposisi.index'));
           }

           $disposisi->update($input);
        return redirect()->route('disposisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disposisi=disposisi::find($id);

         if (empty($disposisi)){
             return redirect(route('disposisi.index'));
         } 

         $disposisi->delete();
         return redirect(route('disposisi.index'));
        

    }
}
