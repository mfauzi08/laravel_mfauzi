<?php

use App\Mahasiswa;
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

Route::get('/', 'ViewController@index');
Route::get('/tambah', function(){
	$mahasiswa = new Mahasiswa;
	$mahasiswa -> nama = "Basuki Tjahaja";
	$mahasiswa -> nim = "14111003";
	$mahasiswa -> alamat = "Belitung Timur";
	$mahasiswa -> save();
	echo "Berhasil Ditambah";
});
Route::get('/ubah', function(){
	$mahasiswa = Mahasiswa::find(5);
	$mahasiswa -> nama = "Irvan Rivano";
	$mahasiswa -> nim = "14111001";
	$mahasiswa -> alamat = "Bekasi";
	$mahasiswa -> save();
	echo "Berhasil Diubah";	
});
Route::get('/tampil', function(){
	$mahasiswa = Mahasiswa::all();
	foreach($mahasiswa as $mhs)
	{
		echo "<b>Nama</b> : ";
		echo $mhs->nama;
		echo "<br> <b>NIM</b> : ";
		echo $mhs->nim;
		echo "<br> <b>Alamat</b> : ";
		echo $mhs->alamat;
		echo "<br>";
	}	
});
Route::get('/hapus', function(){
	{
		$mahasiswa = Mahasiswa::find(4);
		$mahasiswa -> delete();
		echo "Data Berhasil Dihapus";
	}
});