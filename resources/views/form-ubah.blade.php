@extends('layouts.main')
@section('title', 'Form Edit Alumni')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Edit Data Alumni</h5>
                    </div>
                    <div class="card-body">
                        <form action="/update/{{ $a->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="nim">NIM</label>
                                    <input type="text" id="nim" name="nim" class="form-control" value="{{ $a->nim }}"
                                        required readonly>
                                </div>
                                <div class="col">
                                    <label for="namalengkap">Nama Lengkap</label>
                                    <input type="text" id="namalengkap" name="namalengkap" class="form-control"
                                        value="{{ $a->namalengkap }}" required>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="angkatan">Angkatan</label>
                                    <select id="angkatan" name="angkatan" class="form-control" required>
                                        <option value="">--Pilih Angkatan--</option>
                                        @for ($year = date('Y'); $year >= 2000; $year--)
                                            <option value="{{ $year }}" {{ $a->angkatan == $year ? 'selected' : '' }}>{{ $year }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ $a->email }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="no_telp">No. Telepon</label>
                                    <input type="text" id="no_telp" name="no_telp" class="form-control"
                                        value="{{ $a->no_telp }}" required>
                                </div>
                                <div class="col">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" id="alamat" name="alamat" class="form-control"
                                        value="{{ $a->alamat }}" required>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="company">Perusahaan</label>
                                    <input type="text" id="company" name="company" class="form-control"
                                        value="{{ $a->company }}">
                                </div>
                                <div class="col">
                                    <label for="job_title">Jabatan</label>
                                    <input type="text" id="job_title" name="job_title" class="form-control"
                                        value="{{ $a->job_title }}">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="text" id="linkedin" name="linkedin" class="form-control"
                                        value="{{ $a->linkedin ?? '' }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Poster</label>
                                <input type="file" accept="image/*" name="foto" class="form-control-file">
                            </div>
                            <div class="form-group">
                                @if($a->foto)
                                    <img src="{{ asset('storage/' . $a->foto) }}" alt="Foto" class="img-fluid rounded shadow border border-3 border-primary" style="max-height: 280px; transition: transform .2s;">
                                @else
                                    <img src="https://media.istockphoto.com/id/1216251206/vector/no-image-available-icon.jpg?s=170667a&w=0&k=20&c=N-XIIeLlhUpm2ZO2uGls-pcVsZ2FTwTxZepwZe4DuE4="
                                        alt="No Image" width="80">
                                @endif
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success px-4">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary px-4 ml-2">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
