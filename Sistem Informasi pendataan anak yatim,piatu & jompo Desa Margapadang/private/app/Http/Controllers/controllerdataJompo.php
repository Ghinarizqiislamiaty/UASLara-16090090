<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datajompo;
use App\datayatim;

class controllerdataJompo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$datajompo = datajompo::where('keterangan','1')->get();
		return view('home.datajompo', compact('datajompo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		datajompo::create([
			'nama' => request('nama'),
			'tanggalLahir' => request('tanggalLahir'),
			'alamat' => request('alamat'),
			'jenis_kelamin' => request('jenis_kelamin'),
			'status' => request('status'),
			'keterangan' => '1'
		]);
		return redirect('datajompo')->with('sukses', 'Data Berhasil Ditambah');
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
		$datajompo = datajompo::find($id);
		return view('home.editjompo',['datajompo' => $datajompo]);
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
		$datajompo = datajompo::find($id);
		$datajompo->update($request->all());
		return redirect('datajompo')->with('sukses', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        //
		
		$datajompo = datajompo::find($id);
		return view('home.hapusjompo',['datajompo' => $datajompo]);
    }
    public function destroy(Request $request, $id)
    {
        //
		$datajompo = datajompo::find($id);
		datajompo::where("id",$id)->update([
			'keterangan' => $request-> keterangan = 0
		]);
		return redirect('datajompo')->with('sukses', 'Data Telah Hapus');
    }

}
