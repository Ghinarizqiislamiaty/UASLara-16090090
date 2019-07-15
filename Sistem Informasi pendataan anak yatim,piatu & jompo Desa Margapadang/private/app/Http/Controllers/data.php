<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datayatim;

class data extends Controller
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
		return view('home.data', compact('datayatim'));
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
    public function store(/*Request $request*/)
    {
        //
		datayatim::create([
			'nama' => request('nama'),
			'tanggalLahir' => request('tanggalLahir'),
			'alamat' => request('alamat'),
			'jenis_kelamin' => request('jenis_kelamin'),
			'status' => request('status'),
			'keterangan' => '1'
		]);
		return redirect('data')->with('sukses', 'Data Berhasil Ditambah');
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
		
		$datayatim = datayatim::find($id);
		return view('home.editdata',['datayatim' => $datayatim]);
    }

    public function update(Request $request, $id)
    {
        //
		$datayatim = datayatim::find($id);
		$datayatim->update($request->all());
		return redirect('data')->with('sukses', 'Data Berhasil Diupdate');
	}

    public function hapus($id)
    {
        //
		
		$datayatim = datayatim::find($id);
		return view('home.hapusdata',['datayatim' => $datayatim]);
    }
    public function destroy(Request $request, $id)
    {
		$datayatim = datayatim::find($id);
		datayatim::where("id",$id)->update([
			'keterangan' => $request-> keterangan = 0
		]);
		return redirect('data')->with('sukses', 'Data Telah Hapus');
    }
}
