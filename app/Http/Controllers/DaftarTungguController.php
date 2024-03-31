<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DaftarTungguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today(); // Mendapatkan tanggal hari ini

        $daftarPendaftaran = Pendaftaran::with('pasien')
            ->where('status', 'terdaftar')
            ->whereDate('created_at', $today) // Hanya data yang dibuat hari ini
            ->get();

        return view('page.daftar-tunggu', compact('daftarPendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
