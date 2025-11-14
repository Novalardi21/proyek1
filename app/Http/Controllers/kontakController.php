<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class kontakController extends Controller
{
   public function index() {
    return view('layouts.kontak', [
        'title' => 'Halaman Kontak',
        'slug' => 'kontak'
    ]);
}
    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_handphone' => 'required|numeric|digits_between:10,13',
            'pesan' => 'required|string',
        ]);


        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
