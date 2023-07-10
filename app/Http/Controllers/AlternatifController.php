<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAl = alternatif::orderby('simbol','desc')->paginate();
        return view('alternatif.index')->with('dataAl',$dataAl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alternatif.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FacadesSession::flash('simbol', $request->simbol);
        FacadesSession::flash('namaAlternatif', $request->namaAlternatif);

        
        $request->validate([
            
            'simbol' => 'required',
            'namaAlternatif' => 'required',
        ], [
            'simbol.required' => 'Simbol harus diisi',
            'namaAlternatif.required' => 'Nama Alternatif harus diisi',
        ]);

        $dataAl = [
            'simbol' => $request->simbol,
            'namaAlternatif' => $request->namaAlternatif,
        ];
        alternatif::create($dataAl);
        return redirect()->to('Alternatif')->with('success', 'Berhasil menambahkan data');
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
        $dataAl = alternatif::where('simbol',$id)->first();
        return view('alternatif.edit')->with('dataAl',$dataAl);
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
            'simbol' => 'required',
            'namaAlternatif' => 'required',
        ], [
            'simbol.required' => 'Simbol harus diisi',
            'namaAlternatif.required' => 'Nama Alternatif harus diisi',
        ]);

        $dataAl = [
            'simbol' => $request->simbol,
            'namaAlternatif' => $request->namaAlternatif,
        ];
        alternatif::where('simbol',$id)->update($dataAl);
        return redirect()->to('Alternatif')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alternatif::where('simbol', $id)->delete();
        return redirect()->to('Alternatif')->with('success','Berhasil melakukan delete data');
    }
}
