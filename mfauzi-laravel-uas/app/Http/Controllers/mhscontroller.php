<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\redirect;

class mhscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   		$data= new Mahasiswa;
		$data->nama		=$request->nama;
		$data->nim		=$request->nim;
		$data->alamat	=$request->alamat;
		$data->save();
		
		return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampil_id=Mahasiswa::Find($id);
		return view('pages.edit', compact('tampil_id'));
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
        $data= Mahasiswa::Find($id);
		$data->nama		=$request->nama;
		$data->nim		=$request->nim;
		$data->alamat	=$request->alamat;
		$data->save();
		
		return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Mahasiswa::FindOrFail($id);
		$data->delete();
		return redirect('/home')->with('message', 'Data Berhasil Dihapus');
    }
}
