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
    public function index($id)
    {
        $Mempelai_Pria = Mempelai_Pria::find($id);
        $Mempelai_Wanita = Mempelai_Wanita::find($id);

        return response()->json([
            "Message" => "Get Data Successfully",
            "data" => [$Mempelai_Pria,$Mempelai_Wanita]
        ]);
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
        
        $mempelai_wanita =new Mempelai_Wanita;
        $mempelai_wanita->user_id=1;
        $mempelai_wanita->nama_lengkap=$req->input('NamalengkapWanita');
        $mempelai_wanita->nama_panggilan=$req->input('NamaPanggilanWanita');
        $mempelai_wanita->nama_ayah=$req->input('NamaAyahWanita');
        $mempelai_wanita->nama_ibu=$req->input('NamaIbuWanita');
        $mempelai_wanita->alamat=$req->input('AlamatWanita');
        $mempelai_wanita->akun_instagram=$req->input('AkunInstagramWanita');
        $mempelai_wanita->foto=$req->file('FotoWanita')->store('images');
        $mempelai_wanita->save();
                
        
        $mempelai_pria =new Mempelai_pria;
        $mempelai_pria->user_id=1;
        $mempelai_pria->nama_lengkap=$req->input('NamalengkapPria');
        $mempelai_pria->nama_panggilan=$req->input('NamaPanggilanPria');
        $mempelai_pria->nama_ayah=$req->input('NamaAyahPria');
        $mempelai_pria->nama_ibu=$req->input('NamaIbuPria');
        $mempelai_pria->alamat=$req->input('AlamatPria');
        $mempelai_pria->akun_instagram=$req->input('AkunInstagramPria');
        $mempelai_pria->foto=$req->file('FotoPria')->store('images');
        $mempelai_pria->save();
        
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->description = $req->input('description');
        if($req->file('file'))
        {
            $product->file_path=$req->file('file')->store('products');
        }
        $product->save();
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        
        $mempelai_pria = Mempelai_Pria::find($id);
        $mempelai_wanita = Mempelai_Wanita::find($id);
        
        if($mempelai_pria){
            $mempelai_pria->user_id=1;
            $mempelai_pria->nama_lengkap=$req->input('NamalengkapPria') ? $req->input('NamalengkapPria') : $mempelai_pria->nama_lengkap ;
            $mempelai_pria->nama_panggilan=$req->input('NamaPanggilanPria') ? $req->input('NamaPanggilanPria') : $mempelai_pria->nama_panggilan; 
            $mempelai_pria->nama_ayah=$req->input('NamaAyahPria') ? $req->input('NamaAyahPria') : $mempelai_pria->nama_ayah;
            $mempelai_pria->nama_ibu=$req->input('NamaIbuPria') ? $req->input('NamaIbuPria') : $mempelai_pria->nama_ibu;
            $mempelai_pria->alamat=$req->input('AlamatPria') ? $req->input('AlamatPria') : $mempelai_pria->alamat;
            $mempelai_pria->akun_instagram=$req->input('AkunInstagramPria') ? $req->input('AkunInstagramPria') : $mempelai_pria->akun_instagram;
            if($req->file('FotoPria'))
            {
                $mempelai_pria->foto=$req->file('FotoPria')->store('images');
            }
            $mempelai_pria->save();
        }else{
            return response()->json([
                "message" => "Data Not Found",
               
            ]);
        }

        if($mempelai_wanita){
            $mempelai_wanita->user_id=1;
            $mempelai_wanita->nama_lengkap=$req->input('NamalengkapWanita') ? $req->input('NamalengkapWanita') : $mempelai_wanita->nama_lengkap ;
            $mempelai_wanita->nama_panggilan=$req->input('NamaPanggilanWanita') ? $req->input('NamaPanggilanWanita') : $mempelai_wanita->nama_panggilan; 
            $mempelai_wanita->nama_ayah=$req->input('NamaAyahWanita') ? $req->input('NamaAyahPria') : $mempelai_wanita->nama_ayah;
            $mempelai_wanita->nama_ibu=$req->input('NamaIbuWanita') ? $req->input('NamaIbuWanita') : $mempelai_wanita->nama_ibu;
            $mempelai_wanita->alamat=$req->input('AlamatWanita') ? $req->input('AlamatWanita') : $mempelai_wanita->alamat;
            $mempelai_wanita->akun_instagram=$req->input('AkunInstagramWanita') ? $req->input('AkunInstagramWanita') : $mempelai_wanita->akun_instagram;
            if($req->file('FotoWanita'))
            {
                $mempelai_wanita->foto=$req->file('FotoWanita')->store('images');
            }
            $mempelai_wanita->save();
        }else{
            return response()->json([
                "message" => "Data Not Found",
               
            ]);
            
        }
        return response()->json([
            "message" => "Update Data Succes",
            "data" => [$mempelai_pria,$mempelai_wanita]
        ]);
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
