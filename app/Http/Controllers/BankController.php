<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.admin.bank.bank');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.bank.create');
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
            'bank' => 'required',
            'an' => 'required',
            'norek' => 'required'
        ]);

        $banki = new Bank;
        $banki->bank = $request->bank;
        $banki->an = $request->an;
        $banki->norek = $request->norek;
        $banki->save();

        if($banki){
            return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Terekam!']);
        }else{
            return redirect()->route('transaksi.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $akunbank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $akunbank)
    {
        //
        return view('pages.admin.bank.edit', ['akunbank' => $akunbank]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $akunbank)
    {
        //
        $request->validate([
            'bank' => 'required',
            'an' => 'required',
            'norek' => 'required'
        ]);

        $akunbank->update($request->all());

        if($akunbank){
            return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Di Update!']);
        }else{
            return redirect()->route('transaksi.index')->with(['danger' => 'Data Tidak Di Update!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $akunbank)
    {
        //
        $akunbank->delete();

        if($akunbank){
            return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil di Hapus!']);
        }else{
            return redirect()->route('transaksi.index')->with(['danger' => 'Data Tidak di Hapus!']);
        }
    }
}
