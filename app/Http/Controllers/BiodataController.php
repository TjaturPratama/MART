<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk; // Asumsikan model untuk tabel penduduk

class BiodataController extends Controller
{
    public function index()
    {
        // Menampilkan halaman biodata tanpa pencarian
        return view('biodata', ['biodata' => Penduduk::all(),]);
    }

    public function search(Request $request)
    {
        // Tangkap query pencarian
        $query = $request->input('query');

        // Lakukan pencarian di tabel penduduk (misalnya berdasarkan nama atau NIK)
        $results = Penduduk::where('nama', 'LIKE', "%{$query}%")
            ->orWhere('nik', 'LIKE', "%{$query}%")
            ->get();

        // Kirim hasil pencarian ke view
        return view('biodata', compact('results'));
    }
}
