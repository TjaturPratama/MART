<?php

namespace App\Http\Controllers;

use App\Models\KepalaKeluarga;
use App\Http\Requests\StoreKepalaKeluargaRequest;
use App\Http\Requests\UpdateKepalaKeluargaRequest;
use Illuminate\Http\Request;

class KepalaKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'no_kk' => 'required|string|max:16|unique:penduduks,nik',
            'kepala_keluarga' => 'required|string|max:255',
            'path_kk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',


        ]);

        // Simpan gambar path_kk
        if ($request->hasFile('path_kk')) {
            $kkImage = $request->file('path_kk');
            $kkImageName = time() . '_kk.' . $kkImage->extension();
            $kkImage->move(public_path('img/kk'), $kkImageName);
            $validatedData['path_kk'] = 'img/kk/' . $kkImageName; // Simpan path di database
        }

        KepalaKeluarga::create($validatedData);

        return redirect('/KK')->with('success', 'Data KK berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KepalaKeluarga $kepalaKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KepalaKeluarga $kepalaKeluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    { // Temukan kepala keluarga berdasarkan ID

        $row =  KepalaKeluarga::findOrFail($id);
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'no_kk' => 'required|string|max:255',
            'kepala_keluarga' => 'required|string',
            'path_kk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('path_kk')) {
            $kkImage = $request->file('path_kk');
            $kkImageName = time() . '_kk.' . $kkImage->extension();
            $kkImage->move(public_path('img/kk'), $kkImageName);
            $validatedData['path_kk'] = 'img/kk/' . $kkImageName; // Simpan path di database
        }
        $row->update($validatedData);

        return redirect('/tampilankk/id/' . $id)->with('success', 'Data has been saved.');
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $row =  KepalaKeluarga::findOrFail($id);
        // Validasi data yang diterima dari form


        $row->delete();

        return redirect('/KK')->with('success', 'Data has been deleted successfully!');
    }
}
