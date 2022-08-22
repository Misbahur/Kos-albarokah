<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Bank;
use App\Models\Kamar;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaksiindex()
    {
        //
        return view('pages.pembayaran');
    }

    public function index()
    {
        //
        $banks = Bank::all();
        $transkasis = Transaksi::orderBy('id', 'desc')->get();
        return view('pages.admin.pembayaran.pembayaran', ['transaksis' => $transkasis, 'banks' => $banks]);
    }

    public function carabayar()
    {
        return view('pages.carapembayaran');
    }

    public function metodebayar()
    {
        return view('pages.metodepembayaran');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kamars = Kamar::where('status', 'tidak')->get();

        return view('pages.admin.pembayaran.create', ['kamars' => $kamars]);
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
        $request->validate([
            'users_id' => 'required',
            'kamars_id' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
            'harga' => 'required|integer',
            'tanggal_sewa' => 'required',
            'lama_sewa' => 'required',
        ]);

        $offline = new Transaksi;
        $offline->users_id = $request->users_id;
        $offline->kamars_id = $request->kamars_id;
        $offline->tanggal = $request->tanggal;
        $offline->tanggal = $request->tanggal;
        $offline->status = $request->status;
        $offline->harga = $request->harga;
        $offline->tanggal_sewa = $request->tanggal_sewa;
        $offline->lama_sewa = $request->lama_sewa;
        $offline->save();

        if($offline){
            return redirect()->route('transaksi.index')->with(['success' => 'Transaksi Kamar Berhasil Terekam!']);
        }else{
            return redirect()->route('transaksi.index')->with(['danger' => 'Transaksi Kamar Tidak Terekam!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
