<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Bank;
use App\Models\Kamar;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Mail;
use App\Mail\ValidasiMail;
use App\Mail\ReminderMail;

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
        $pembayarans = Transaksi::where('users_id', Auth::user()->id)->get();
        return view('pages.pembayaran', ['pembayarans' => $pembayarans]);
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
        $users = User::where('role', 'penyewa')->get();
        $kamars = Kamar::where('status', 'tidak')->get();

        return view('pages.admin.pembayaran.create', ['kamars' => $kamars, 'users' => $users]);
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

        $updatekamar = Kamar::find($request->kamars_id);
        $updatekamar->status = 'sudah';
        $updatekamar->update();

        $offline = new Transaksi;
        $offline->users_id = $request->users_id;
        $offline->kamars_id = $request->kamars_id;
        $offline->tanggal = $request->tanggal;
        $offline->tanggal = $request->tanggal;
        $offline->status = $request->status;
        $offline->harga = $request->harga*$request->lama_sewa;
        $offline->tanggal_sewa = $request->tanggal_sewa;
        $offline->lama_sewa = $request->lama_sewa;
        $offline->jatuh_tempo = Carbon::parse($request->tanggal_sewa)->addMonth($request->lama_sewa)->format('Y-m-d');
        $offline->save();

        if($offline){
            return redirect()->route('transaksi.index')->with(['success' => 'Transaksi Kamar Berhasil Terekam!']);
        }else{
            return redirect()->route('transaksi.index')->with(['danger' => 'Transaksi Kamar Tidak Terekam!']);
        }
    }

    public function penyewastore(Request $request)
    {
        //
        // dd($request->all());
        $request->validate([
            'users_id' => 'required',
            'kamars_id' => 'required',
            'banks_id' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
            'harga' => 'required|integer',
            'tanggal_sewa' => 'required',
            'lama_sewa' => 'required',
        ]);

        $transaksiharian = Transaksi::where('tanggal', date('Y-m-d'))->get();
        $noinvoice = date('Ymd').Auth::user()->id.$transaksiharian->count()+1;
        // dd($noinvoice);

        $updatekamar = Kamar::find($request->kamars_id);
        $updatekamar->status = 'sudah';
        $updatekamar->update();

        $online = new Transaksi;
        $online->users_id = $request->users_id;
        $online->kamars_id = $request->kamars_id;
        $online->banks_id = $request->banks_id;
        $online->noinvoice = $noinvoice;
        $online->tanggal = $request->tanggal;
        $online->status = $request->status;
        $online->harga = $request->harga*$request->lama_sewa;
        $online->tanggal_sewa = $request->tanggal_sewa;
        $online->lama_sewa = $request->lama_sewa;
        $online->jatuh_tempo = Carbon::parse($request->tanggal_sewa)->addMonth($request->lama_sewa)->format('Y-m-d');
        $online->save();

        if($online){
            return redirect()->route('transaksipenyewa')->with(['success' => 'Transaksi Kamar Berhasil Terekam!']);
        }else{
            return redirect()->route('transaksipenyewa')->with(['danger' => 'Transaksi Kamar Tidak Terekam!']);
        }
    }

    public function buktipenyewa(Request $request, Transaksi $transaksi){
        // dd($request->all());

        $request->validate([
            'bukti' => 'required',
        ]);

        $path = date('Ymd').$request->nama . '.' . $request->bukti->extension();
        $request->file('bukti')->storeAs('buktibayar', $path, 'public');

        $bukti = Transaksi::find($request->id);
        $bukti->buktitf = $path;
        $bukti->update();

        if($bukti){
            return redirect()->back()->with(['success' => 'Data Berhasil Terekam!']);
        }else{
            return redirect()->back()->with(['danger' => 'Data Tidak Terekam!']);
        }
    }

    public function invoice(Request $request){
        $invoice = Transaksi::find($request->id);
        // dd($invoice->noinvoice);
        $data = [
            'noinvoice' => $invoice->noinvoice,
            'tanggaltransaksi' => $invoice->tanggal,
            'tanggalsewa' => $invoice->tanggal_sewa,
            'namapenyewa' => $invoice->user->name,
            'jkpenyewa' => $invoice->user->jenis_kelamin,
            'alamatpenyewa' => $invoice->user->alamat,
            'lamasewa' => $invoice->lama_sewa,
            'kodekost' => $invoice->kamar->kode,
            'harga' => $invoice->harga,
            'cabang' => $invoice->kamar->cabang->nama
        ];
        
        
        $pdf = PDF::loadView('pages.invoice', $data);

        return $pdf->stream('invoice'.Auth::user()->name.'.pdf');
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
        return view('pages.admin.pembayaran.detail', ['transaksi' => $transaksi]);
    }

    public function validasi(Request $request, Transaksi $transaksi)
    {
        // dd($request->all());

        $validasi = Transaksi::find($request->id);
        $validasi->status = $request->status;
        $validasi->update();

        $mailData  = [
            'noinvoice' => $validasi->noinvoice,
            'tanggaltransaksi' => $validasi->tanggal,
            'tanggalsewa' => $validasi->tanggal_sewa,
            'namapenyewa' => $validasi->user->name,
            'jkpenyewa' => $validasi->user->jenis_kelamin,
            'alamatpenyewa' => $validasi->user->alamat,
            'lamasewa' => $validasi->lama_sewa,
            'kodekost' => $validasi->kamar->kode,
            'harga' => $validasi->harga,
            'cabang' => $validasi->kamar->cabang->nama
        ];

        Mail::to($validasi->user->email)->send(new ValidasiMail($mailData));

        if($validasi){
            return redirect()->route('transaksi.index')->with(['success' => 'Transaksi Kamar Berhasil Terekam!']);
        }else{
            return redirect()->route('transaksi.index')->with(['danger' => 'Transaksi Kamar Tidak Terekam!']);
        }
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
        $users = User::where('role', 'penyewa')->get();
        $kamars = Kamar::where('status', 'tidak')->get();
        return view('pages.admin.pembayaran.edit', ['transaksi' => $transaksi, 'kamars' => $kamars, 'users' => $users]);
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
        $request->validate([
            'users_id' => 'required',
            'kamars_id' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
            'harga' => 'required|integer',
            'tanggal_sewa' => 'required',
            'lama_sewa' => 'required',
        ]);

        $transaksi->update($request->all());

        if($transaksi){
            return redirect()->route('transaksi.index')->with(['success' => 'Transaksi Kamar Berhasil Terekam!']);
        }else{
            return redirect()->route('transaksi.index')->with(['danger' => 'Transaksi Kamar Tidak Terekam!']);
        }
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
        $transaksi->delete();

        return redirect()->route('transaksi.index')
                        ->with('success','Data Transaksi deleted successfully');
    }

    public function reminderpenyewa()
    {
        $transaksi = Transaksi::all();
        // ->subDays(5)
        foreach ($transaksi as $item){
            if(Carbon::parse($item->jatuh_tempo)->subDays(3)->format('Y-m-d') === Carbon::now()->format('Y-m-d'))
            {
            $mailData  = [
            'nama' => $item->user->name,
            'jatuh_tempo' => $item->jatuh_tempo,
            ];
            Mail::to($item->user->email)->send(new ReminderMail($mailData));
            }
        }
    }
}
