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
        $interview = Interview::all();
        return view('interview.index',compact('interview'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelamar= Pelamar::all();
        return view('interview.index',compact('pelamar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Interview::create($request->all());
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
        //
    }

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
