<?php

namespace App\Http\Controllers;

use App\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = DB::table('transaksi')->get();
        return view('pages.transaksi.transaksi', ['transaksi' => $transaksi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.transaksi.tambah_transaksi');
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
            'nama' => 'required',
            'tujuan' => 'required',
            'harga' => 'required',
            'jumlah_pesanan' => 'required',
            'bank' => 'required'

        ]);

        transaksi::create([
            'no' => $request->no,
            'nama' => $request->nama,
            'tujuan' => $request->tujuan,
            'harga' => $request->harga,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'bank' => $request->bank

        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
