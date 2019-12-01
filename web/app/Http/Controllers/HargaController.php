<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harga;

class HargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Harga::paginate(10);
        return view("pages.harga.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.harga.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required|max:50',
            
            'harga' => 'required|digits_between:1,15|numeric'
            
        ]);

        Harga::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Data Harga");

        return redirect()->route("harga.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Harga::find($id);

        return view("pages.harga.form",compact("data"));
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
        $request->validate([
            'tipe' => 'required|max:50',
            'harga' => 'required|digits_between:1,15|numeric'  
        ]);

        Harga::where("id",$id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info","Berhasil Rubah Data Harga");

        return redirect()->route("harga.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Harga::destroy($id);

        return redirect()->route("harga.index")
            ->with("info","Berhasil Hapus Data Harga");
    }
}