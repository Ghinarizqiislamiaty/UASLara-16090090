<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class undangan extends Model
{
	protected $table = 'undangan';
    protected $fillable = [
		'tempat',
		'tanggal',
		'jam',
		'peserta'
	];
}
