@extends('layouts.main_dashboard')
@section('title', $title ?? 'Daftar Admin')

@section('content')
    <div class="container mt-2">
        <div class="admin-header mb-4">
            <h2 class="fw-bold text-white mb-3">Data Pesan</h2>
        </div>


        <div class="card table-card shadow-sm">
            <div class="card-header text-center fw-bold">Daftar Pesan yang masuk</div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-head">
                        <tr>
                            <th>ID</th>
                            <th>Nama Pengirim</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pesan as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nama ?? ($p->nama_pengirim ?? '-') }}</td>
                                <td>{{ $p->email ?? ($p->email ?? '-') }}</td>
                                <td>{{ $p->nohp ?? ($p->telepon ?? '-') }}</td>
                                <td>
                                    {{-- nanti bisa diarahkan ke halaman detail pesan --}}
                                    <a href="{{ route('admin.kontak.detail', $p->id) }}"
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-eye me-1"></i> Detail
                                    </a>
                                    {{-- <a href="{{ route('admin.apotek.detail', $admin->id_apotek) }}"
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-eye me-1"></i> Detail
                                    </a> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    Belum ada pesan yang masuk.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>

    </div>
@endsection
