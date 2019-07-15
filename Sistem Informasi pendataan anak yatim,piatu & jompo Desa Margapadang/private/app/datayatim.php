<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datayatim extends Model
{
	protected $table = 'datayatim';
    protected $fillable = [
		'nama',
		'tanggalLahir',
		'alamat',
		'jenis_kelamin',
		'status',
		'keterangan'
	];
}
