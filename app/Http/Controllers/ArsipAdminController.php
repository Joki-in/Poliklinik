<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class ArsipAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftarPendaftaran = Pendaftaran::with([
            'pasien' => function ($query) {
                $query->orderBy('no_rm');
            }
        ])
            ->where('status', 'selesai')
            ->get();

        return view('page.arsip-admin', compact('daftarPendaftaran'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
