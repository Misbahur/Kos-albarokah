<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;


class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kontakindex()
    {
        //
        return view('pages.kontak');
    }

    public function index()
    {
        //
        $kontaks = Kontak::all();
        return view('pages.admin.kontak.kontak', ['kontaks' => $kontaks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.kontak.create');
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
            'email' => 'required|email',
            'nohp' => 'required',
            'linkmaps' => 'required',
        ]);
        // dd($request->all());

        $kontak = new Kontak;
        $kontak->email = $request->email;
        $kontak->nohp = $request->nohp;
        $kontak->linkmaps = $request->linkmaps;
        $kontak->save();

        if($kontak){
            return redirect()->route('kontak.index')->with(['success' => 'kontak Berhasil disimpan']);
        }else{
            return redirect()->route('kontak.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        //
        return view('pages.admin.kontak.edit', ['kontak' => $kontak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak)
    {
        //
         $request->validate([
            'email' => 'required|email',
            'nohp' => 'required',
            'linkmaps' => 'required',
        ]);

        $kontak->update($request->all());

        if($kontak){
            return redirect()->route('kontak.index')->with(['success' => 'kontak Berhasil diupdate']);
        }else{
            return redirect()->route('kontak.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        //
          $kontak->delete();
       
        return redirect()->route('kontak.index')
                        ->with('success','kontak deleted successfully');
    }
}
