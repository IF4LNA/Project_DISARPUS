<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 20px;
            border-right: 1px solid #ddd;
            overflow-y: auto; /* Membuat sidebar bisa discroll */
        }

        .sidebar ul {
            padding-left: 15px;
        }

        /* Jarak antar item di sidebar */
        .sidebar .nav-item {
            margin-bottom: 10px;
        }

        .sidebar .nav-item a {
            color: rgb(155, 155, 155);
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            position: relative;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .sidebar .nav-item a i {
            margin-right: 10px;
            font-size: 18px;
        }

        /* Hover effect */
        .sidebar .nav-item a:hover {
            color: #007bff;
            background-color: #f0f0f0;
        }

        /* Active state */
        .sidebar .nav-item a.active {
            color: #007bff;
            background-color: #e9ecef;
        }

        /* Collapse submenu */
        .sidebar .collapse {
            display: none;
        }

        .sidebar .collapse.show {
            display: block;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="container">
            <div class="mb-4 text-center">
                <!-- Logo -->
                <img src="{{ asset('images/disarpus.png') }}" alt="Logo" class="img-fluid" style="height: 70px;">
            </div>
            <!-- Search Form -->
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
            </div>
            <!-- Navigation Menu -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('dashboard') }}">
                        <i class="fas fa-home-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" href="#uplmSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="uplmSubmenu">
                        <span><i class="fas fa-chart-bar"></i> UPLM</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="uplmSubmenu">
                        @for ($i = 1; $i <= 7; $i++)
                            <li class="nav-item">
                                <a class="nav-link ms-3" href="{{ route('uplm.show', $i) }}">UPLM {{ $i }}</a>
                            </li>
                        @endfor
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}">
                        <i class="fas fa-user-plus"></i> Buat akun
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('recap') }}">
                        <i class="fas fa-clipboard-list"></i> Rekapitulasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('notifications') }}">
                        <i class="fas fa-bell"></i> Notifikasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('settings') }}">
                        <i class="fas fa-cogs"></i> Pengaturan
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Selamat datang, {{ Auth::user()->username }}!</h1>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
