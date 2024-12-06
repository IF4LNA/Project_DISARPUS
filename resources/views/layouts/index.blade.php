<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Halaman awal')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            margin-top: 130px; 
        }
        .navbar {
            /* position: st icky;
            top: 0;
            z-index: 1000; */
            border-bottom: 1px solid #ccc;
            background-color: white;
        }

        .navbar-brand img {
            height: 70px;
            width: auto;
        }

        .navbar-nav .nav-link {
            color: black;
        }

        .navbar-nav .nav-link:hover {
            color: blue !important;
        }

        .navbar .container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .judul-konten {
            padding-top: 80px;
        }

        .paragraf {
            padding-top: 30px
        }

        .btn-size {
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 18px;
            width: 30%;
            border-radius: 10px;
        }

        .btn-utama {
            border: 2px solid blue;
            /* Menambahkan border biru */
            background-color: transparent;
            /* Menghilangkan warna latar belakang */
            color: blue;
            /* Menambahkan warna teks biru */
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s ease;
            /* Efek transisi saat hover */
        }

        .btn-utama:hover {
            background-color: blue;
            /* Mengubah latar belakang menjadi biru saat hover */
            color: white;
            /* Mengubah warna teks menjadi putih */
        }
        
    </style>
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/disarpus.png') }}" style="margin-left: 10px" alt="Logo">
            </a>

            {{-- toogle button mobile --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bantuan') }}">Bantuan</a>
                    </li>
                </ul>
                <form action="{{ route('login') }}" method="get">
                    <button type="submit" class="btn btn-utama ms-3" style="margin-right: 50px">Login</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- konten --}}
    <div class="container mt-4">
        @yield('konten')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container text-center">
            <p>&copy; 2024 Dinas Arsip dan Perpustakaan Kota Bandung. Semua hak cipta dilindungi.</p>
            <p>Hubungi kami: <a href="mailto:info@disarpusbandung.go.id"
                    class="text-white">info@disarpusbandung.go.id</a></p>
            <p>
                <a href="#" class="text-white">Kebijakan Privasi</a> |
                <a href="#" class="text-white">Syarat dan Ketentuan</a>
            </p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
