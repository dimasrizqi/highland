<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class konfirmasicampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
		$data_parkiran = DB::table('tbl_konfirmasi_camp')
		->where('nama','like',"%".$cari."%")->simplePaginate(5);
		return view('reservasi.index',['data_reservasi' => $data_reservasi]);

	}
    public function index()
    {
        $data_konfirmasi_camp = DB::table('tbl_konfirmasi_camp')->simplePaginate(10);
        $data_campsite = DB::table('tbl_campsite')->orderBy('nama_campsite','ASC')->get();
        return view('konfirmasicamp.index',[
            'data_konfirmasi_camp'=>$data_konfirmasi_camp,
            'data_campsite'=>$data_campsite
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_campsite = DB::table('tbl_campsite')->orderBy('nama_campsite','ASC')->get();
        return view('konfirmasicamp.create',[
            'data_campsite'=>$data_campsite
            ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * d 	kode_booking 	id_pic 	lokasi_campsite_blok_site 	id_campsite 	status 	tlp 	nama 
     */
    public function store(Request $request)
    {
        DB::insert('insert into tbl_konfirmasi_camp (
            nama, 
            tlp,
            kode_booking,
            id_campsite,
            status,
            id_pic
            )
            values (?,?,?,?,?,?)',[
                $request->nama,
                $request->tlp,
                $request->kode_booking,
                $request->id_campsite,
                "1",
                "1"
            ]);
            return redirect()->route('konfirmasicamp.index');
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
