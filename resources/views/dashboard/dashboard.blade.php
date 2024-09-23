@extends('template.main')
@section('title', 'Dashboard')
@section('content')

   
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">@yield('title')</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>

    <style>
        /* Pastikan ukuran peta diatur dengan benar */
        #map { 
            height: 600px; 
            width: 100%; /* Menyesuaikan lebar dengan kontainer */
        }

        /* Tambahan styling dashboard lainnya */
        .dashboard-container {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Konten Dashboard Lainnya -->

        <!-- Peta Leaflet -->
        <div id="map"></div>
    </div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
            <script>
                // Inisialisasi peta Leaflet
                var map = L.map('map').setView([-8.2126, 114.3676], 13);
            
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);
            
                // Menambahkan marker ke peta
                var marker = L.marker([-8.2126, 114.3676]).addTo(map)
                    .bindPopup('Pusat Kabupaten Banyuwangi.<br> Easily customizable.')
                    .openPopup();
            </script>
</body>
</html>
        <!-- /.content -->
    </div>

@endsection
