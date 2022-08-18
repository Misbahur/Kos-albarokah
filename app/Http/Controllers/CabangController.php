<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cabangs =  Cabang::OrderBy('id', 'desc')->get();
        // dd($cabangs);
        return view('pages.admin.cabang.cabang', ['cabangs' => $cabangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.cabang.create');
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
        // dd($request->all()); 

        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $cabang = new Cabang;
        $cabang->nama = $request->nama;
        $cabang->kategori = $request->kategori;
        $cabang->latitude = $request->latitude;
        $cabang->longitude = $request->longitude;
        $cabang->save();

        // $cabang = Cabang::create($request->all());

        if($cabang){
            return redirect()->route('cabang.index')->with(['success' => 'Data Berhasil Terekam!']);
        }else{
            return redirect()->route('cabang.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function show(Cabang $cabang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabang $cabang)
    {
        //
        return view('pages.admin.cabang.edit', ['cabang' => $cabang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cabang $cabang)
    {
        //
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $cabang->update($request->all());

        return redirect()->route('cabang.index')
                        ->with('success','Data Cabang updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabang $cabang)
    {
        //
        $cabang->delete();
       
        return redirect()->route('cabang.index')
                        ->with('success','cabang deleted successfully');
    }
}
