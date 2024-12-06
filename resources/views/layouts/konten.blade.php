@extends('layouts.index') 

@section('konten')
<div class="row">
    <!-- Bagian Teks di Kiri (Tentang) -->
    <div class="col-md-6">
        <h1 class="judul-konten">Dinas Arsip dan Perpustakaan Kota Bandung</h1>
        <p class="paragraf">
            Bergabunglah dalam upaya peningkatan literasi masyarakat untuk masa depan Kota Bandung yang lebih cerdas dan berkelanjutan.
        </p>

        <form action="{{ route('login') }}" method="GET">
        <button class="btn btn-primary btn-size" style="margin-top: 20px">Login</button>
        </form>
        
    </div>
    
    <!-- Bagian Gambar di Kanan -->
    <div class="col-md-6">
        <img src="{{ asset('images/img1.png') }}" class="img-fluid" alt="gambar utama" style="width: 500px">
    </div>
</div>

<hr> <!-- Pembatas antara bagian Tentang dan Bantuan -->

<!-- Bagian Tentang -->
<div class="row">
    <div class="col-md-12">
        <h2>Tentang Indeks Pembangunan Literasi Masyarakat (IPLM)</h2>
        <p>
            Indeks Pembangunan Literasi Masyarakat (IPLM) merupakan alat ukur yang digunakan untuk menilai perkembangan literasi di Kota Bandung. Survei ini bertujuan untuk mengumpulkan data yang mendalam tentang akses, kualitas, dan sebaran literasi masyarakat di berbagai aspek, mulai dari literasi dasar hingga literasi digital.
        </p>
        <p>
            Melalui data ini, kami berupaya merancang kebijakan yang lebih efektif dalam meningkatkan kualitas literasi di Kota Bandung. Dengan informasi yang terkumpul, kami dapat mengidentifikasi tantangan dan peluang yang ada, serta menciptakan program-program yang relevan dan tepat sasaran.
        </p>
        <h3>Metodologi</h3>
        <p>
            Untuk mendapatkan data yang valid dan dapat diandalkan, kami menggunakan metodologi survei yang melibatkan berbagai metode pengumpulan data, termasuk wawancara, kuesioner online, dan pengamatan langsung. Responden dipilih secara acak dari berbagai lapisan masyarakat di Kota Bandung, mencakup semua kelompok usia dan latar belakang sosial ekonomi.
        </p>
        <p>
            Data yang dikumpulkan akan dianalisis secara menyeluruh untuk memberikan gambaran yang jelas mengenai tingkat literasi di berbagai aspek. Hasil analisis ini akan digunakan untuk merumuskan kebijakan yang mendukung peningkatan literasi, dengan fokus pada peningkatan akses terhadap sumber daya pendidikan, pelatihan keterampilan digital, dan peningkatan kesadaran masyarakat akan pentingnya literasi.
        </p>
    </div>
</div>

<hr> <!-- Pembatas antara bagian Tentang dan Bantuan -->

<!-- Bagian Bantuan -->
<div class="row">
    <div class="col-md-12">
        <h2>Bantuan</h2>

        <!-- Panduan Pengisian -->
        <h3>Panduan Pengisian</h3>
        <p>
            Untuk memastikan bahwa Anda mengisi kuesioner dengan benar, kami menyediakan panduan langkah demi langkah. Anda dapat memulai dengan memilih kategori pertanyaan yang relevan dengan situasi Anda, dan memastikan semua data yang dimasukkan akurat. Pastikan Anda membaca setiap instruksi dengan teliti sebelum melanjutkan ke bagian berikutnya.
        </p>

        <!-- FAQ -->
        <h3>FAQ (Pertanyaan yang Sering Diajukan)</h3>
        <ul>
            <li><strong>Bagaimana cara mengisi kuesioner?</strong> Anda dapat mengikuti langkah-langkah panduan yang telah disediakan untuk mengisi kuesioner dengan mudah.</li>
            <li><strong>Apa yang harus saya lakukan jika saya tidak bisa mengakses kuesioner?</strong> Pastikan Anda memiliki koneksi internet yang stabil dan menggunakan perangkat yang mendukung pengisian kuesioner online.</li>
            <li><strong>Apa yang terjadi jika saya mengisi data yang salah?</strong> Anda dapat mengedit data yang telah Anda masukkan sebelum mengirimkan kuesioner, pastikan untuk memeriksa kembali semua informasi yang Anda isi.</li>
        </ul>

        <!-- Dukungan Teknis -->
        <h3>Dukungan Teknis</h3>
        <p>
            Apabila Anda mengalami kendala teknis, seperti masalah dalam login atau pengisian kuesioner, silakan hubungi tim dukungan kami melalui formulir kontak atau nomor yang tertera pada halaman ini. Kami siap membantu Anda mengatasi masalah teknis secepat mungkin.
        </p>
        <button class="btn btn-primary">Hubungi Tim Dukungan</button>
    </div>
</div>
@endsection
