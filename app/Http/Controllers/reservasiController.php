<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reservasiController extends Controller
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

    		// mengambil data dari table pegawai sesuai pencarian data
		$data_parkiran = DB::table('tbl_reservasi')
		->where('nama','like',"%".$cari."%")->simplePaginate(5);

    		// mengirim data pegawai ke view index
		return view('reservasi.index',['data_reservasi' => $data_reservasi]);

	}
    public function index()
    {
        $data_reservasi = DB::table('tbl_reservasi')->simplePaginate(10);
        return view('reservasi.index',[
            'data_reservasi'=>$data_reservasi
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservasi.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
       
        DB::insert('insert into tbl_reservasi (
            nama, 
            tlp,
            check_in,
            check_out,
            pax,
            paket,
            tambahan
            )
            values (?,?,?,?,?,?,?)',[
                $request->nama,
                $request->tlp,
                $request->check_in,
                $request->check_out,
                $request->pax,
                $request->paket,
                $request->tambahan
            ]);
            return redirect()->route('reservasi.index');
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
