<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datayatim;
use App\datajompo;
use App\undangan;

class biasaUndangan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
		$datayatim = datayatim::where('keterangan','1')->get();
		return view('biasa.biasaUndangan', compact('datayatim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			//
			//dd($request->all());
			//$idArr =>
		$idArr = $_POST['checked_id'];
		foreach($idArr as $id){
			undangan::create([
				'tempat' => request('tempat'),
				'tanggal' => request('tanggal'),
				'jam' => request('jam'),
				'peserta' => $id
			]);
			//return redirect('data')->with('sukses', 'Data Berhasil Ditambah');
			return redirect('/cetak');
		}
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
		$undangan = undangan::all();
		return view('biasa.cetak', compact('undangan'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
