<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Gambarkos;
use App\Models\Cabang;
use Illuminate\Http\Request;
use DB;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kamarindex()
    {
        //
        return view('pages.kamar');
    }
    public function index()
    {
        //
        $kamars =  Kamar::OrderBy('id', 'desc')->get();

        return view('pages.admin.kamar.kamar', ['kamars' => $kamars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cabangs = Cabang::all();
        return view('pages.admin.kamar.create', ['cabangs' => $cabangs]);
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
        $this->validate($request, [
            'gambar' => 'required',
            'gambar.*' => 'image|mimes:jpeg,jpg,png|max:5000',
            'kode' => 'required',
            'harga' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'deskripsi' => 'required',
        ]);

        $datakamar = ([
            'cabangs_id' => $request->cabang,
            'kode' => $request->kode,
            'harga' => $request->harga,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'deskripsi' => $request->deskripsi,
            'status' => 'tidak',
        ]);

        $lastid = Kamar::create($datakamar)->id;

        if($request->hasfile('gambar'))
         {
            foreach($request->file('gambar') as $key => $file)
            {
                $path = $file->store('gambarkos', 'public');
                $insert[$key]['gambar'] = $path;
                $insert[$key]['kamars_id'] = $lastid;
            }
         }
        Gambarkos::insert($insert);

        // dd($request->all());

        if($datakamar){
            return redirect()->route('kamar.index')->with(['success' => 'Kamar Upload successfully']);
        }else{
            return redirect()->route('kamar.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
        $gambars = Gambarkos::where('kamars_id', $kamar->id)->get();

        $url_gambar =  Gambarkos::where('kamars_id', $kamar->id)->pluck('gambar')->toArray();


       
        
        return view('pages.admin.kamar.show', ['kamar' => $kamar, 'gambars' => $gambars, 'url_gambar' => $url_gambar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        //
        $cabangs = Cabang::all();
        return view('pages.admin.kamar.edit', ['kamar' => $kamar, 'cabangs' => $cabangs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        //
        $this->validate($request, [
            'kode' => 'required',
            'harga' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'deskripsi' => 'required',
        ]);

        $datakamar = ([
            'cabangs_id' => $request->cabang,
            'kode' => $request->kode,
            'harga' => $request->harga,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'deskripsi' => $request->deskripsi,
            'status' => 'tidak',
        ]);

        DB::table('kamars')->update($datakamar);

        if($request->hasfile('gambar'))
         {
            Gambarkos::where('kamars_id', $kamar->id)->delete();
            foreach($request->file('gambar') as $key => $file)
            {
                $path = $file->store('gambarkos', 'public');
                $insert[$key]['gambar'] = $path;
                $insert[$key]['kamars_id'] = $kamar->id;
            }
         }
        Gambarkos::insert($insert);

         if($datakamar){
            return redirect()->route('kamar.index')->with(['success' => 'Kamar Upload successfully']);
        }else{
            return redirect()->route('kamar.index')->with(['danger' => 'Data Tidak Terekam!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        //
        $kamar->delete();
        return redirect()->route('kamar.index')
                        ->with('success','cabang deleted successfully');
    }
}
