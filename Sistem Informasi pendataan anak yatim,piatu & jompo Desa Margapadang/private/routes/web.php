<?php

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/

	Route::get('/wkwk', function () {
		return view('welcome');
	});

	//welcome
	Route::get('/','welcome@index');
	//home
	Route::get('/home','home@index');

	Route::group(['middleware'=>'auth'],function(){
		//admin data
		//crud data yatim
		//read
		Route::get('/data','data@index');
		//create
		Route::post('/data.input','data@store')->name('data.input');
		//update
		Route::get('/data{id}/edit','data@edit')->name('data.ubah');
		Route::post('/data{id}/update','data@update')->name('data.update');
		//delete
		Route::get('/data{id}/hapus','data@hapus')->name('data.hapus');
		Route::post('/data{id}/destroy','data@destroy')->name('data.destroy');


		//crud data jompo
		//read
		Route::get('/datajompo','controllerdataJompo@index');
		//creat
		Route::post('jompo.masuk','controllerdataJompo@store')->name('jompo.masuk');
		//update
		Route::get('/jompo{id}/edit','controllerdataJompo@edit')->name('jompo.edit');
		Route::post('/jompo{id}/update','controllerdataJompo@update')->name('jompo.update');
		//delete
		Route::get('/jompo{id}/hapus','controllerdataJompo@hapus')->name('jompo.hapus');
		Route::post('/jompo{id}/destroy','controllerdataJompo@destroy')->name('jompo.destroy');


		//crud undangan
		//read
		Route::get('/undangan','undangan@index');

	});
		
	//read
	//crud undangan Jompo
	Route::get('/undanganJompo','undanganJompo@jompo');
	//Route::get('/biasaUndangan','biasaUndangan@create');
	
	Route::post('/biasaUndangan','undanganJompo@store')->name('undangan.jompo');
	
	//biasa
	Route::get('/biasaHome','biasaHome@index')->name('login');
	Route::post('/postlogin','biasaHome@postlogin');
	Route::get('/logout','biasaHome@logout');
	//biasa data
	 //data yatim
	//read
	Route::get('/biasaData','biasaDatayatim@index');

	//read
	Route::get('/biasaDatajompo','biasaDatajompo@index');
	
	//read cetak undangan
	Route::get('/cetak','biasaUndangan@show');

	//read
	//crud undangan Anak Yatim
	Route::get('/biasaUndangan','biasaUndangan@index');
	//Route::get('/biasaUndangan','biasaUndangan@create');
	
	Route::post('/biasaUndangan','biasaUndangan@create')->name('cetak.yatim');
	//Route::get('/cetak','controllerdataJompo@create')->name('cetak.undangan');

	

	
