<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Req;

class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Req::paginate(10);
        return view("pages.req.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.req.form");
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
            'nama_req' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'digits_between:7,15|numeric',
            'email' => 'required|email|max:50'
        ]);

        Req::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Data Req");

        return redirect()->route("req.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Req::find($id);

        return view("pages.req.form",compact("data"));
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
            'nama_req' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'digits_between:7,15|numeric',
            'email' => 'required|email|max:50'
        ]);

        Req::where("id",$id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info","Berhasil Rubah Data Req");

        return redirect()->route("req.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Req::destroy($id);

        return redirect()->route("req.index")
            ->with("info","Berhasil Hapus Data Req");
    }
}

