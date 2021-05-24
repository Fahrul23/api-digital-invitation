<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mempelai_Pria;
use App\Models\Mempelai_Wanita;

class PasanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function store(Request $request)
    {
        $mempelai_pria = new Mempelai_pria;
        $mempelai_pria->nama_lengkap = $request->nama_lengkap_pria;
        $mempelai_pria->nama_panggilan = $request->nama_panggilan_pria;
        $mempelai_pria->foto = $request->file('foto_pria')->store('images');
        

        $mempelai_pria->nama_ayah = $request->nama_ayah_pria;
        $mempelai_pria->nama_ibu = $request->nama_ibu_pria;
        $mempelai_pria->alamat = $request->alamat_pria;
        $mempelai_pria->akun_instagram = $request->akun_instagram_pria;
        $mempelai_pria->save();

        $mempelai_wanita = new Mempelai_Wanita;
        $mempelai_wanita->nama_lengkap = $request->nama_lengkap_wanita;
        $mempelai_wanita->nama_panggilan = $request->nama_panggilan_wanita;
        $mempelai_wanita->foto = $request->file('foto_wanita')->store('images');
        $mempelai_wanita->nama_ayah = $request->nama_ayah_wanita;
        $mempelai_wanita->nama_ibu = $request->nama_ibu_wanita;
        $mempelai_wanita->alamat = $request->alamat_wanita;
        $mempelai_wanita->akun_instagram = $request->akun_instagram_wanita;
        $mempelai_wanita->save();

        return response()->json([
            "message" => "Create Data Success",
            "data" => [$mempelai_pria,$mempelai_wanita]
        ]);     
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
