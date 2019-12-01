<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transaksi::paginate(10);
        return view("pages.transaksi.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.transaksi.form");
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
            'nama_transaksi' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'digits_between:7,15|numeric',
            'email' => 'required|email|max:50'
        ]);

        Transaksi::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Data transaksi");

        return redirect()->route("transaksi.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Transaksi::find($id);

        return view("pages.transaksi.form",compact("data"));
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
            'nama_transaksi' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'digits_between:7,15|numeric',
            'email' => 'required|email|max:50'
        ]);

        Transaksi::where("id",$id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info","Berhasil Rubah Data transaksi");

        return redirect()->route("transaksi.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaksi::destroy($id);

        return redirect()->route("transaksi.index")
            ->with("info","Berhasil Hapus Data transaksi");
    }
}
