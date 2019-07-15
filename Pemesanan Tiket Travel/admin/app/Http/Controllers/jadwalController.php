<?php

namespace App\Http\Controllers;

use App\jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = DB::table('jadwal')->get();
        return view('pages.jadwal.jadwal', ['jadwal' => $jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jadwal.tambah_jadwal');
        return view('pages.penumpang.tambah_penumpang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'no' => 'required',
            'berangkat' => 'required',
            'tujuan' => 'required',
            'harga' => 'required',
            'mobil' => 'required',
            'warna' => 'required',
            'no_polisi' => 'required',
            'kursi_tersedia' => 'required'
        ]);

        jadwal::create([
            'no' => $request->no,
            'berangkat' => $request->berangkat,
            'tujuan' => $request->tujuan,
            'harga' => $request->harga,
            'mobil' => $request->mobil,
            'warna' => $request->warna,
            'no_polisi' => $request->no_polisi,
            'kursi_tersedia' => $request->kursi_tersedia
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        //
    }
}
