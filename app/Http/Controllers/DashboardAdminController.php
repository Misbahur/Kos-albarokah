<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukan_mingguan = Transaksi::where('status', 'disetujui')->whereBetween('tanggal', [
            Carbon::parse('last monday')->startOfDay(),
            Carbon::parse('next friday')->endOfDay(),
        ])->sum('harga');
        $transaksi_last_week = Transaksi::where('status', 'disetujui')->whereBetween('tanggal', [
            Carbon::parse('last monday')->startOfDay(),
            Carbon::parse('next friday')->endOfDay(),
        ])->get();
        $pemasukan_bulanan =  Transaksi::where('status', 'disetujui')->whereMonth('tanggal', date('m'))->sum('harga');
        $pemasukan_tahunan =  Transaksi::where('status', 'disetujui')->whereYear('tanggal', date('Y'))->sum('harga');
        $penghuni_kos = Transaksi::paginate(10);
        $pemasukan_perbulan = DB::table('transaksis')
            ->select(
                DB::raw('MONTHNAME(tanggal) as bulan'),
                DB::raw('SUM(harga) as pemasukan')
            )
            ->groupBy('bulan')
            ->get();;
        $bulan = [];
        $pemasukan = [];
        foreach ($pemasukan_perbulan as $key => $data) {
            $bulan[] = $data->bulan;
            $pemasukan[] = $data->pemasukan;
        }
        return view('pages.admin.dashboardadmin', compact('pemasukan_mingguan', 'pemasukan_bulanan', 'pemasukan_tahunan', 'bulan', 'pemasukan', 'transaksi_last_week', 'penghuni_kos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
