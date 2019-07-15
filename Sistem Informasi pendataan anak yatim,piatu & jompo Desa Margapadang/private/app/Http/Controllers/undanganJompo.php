<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datajompo;

class undanganJompo extends Controller
{
    //
    public function jompo()
    {
        //
		$datajompo = datajompo::where('keterangan','1')->get();
		return view('biasa.undanganJompo', compact('datajompo'));
    }
	
    public function store()
    {
        //
		$undanganjompo = undanganjompo::all();
			//
			//dd($request->all());
			//$idArr =>
		$idArr = $_POST['checked_id'];
		foreach($idArr as $id){
			undanganjompo::create([
				'tempat' => request('tempat'),
				'tanggal' => request('tanggal'),
				'jam' => request('jam'),
				'peserta' => $id
			]);
			//return redirect('data')->with('sukses', 'Data Berhasil Ditambah');
			return view('biasa.cetakJompo', compact('undanganjompo'));		
		}
	}
}
