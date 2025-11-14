@extends('layouts.main')

@section('title', $title ?? 'Halaman Kontak | MediFinder')

@section('hero')
    <div class="hero-content container">
        <p class="muted-hashtag">#ApotekTapiOnline</p>
        <h1 class="hero-title">Platfrom<br>Apptek<br>Online</h1>
        <a href="{{ route('home') }}" style="color: #FFD700; text-decoration: none; font-weight: bold;">
  ← Kembali ke Beranda
</a>

    </div>
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Kontak Kami </h1>

    <div class="card mb-4 p-4 shadow-sm">
    <h4>Informasi Apotek</h4>
    <p><strong>Nama Apotek:</strong> Apotek Sehat Sentosa</p>
    <p><strong>Alamat:</strong> Jl. Raya Sindangkerta No. 12, Bandung Barat</p>
    <p><strong>No. Telepon / WhatsApp:</strong> 0812-3456-7890</p>
    <p><strong>Email:</strong> apoteksehat@gmail.com</p>
    <p><strong>Jam Buka:</strong> Senin - Sabtu, 08.00 - 20.00 WIB</p>
  </div>
  
        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 6px; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

    
        <form action="{{ route('kontak.kirim') }}" method="POST" style="max-width: 600px;">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="nama" style="font-weight:bold;">Nama :</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                @error('nama')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email" style="font-weight:bold;">Email :</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                @error('email')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="no_handphone" style="font-weight:bold;">No Handphone :</label>
                <input type="text" id="no_handphone" name="no_handphone" value="{{ old('no_handphone') }}" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                @error('no_handphone')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="pesan" style="font-weight:bold;">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="5" required
                          style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">{{ old('pesan') }}</textarea>
                @error('pesan')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit"
                    style="background-color:#28a745; color:white; border:none; padding:12px 20px; border-radius:6px; cursor:pointer;">
                Kirim Pesan
            </button>
        </form>
    </div>
@endsection
