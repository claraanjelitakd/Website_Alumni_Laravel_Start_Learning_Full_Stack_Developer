@extends('layouts.main')

@section('title', 'Detail Alumni')

@section('content')
    <div class="container py-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-gradient-primary text-white d-flex align-items-center"
                style="background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);">
                <i class="bi bi-person-circle mr-2" style="font-size: 2rem;"></i>
                <h4 class="mb-0 ml-2">Detail Alumni</h4>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <img src="{{ asset('storage/' . $a->foto) }}" alt="Foto"
                            class="img-fluid rounded shadow border border-3 border-primary"
                            style="max-height: 280px; transition: transform .2s;">
                        <p class="mt-3 mb-0"><strong>Foto Alumni</strong></p>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th class="text-muted w-25">Nama Lengkap</th>
                                <td class="font-weight-bold">{{ $a->namalengkap }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Company</th>
                                <td>{{ $a->company }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Job Title</th>
                                <td>{{ $a->job_title }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Angkatan</th>
                                <td>
                                    <span class="badge badge-pill badge-primary px-3 py-2"
                                        style="font-size: 1rem;">{{ $a->angkatan }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-muted">Email</th>
                                <td><a href="mailto:{{ $a->email }}" class="text-decoration-none">{{ $a->email }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">No. Telp</th>
                                <td>{{ $a->no_telp }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">LinkedIn</th>
                                <td>
                                    <a href="{{ $a->linkedin }}" target="_blank" class="text-decoration-none">
                                        <i class="bi bi-linkedin text-primary" style="font-size: 1.2rem;"></i>
                                        <span class="ml-1">Profil LinkedIn</span>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <th class="text-muted">Alamat</th>
                                <td>{{ $a->alamat }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ url('/alumni') }}" class="btn btn-outline-primary px-4 py-2">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <style>
            img:hover {
                transform: scale(1.05);
                box-shadow: 0 0 15px #007bff55;
            }
        </style>
    @endpush
@endsection
