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
    public function store(Request $req)
    {
        $mempelai_pria =new Mempelai_pria;
        $mempelai_pria->nama_lengkap=$req->input('NamalengkapPria');
        $mempelai_pria->nama_panggilan=$req->input('NamaPanggilanPria');
        $mempelai_pria->nama_ayah=$req->input('NamaAyahPria');
        $mempelai_pria->nama_ibu=$req->input('NamaIbuPria');
        $mempelai_pria->alamat=$req->input('AlamatPria');
        $mempelai_pria->akun_instagram=$req->input('AkunInstagramPria');
        $mempelai_pria->foto=$req->file('FotoPria')->store('products');
        $mempelai_pria->save();
        
        $mempelai_Wanita =new Mempelai_Wanita;
        $mempelai_Wanita->nama_lengkap=$req->input('NamalengkapWanita');
        $mempelai_Wanita->nama_panggilan=$req->input('NamaPanggilanWanita');
        $mempelai_Wanita->nama_ayah=$req->input('NamaAyahWanita');
        $mempelai_Wanita->nama_ibu=$req->input('NamaIbuWanita');
        $mempelai_Wanita->alamat=$req->input('AlamatWanita');
        $mempelai_Wanita->akun_instagram=$req->input('AkunInstagramWanita');
        $mempelai_Wanita->foto=$req->file('FotoWanita')->store('products');
        $mempelai_Wanita->save();
        
        return response()->json([
            "message" => "Create Data Success",
            "data" => [$mempelai_pria,$mempelai_Wanita]
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
