<?php

namespace App\Http\Controllers;

use App\Models\Sapi;
use Illuminate\Http\Request;

class SapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /* FUNGSI INI AKAN MENGEMBALIKAN (ALL) LIST SAPI */

        return Sapi::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* FUNSGI INI MEMBUAT INSTANCE SAPI */

        // Formatted Error Message
        // $request->validate([
        //     'nama_sapi' => 'required',
        //     'foto_sapi' => 'required',
        //     'no_eartag' => 'required',
        //     'jenis_sapi' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'berat_badan' => 'required',
        //     'tinggi_pundak' => 'required',
        //     'lebar_dada' => 'required',
        //     'panjang_badan' => 'required',
        //     'status_kesehatan' => 'required'
        // ]);

        // Actual Function
        return Sapi::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* FUNGSI INI AKAN MENCARI SAPI BERDASARKAN ID */

        return Sapi::find($id);
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
        /* FUNGSI UNTUK MENGUPDATE DATA SAPI */

        $sapi = Sapi::find($id);
        $sapi->update($request->all());
        return $sapi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* FUNGSI MENGHAPUS DATA SAPI DARI DATABASE */

        return Sapi::destroy($id);
    }

    /**
     * Search Sapi by nama_sapi
     *
     * @param  str  $nama_sapi
     * @return \Illuminate\Http\Response
     */
    public function search($nama_sapi)
    {
        /* FUNGSI MENGHAPUS DATA SAPI DARI DATABASE */

        return Sapi::where('nama_sapi', 'like', '%'.$nama_sapi.'%')->get();
    }
}
