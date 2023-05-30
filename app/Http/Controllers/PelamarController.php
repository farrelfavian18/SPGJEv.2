<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelamar = Pelamar::all();
        return view('pelamar.index',compact('pelamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelamar::create($request->all());
        return redirect()->route('pelamar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        Pelamar::find($pelamar);
        // return view('jabatan.edit',compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelamar $pelamar)
    {
        //
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
        Pelamar::find($pelamar);
        $pelamar->delete();
        return redirect()->route('pelamar')->with('success','Data berhasil di Hapus');
    }
}
