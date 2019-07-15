<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datajompo extends Model
{
	protected $table = 'data_jompo';
    protected $fillable = [
		'nama',
		'tanggalLahir',
		'alamat',
		'jenis_kelamin',
		'status',
		'keterangan'
	];
}
