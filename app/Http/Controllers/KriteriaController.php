<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKr = kriteria::orderby('namaKriteria','desc')->paginate();
        return view('kriteria.index')->with('dataKr', $dataKr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('namaKriteria', $request->namaKriteria);
        Session::flash('atribut', $request->atribut);
        Session::flash('kepentingan', $request->kepentingan);

        
        $request->validate([
            
            'namaKriteria' => 'required',
            'atribut' => 'required',
            'kepentingan' => 'required',
        ], [
            'namaKriteria.required' => 'Nama Kriteria harus diisi',
            'atribut.required' => 'Atribut harus dipilih',
            'kepentingan.required' => 'Kepentingan harus dibawah nilai 1 dari semua jumlah nilai total kriteria '
        ]);

        $datKr = [
            'namaKriteria' => $request->namaKriteria,
            'atribut' => $request->atribut,
            'kepentingan' => $request->kepentingan,
        ];
        kriteria::create($datKr);
        return redirect()->to('Kriteria')->with('success', 'Berhasil menambahkan data');
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
        $dataKr = kriteria::where('namaKriteria',$id)->first();
        return view('kriteria.edit')->with('dataKr',$dataKr);
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
        $request->validate([
            
            'namaKriteria' => 'required',
            'atribut' => 'required',
            'kepentingan' => 'required',
        ], [
            'namaKriteria.required' => 'Nama Kriteria harus diisi',
            'atribut.required' => 'Atribut harus dipilih',
            'kepentingan.required' => 'Kepentingan harus diisi dan dibawah nilai 1 dari semua jumlah nilai total kriteria '
        ]);

        $datKr = [
            'namaKriteria' => $request->namaKriteria,
            'atribut' => $request->atribut,
            'kepentingan' => $request->kepentingan,
        ];
        kriteria::create($datKr);
        return redirect()->to('Kriteria')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kriteria::where('namaKriteria',$id)->delete();
        return redirect()->to('Kriteria')->with('success','Berhasil melakukan delete data');
    }
}
