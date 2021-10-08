<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class berandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //ciputri
        $get_isi_ciputri = DB::table('tbl_konfirmasi_camp')
         ->where('id_campsite','1')
         ->count();
         $get_kapasitas_ciputri=DB::table('tbl_campsite')
         ->select(DB::raw('sum(kapasitas) as kapasitas'))
         ->where('nama_campsite','like',"%ciputri%")
         ->get();
        $data_ciputri = $get_kapasitas_ciputri[0]->kapasitas - $get_isi_ciputri;
        
        //kendeng
        $get_isi_kendeng = DB::table('tbl_konfirmasi_camp')
         ->where('id_campsite','6')
         ->count();
         
         $get_kapasitas_kendeng=DB::table('tbl_campsite')
         ->select(DB::raw('sum(kapasitas) as kapasitas'))
         ->where('nama_campsite','like',"%kendeng%")
         ->get();
        $data_kendeng = $get_kapasitas_kendeng[0]->kapasitas - $get_isi_kendeng;
        
        //batu tapak
        $get_isi_batutapak = DB::table('tbl_konfirmasi_camp')
         ->where('id_campsite','3')
         ->count();
         $get_kapasitas_batutapak=DB::table('tbl_campsite')
         ->select(DB::raw('sum(kapasitas) as kapasitas'))
         ->where('nama_campsite' ,'like',"%batu tapak%")
         ->get();
        $data_batutapak = $get_kapasitas_batutapak[0]->kapasitas - $get_isi_batutapak;
        
        //nirmala
        $get_isi_nirmala = DB::table('tbl_konfirmasi_camp')
         ->where('id_campsite','7')
         ->orWhere('id_campsite','8')
         ->count();
         $get_kapasitas_nirmala=DB::table('tbl_campsite')
         ->select(DB::raw('sum(kapasitas) as kapasitas'))
         ->where('nama_campsite' ,'like',"%nirmala%")
         ->get();
        $data_nirmala = $get_kapasitas_nirmala[0]->kapasitas - $get_isi_nirmala;
        
        return view('mapod-highland.home',[
            'data_ciputri'=>$data_ciputri,
            'data_kendeng'=>$data_kendeng,
            'batu_tapak'=>$data_batutapak,
            'data_nirmala'=>$data_nirmala,
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
    public function store(Request $request)
    {
        //
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
