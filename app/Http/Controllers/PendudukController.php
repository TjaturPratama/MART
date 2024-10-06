<?php

namespace App\Http\Controllers;

use App\Models\KepalaKeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nik' => 'required|string|max:16|unique:penduduks,nik',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'agama' => 'required|string',
            'no_kk' => 'required|string|max:16',
            'status' => 'required|string',
            'no_telepon' => 'nullable|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'path_pp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'path_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',


        ]);

        // Simpan gambar path_pp
        if ($request->hasFile('path_pp')) {
            $ppImage = $request->file('path_pp');
            $ppImageName = time() . '_pp.' . $ppImage->extension();
            $ppImage->move(public_path('img/pp'), $ppImageName);
            $validatedData['path_pp'] = 'img/pp/' . $ppImageName; // Simpan path di database
        }

        // Simpan gambar path_ktp
        if ($request->hasFile('path_ktp')) {
            $ktpImage = $request->file('path_ktp');
            $ktpImageName = time() . '_ktp.' . $ktpImage->extension();
            $ktpImage->move(public_path('img/ktp'), $ktpImageName);
            $validatedData['path_ktp'] = 'img/ktp/' . $ktpImageName; // Simpan path di database
        }




        // Simpan data ke database
        Penduduk::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Data penduduk berhasil disimpan.');
    }
    public function searchKK(Request $request)
    {

        $searchTerm = $request->input('search');

        $dataKK = KepalaKeluarga::where('no_kk', 'LIKE', "%{$searchTerm}%")
            ->orWhere('kepala_keluarga', 'LIKE', "%{$searchTerm}%")
            ->distinct()
            ->get();

        return view('KK', compact('dataKK'));
    }

    public function searchBiodata(Request $request)
    {
        $searchTerm = $request->input('search');

        $biodata = Penduduk::where('nama', 'LIKE', "%{$searchTerm}%") // pastikan nama kolom di database adalah 'nama'
            ->orWhere('nik', 'LIKE', "%{$searchTerm}%")
            ->distinct()
            ->get();

        return view('biodata', compact('biodata'));
    }

    public function searchKtp(Request $request)
    {

        $searchTerm = $request->input('search');

        $dataKtp = Penduduk::where('nik', 'LIKE', "%{$searchTerm}%")
            ->orWhere('nama', 'LIKE', "%{$searchTerm}%")
            ->distinct()
            ->get();

        return view('ktp', compact('dataKtp'));
    }
    public function update(Request $request, $id)
    {

        $row =  Penduduk::findOrFail($id);
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nik' => 'required|string|max:16',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'agama' => 'required|string',
            'no_kk' => 'required|string|max:16',
            'status' => 'required|string',
            'no_telepon' => 'nullable|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'path_pp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'path_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',


        ]);

        // Simpan gambar path_pp
        if ($request->hasFile('path_pp')) {
            $ppImage = $request->file('path_pp');
            $ppImageName = time() . '_pp.' . $ppImage->extension();
            $ppImage->move(public_path('img/pp'), $ppImageName);
            $validatedData['path_pp'] = 'img/pp/' . $ppImageName; // Simpan path di database
        }

        // Simpan gambar path_ktp
        if ($request->hasFile('path_ktp')) {
            $ktpImage = $request->file('path_ktp');
            $ktpImageName = time() . '_ktp.' . $ktpImage->extension();
            $ktpImage->move(public_path('img/ktp'), $ktpImageName);
            $validatedData['path_ktp'] = 'img/ktp/' . $ktpImageName; // Simpan path di database
        }



        $row->update($validatedData);

        return redirect('/datadiri/id=' . $id)->with('success', 'Data has been saved.');
    }
    public function destroy(Request $request, $id)
    {

        $row =  Penduduk::findOrFail($id);
        // Validasi data yang diterima dari form


        $row->delete();

        return redirect('/biodata')->with('success', 'Data has been deleted successfully!');
    }
}
