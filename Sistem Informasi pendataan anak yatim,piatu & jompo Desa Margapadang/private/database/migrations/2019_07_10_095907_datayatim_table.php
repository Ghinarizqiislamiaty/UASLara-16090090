<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatayatimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datayatim', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nama');
			$table->date('tanggalLahir');
			$table->string('alamat');
			$table->string('jenis_kelamin');
			$table->string('status');
			$table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datayatim');
    }
}
