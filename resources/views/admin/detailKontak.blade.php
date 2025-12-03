@extends('layouts.main_dashboard')
@section('title', $title ?? 'Detail Apotek')

@section('content')
    <div class="container mt-2">
        <div class="admin-header mb-4">
            <h2 class="fw-bold text-white mb-3">Detail Pesan</h2>
        </div>

        <div class="card table-card shadow-sm">
            <div class="card-body p-4">

                <div class="mb-3">
                    <label class="fw-bold">Nama Pengirim</label>
                    <p class="mb-0">{{ $kontak->nama ?? '-' }}</p>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Email</label>
                    <p class="mb-0">{{ $kontak->email ?? '-' }}</p>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Telepon</label>
                    <p class="mb-0">{{ $kontak->nohp ?? '-' }}</p>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Pesan</label>
                    <p class="mb-0">{{ $kontak->pesan ?? '-' }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
