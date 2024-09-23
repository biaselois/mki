@extends('template.main')
@section('title', 'Add Peta')
@section('content')

    <div class="container">
        <h2>Tambah Peta</h2>
        
        <!-- Form untuk menambah data peta -->
        <form action="{{ route('peta.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Input Nama Desa -->
            <div class="form-group">
                <label for="nama_desa">Nama Desa:</label>
                <input type="text" name="nama_desa" id="nama_desa" class="form-control" placeholder="Masukkan nama desa" required>
            </div>

            <!-- Input Nama Kecamatan -->
            <div class="form-group">
                <label for="nama_kecamatan">Nama Kecamatan:</label>
                <input type="text" name="nama_kecamatan" id="nama_kecamatan" class="form-control" placeholder="Masukkan nama kecamatan" required>
            </div>

            <!-- Input Koordinat -->
            <div class="form-group">
                <label for="koordinat">Koordinat:</label>
                <input type="text" name="koordinat" id="koordinat" class="form-control" placeholder="Masukkan koordinat" required>
            </div>

            <!-- Input File Peta -->
            <div class="form-group">
                <label for="file_peta">File Peta :</label>
                <input type="file" name="file_peta" id="file_peta" class="form-control" accept=".geojson" required>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary mt-3">Simpan Peta</button>
        </form>
    </div>

@endsection
