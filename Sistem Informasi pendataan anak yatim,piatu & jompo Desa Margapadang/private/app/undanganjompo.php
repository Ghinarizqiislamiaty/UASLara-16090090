<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class undanganjompo extends Model
{
	protected $table = 'undanganjompo';
    protected $fillable = [
		'tempat',
		'tanggal',
		'jam',
		'peserta'
	];
}
