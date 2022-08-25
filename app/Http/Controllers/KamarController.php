<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Gambarkos;
use App\Models\Cabang;
use App\Models\Bank;
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
        $cabangs = Cabang::all();
        $kamars = Kamar::where('status', 'belum')->paginate(10);
        // $kamars = DB::table('kamars')->join('gambarkos', 'kamars.id', '=', 'gambarkos.kamars_id')->join('cabangs', 'kamars.cabangs_id', '=', 'cabangs.id')
        // ->select('kamars.*', DB::raw('gambarkos.kamars_id as kamars_id'), 'gambar', 'cabangs.*')->groupBy('gambarkos.kamars_id')->where('status', 'tidak')->paginate(10);

        // dd($kamars);

        return view('pages.kamar', ['cabangs' => $cabangs, 'kamars' => $kamars]);
    }

    public function kamarcari(Request $request)
    {
        //    dd($request->kode);
        if($request->kode){
           $cabangs = Cabang::all();
            $kamars = Kamar::where('kode', 'LIKE','%'.$request->kode.'%')->paginate(10); 
        }
        if($request->kategori){
           $cabangs = Cabang::all();
             $kamars= Kamar::join('cabangs', 'kamars.cabangs_id', '=', 'cabangs.id')
            ->select('kamars.*', 'cabangs.*')->where('kategori', $request->kategori)->paginate(10);
        }
        if($request->cabang){
            $cabangs = Cabang::all();
             $kamars= Kamar::join('cabangs', 'kamars.cabangs_id', '=', 'cabangs.id')
            ->select('kamars.*', 'cabangs.*')->where('cabangs.id', $request->cabang)->paginate(10);
        }

        return view('pages.kamarcari', ['cabangs' => $cabangs, 'kamars' => $kamars]);
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
            'status' => 'belum',
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

    public function kamarshow($id)
    {
        //
        $kamar = Kamar::find($id);
        // dd($kamar);
        $banks = Bank::all();
        $gambars = Gambarkos::where('kamars_id', $kamar->id)->get();

        $url_gambar =  Gambarkos::where('kamars_id', $kamar->id)->pluck('gambar')->toArray();
        
        return view('pages.kamarshow', ['kamar' => $kamar, 'gambars' => $gambars, 'url_gambar' => $url_gambar, 'banks' => $banks]);
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
