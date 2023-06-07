<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelamar= Pelamar::with('jabatans')->get();
        $pelamar = Pelamar::all();
        return view('pelamar.index',compact('pelamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('form.create',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        // Jabatan::all();

        //WORKS
        // Pelamar::create($request->all());
        // return request();

        //return redirect()->route('pelamar.index');
        // //$pelamar->jabatan = $request->jabatan;
        // // $pelamar = New Pelamar;
        // // $pelamar->$request->nama_lengkap;
        // // $pelamar->save();
        // // return redirect()->route('pelamar.index');

        $request->validate([
            'nama_lengkap' => 'required|min:1',
            'id_jabatan' => 'required',
        ],[
            'jabatan.required' => 'jabatan field is required'
        ]);

        // $pelamar =new Pelamar;
        // $pelamar->nama_lengkap = $request->nama_lengkap;
        // $pelamar->id_jabatan = $request->id_jabatan;
        // $pelamar->tempat_lahir = $request->tempat_lahir;
        // $pelamar->tanggal_lahir = $request->tanggal_lahir;
        // $pelamar->umur = $request->umur;
        // $pelamar->jenis_kelamin = $request->jenis_kelamin;
        // $pelamar->alamat_rumah = $request->alamat_rumah;
        // $pelamar->pendidikan_terakhir = $request->pendidikan_terakhir;
        // $pelamar->status = $request->status;
        // $pelamar->nomor_ktp = $request->nomor_ktp;
        // $pelamar->email = $request->email;
        // $pelamar->no_telp = $request->no_telp;
        // $pelamar->no_kk = $request->no_kk;
        // $pelamar->npwp = $request->npwp;
        // $pelamar->sertifikat_migas = $request->sertifikat_migas;
        // $pelamar->masa_berlaku_sertifikat = $request->masa_berlaku_sertifikat;
        // $pelamar->sim = $request->sim;
        // $pelamar->pengalaman_kerja = $request->pengalaman_kerja;
        // $pelamar->pengalaman_jabatan = $request->pengalaman_jabatan;
        // $pelamar->masa_jabatan = $request->masa_jabatan;
        // $pelamar->cv = $request->umur;
        // $pelamar->save();
        // return request();
        // //return redirect('pelamar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
       // return view('jabatan.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelamar $pelamar)
    {
        // Jabatan::find($jabatan);
        // $pelamar->jabatan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelamar $pelamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelamar $pelamar)
    {
        //
    }
}
