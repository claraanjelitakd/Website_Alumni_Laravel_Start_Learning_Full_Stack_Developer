@extends('layouts.main')
@section('title', 'Form Add Alumni')

@section('content')
<div class="container-fluid pt-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Data Alumni</h4>
                </div>
                <div class="card-body">
                    <form action="/savealumni" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h5 class="mb-3">Data Pribadi</h5>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM" required>
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">Nama Lengkap</label>
                            <input type="text" name="namalengkap" id="namalengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <select name="angkatan" id="angkatan" class="form-control" required>
                                <option value="">--Pilih Angkatan--</option>
                                @for ($year = date('Y'); $year >= 2000; $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>

                        <h5 class="mt-4 mb-3">Kontak</h5>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No. Telepon</label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan No. Telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                        </div>

                        <h5 class="mt-4 mb-3">Pekerjaan</h5>
                        <div class="form-group">
                            <label for="company">Perusahaan</label>
                            <input type="text" name="company" id="company" class="form-control" placeholder="Nama Perusahaan">
                        </div>
                        <div class="form-group">
                            <label for="job_title">Jabatan</label>
                            <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="url" name="linkedin" id="linkedin" class="form-control" placeholder="URL LinkedIn">
                        </div>

                        <h5 class="mt-4 mb-3">Foto</h5>
                        <div class="form-group">
                            <input type="file" accept="image/*" name="foto" class="form-control-file" onchange="previewImage(event)">
                        </div>
                        <div class="form-group">
                            <img id="preview" src="#" alt="Preview Foto" style="max-height: 200px; display: none;">
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Simpan Data Alumni</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function previewImage(event) {
    const preview = document.getElementById('preview');
    preview.src = URL.createObjectURL(event.target.files[0]);
    preview.style.display = 'block';
}
</script>
@endsection
