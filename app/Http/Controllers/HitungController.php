<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HitungController extends Controller
{
    public function show()
    {
        $data = kriteria::orderBy('id_kriteria', 'asc')->get();
        return view('kriteria')->with('data', $data);
    }

    public function hitung(Request $request){

        $kriteria = kriteria::sum('kepentingan');
        $bobotKriteriaC1 = DB::table('kriteria')->where('namaKriteria' ,'C1 Kadar Air')->value('kepentingan');
        $bobotKriteriaC2 = DB::table('kriteria')->where('namaKriteria' ,'C2 Hasil Produksi')->value('kepentingan');
        $bobotKriteriaC3 = DB::table('kriteria')->where('namaKriteria' ,'C3 Ketahanan Hama')->value('kepentingan');
        $bobotKriteriaC4 = DB::table('kriteria')->where('namaKriteria' ,'C4 Ukuran Buah')->value('kepentingan');
        $bobotKriteriaC5 = DB::table('kriteria')->where('namaKriteria' ,'C5 Tanggal Tanam')->value('kepentingan');
        $bobotKriteriaC6 = DB::table('kriteria')->where('namaKriteria' ,'C6 Tanggal Panen')->value('kepentingan');
 
        
        $bobot1 = $bobotKriteriaC1/$kriteria;
        $bobot2 = $bobotKriteriaC2/$kriteria;
        $bobot3 = $bobotKriteriaC3/$kriteria;
        $bobot4 = $bobotKriteriaC4/$kriteria;
        $bobot5 = $bobotKriteriaC5/$kriteria;
        $bobot6 = $bobotKriteriaC6/$kriteria;

        // $bobot1 = 4/$kriteria;
        // $bobot2 = 5/$kriteria;
        // $bobot3 = 4/$kriteria;
        // $bobot4 = 4/$kriteria;
        // $bobot5 = 3/$kriteria;
        // $bobot6 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];
        $widget6 = [
            'kriterias' => $bobot6,
        ];


        $produk = alternatif::get();
        $data = alternatif::orderby('namaAlternatif', 'asc')->get();

        $minC1 = alternatif::min('kadar_air');
        $maxC1 = alternatif::max('kadar_air');
        $minC2 = alternatif::min('hasil_produksi');
        $maxC2 = alternatif::max('hasil_produksi');
        $minC3 = alternatif::min('ketahanan_hama');
        $maxC3 = alternatif::max('ketahanan_hama');
        $minC4 = alternatif::min('ukuran_buah');
        $maxC4 = alternatif::max('ukuran_buah');
        $minC5 = alternatif::min('tgl_tanam');
        $maxC5 = alternatif::max('tgl_tanam');
        $minC6 = alternatif::min('tgl_panen');
        $maxC6 = alternatif::max('tgl_panen');

        $C1min =[
            'alternatif' => $minC1,
        ];
        $C1max =[
            'alternatif' => $maxC1,
        ];
        $C2min =[
            'alternatif' => $minC2,
        ];
        $C2max =[
            'alternatif' => $maxC2,
        ];
        $C3min =[
            'alternatif' => $minC3,
        ];
        $C3max =[
            'alternatif' => $maxC3,
        ];
        $C4min =[
            'alternatif' => $minC4,
        ];
        $C4max =[
            'alternatif' => $maxC4,
        ];
        $C5min =[
            'alternatif' => $minC5,
        ];
        $C5max =[
            'alternatif' => $maxC5,
        ];
        $C6min =[
            'alternatif' => $minC6,
        ];
        $C6max =[
            'alternatif' => $maxC6,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('hitung.index', ['title' => "Perhitungan"],compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max','C6min','C6max'));
    }


    public function hitung_page(){

        $data_bobot = kriteria::orderBy('id', 'asc')->get();

        $kriteria = kriteria::sum('kepentingan');
        $bobotKriteriaC1 = DB::table('kriteria')->where('namaKriteria' ,'C1 Kadar Air')->value('kepentingan');
        $bobotKriteriaC2 = DB::table('kriteria')->where('namaKriteria' ,'C2 Hasil Produksi')->value('kepentingan');
        $bobotKriteriaC3 = DB::table('kriteria')->where('namaKriteria' ,'C3 Ketahanan Hama')->value('kepentingan');
        $bobotKriteriaC4 = DB::table('kriteria')->where('namaKriteria' ,'C4 Ukuran Buah')->value('kepentingan');
        $bobotKriteriaC5 = DB::table('kriteria')->where('namaKriteria' ,'C5 Tanggal Tanam')->value('kepentingan');
        $bobotKriteriaC6 = DB::table('kriteria')->where('namaKriteria' ,'C6 Tanggal Panen')->value('kepentingan');
 
        
        $bobot1 = $bobotKriteriaC1/$kriteria;
        $bobot2 = $bobotKriteriaC2/$kriteria;
        $bobot3 = $bobotKriteriaC3/$kriteria;
        $bobot4 = $bobotKriteriaC4/$kriteria;
        $bobot5 = $bobotKriteriaC5/$kriteria;
        $bobot6 = $bobotKriteriaC6/$kriteria;

        // $bobot1 = 4/$kriteria;
        // $bobot2 = 5/$kriteria;
        // $bobot3 = 4/$kriteria;
        // $bobot4 = 4/$kriteria;
        // $bobot5 = 3/$kriteria;
         // $bobot6 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];
        $widget6 = [
            'kriterias' => $bobot6,
        ];


        $produk = alternatif::get();
        $data = alternatif::orderby('namaAlternatif', 'asc')->get();

        $minC1 = alternatif::min('kadar_air');
        $maxC1 = alternatif::max('kadar_air');
        $minC2 = alternatif::min('hasil_produksi');
        $maxC2 = alternatif::max('hasil_produksi');
        $minC3 = alternatif::min('ketahanan_hama');
        $maxC3 = alternatif::max('ketahanan_hama');
        $minC4 = alternatif::min('ukuran_buah');
        $maxC4 = alternatif::max('ukuran_buah');
        $minC5 = alternatif::min('tgl_tanam');
        $maxC5 = alternatif::max('tgl_tanam');
        $minC6 = alternatif::min('tgl_panen');
        $maxC6 = alternatif::max('tgl_panen');

        $C1min =[
            'fitness' => $minC1,
        ];
        $C1max =[
            'fitness' => $maxC1,
        ];
        $C2min =[
            'fitness' => $minC2,
        ];
        $C2max =[
            'fitness' => $maxC2,
        ];
        $C3min =[
            'fitness' => $minC3,
        ];
        $C3max =[
            'fitness' => $maxC3,
        ];
        $C4min =[
            'fitness' => $minC4,
        ];
        $C4max =[
            'fitness' => $maxC4,
        ];
        $C5min =[
            'fitness' => $minC5,
        ];
        $C5max =[
            'fitness' => $maxC5,
        ];
        $C6min =[
            'alternatif' => $minC6,
        ];
        $C6max =[
            'alternatif' => $maxC6,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('spk.index', ['title' => "Recommendation"],compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'))->with('data_bobot', $data_bobot);;
    }
}
