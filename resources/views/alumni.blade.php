@extends('layouts.main')
@section('title', 'Alumni')
@if(session('alert'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ trim(session('alert')) }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@section('content')
    <div class="container py-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-lg border-0 mb-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0"><i class="bi bi-people-fill me-2"></i>Data Alumni</h4>
                <a href="/formcreate" class="btn btn-light fw-bold shadow-sm">
                    <i class="bi bi-folder-plus"></i> Tambah Alumni
                </a>
            </div>
            <div class="card-body bg-light">
                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="example">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Foto</th>
                                <th>Company</th>
                                <th>Job Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($al as $idx => $a)
                                <tr>
                                    <td class="fw-bold">{{ $idx + 1 }}</td>
                                    <td>{{ $a->namalengkap }}</td>
                                    <td>
                                        @if($a->foto)
                                            <img src="{{ asset("storage/{$a->foto}") }}" alt="Foto"
                                                class="rounded-circle border border-2 border-primary shadow-sm"
                                                style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <span class="badge bg-secondary">Tidak ada foto</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-primary">
                                            <i class="bi bi-building"></i> {{ $a->company }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success fs-6">{{ $a->job_title }}</span>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="form-ubah/{{ $a->id }}" class="btn btn-sm btn-warning me-1" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="/deleteAlumni/{{ $a->id }}" class="btn btn-sm btn-danger me-1" title="Hapus"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                        <a href="/alumni/detail/{{ $a->id }}" class="btn btn-sm btn-info text-white"
                                            title="Lihat Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            @if(count($al) == 0)
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">
                                        <i class="bi bi-emoji-frown fs-1"></i><br>
                                        Data alumni belum tersedia.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

