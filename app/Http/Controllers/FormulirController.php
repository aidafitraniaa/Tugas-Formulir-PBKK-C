<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Import Validator

class FormulirController extends Controller
{
    public function createForm()
    {
        return view('formulir');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'nama' => 'required|alpha:ascii',
            'email' => 'required|email:rfc',
            'password' => 'required|min:8', // Minimal 8 karakter
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048', // Maksimal 2 MB
            'gaji' => 'required|numeric|between:2.50,99.99',
        ]);

        // Simpan data formulir ke database atau tempat penyimpanan yang Anda butuhkan

        return redirect()->route('hasil')->with('success', 'Formulir berhasil dikirim');
    }


}
