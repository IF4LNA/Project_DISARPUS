<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


      <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="{{ asset('images/disarpus.png') }}" alt="logo Disarpus" width="50px"> Disarpus Kota Bandung
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Isi Kuesioner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notifications</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Container -->
        <div class="container mt-5">
            <!-- Welcome Message -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">Welcome, {{ Auth::user()->username }}!</h4>
                        <p class="lead">Ini adalah halaman user. Di sini Anda dapat mengakses panduan untuk mengisi kuesioner.</p>
                    </div>
                </div>
            </div>

            <!-- Panduan Mengisi Kuesioner -->
            {{-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Panduan Mengisi Kuesioner</h5>
                            <p class="card-text">Berikut adalah langkah-langkah untuk mengisi kuesioner dengan benar:</p>
                            <ol>
                                <li><strong>Langkah 1:</strong> Masukkan informasi pribadi Anda dengan lengkap pada kolom yang tersedia.</li>
                                <li><strong>Langkah 2:</strong> Pilih jawaban yang paling sesuai dengan keadaan Anda untuk setiap pertanyaan.</li>
                                <li><strong>Langkah 3:</strong> Setelah selesai, pastikan Anda memeriksa kembali jawaban Anda sebelum mengirimkan kuesioner.</li>
                                <li><strong>Langkah 4:</strong> Klik tombol 'Kirim' untuk mengirimkan kuesioner Anda.</li>
                            </ol>
                            <a href="#" class="btn btn-primary">Mulai Mengisi Kuesioner</a>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Tips -->
            {{-- <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tips Mengisi Kuesioner</h5>
                            <ul>
                                <li>Pastikan Anda membaca setiap pertanyaan dengan seksama sebelum memilih jawaban.</li>
                                <li>Jika Anda merasa tidak yakin, pilih opsi yang paling mendekati jawaban Anda.</li>
                                <li>Jangan terburu-buru dalam mengisi, luangkan waktu untuk memastikan setiap jawaban Anda akurat.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>

    <!-- Bootstrap JS & Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
