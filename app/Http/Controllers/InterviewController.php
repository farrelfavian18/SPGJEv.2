<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use App\Models\Jabatan;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //$pelamar = Pelamar::all();
        //$pelamar= Pelamar::with('jabatans')->get();
        $interview = Interview::with('pelamars')->get();
        $interview = Interview::all();
        return view('interview.index',compact('interview'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelamar = Pelamar::all();
        return view('interview.index',compact('interviews'));
       // $interview = New Interview();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Interview::create($request->all());
        $interview = New Interview();
        $interview->id_pelamar = $request->id_pelamar;
        $interview->id_jabatan = $request->id_jabatan;
        $interview->jadwal_interview = $request->jadwal_interview;
        $interview->keterangan = $request->keterangan;
        return request();
    }

    /**
     * Display the specified resource.
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interview $interview)
    {
        // Interview::find($interview);
        // $interview->update($request->all());
        // return redirect()->route('interview');
        // ('success','Data berhasil di Edit');
    }

    // public function destroy(Jabatan $jabatan)
    // {
    //     // Jabatan::find($jabatan);
    //     // $jabatan->delete();
    //     // return redirect()->route('jabatan')->with('success','Data berhasil di Hapus');
    // }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interview $interview)
    {
        //
    }
}
