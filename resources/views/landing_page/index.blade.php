<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/font-self.css') }}">
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid position-relative" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('img/menu.webp') }}); background-size:cover; height:100vh;">
        <nav class="navbar sticky-top navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="#">Pe <i class="fa-solid fa-leaf"></i></a>
                <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse ms-5" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Informasi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Daftar</a></li>
                        <li><a class="dropdown-item" href="#">Hubungi Kami</a></li>
                        <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <div class="h3 text-white spacegrotesk-2 position-absolute" style="top: 35%; left:10%">
            SELAMAT DATANG DI <span class="bg-success p-2 rounded-3">PeLam  <i class="fa-solid fa-leaf"></i></span>
            <div class="fs-5 p-3 mt-3 text-white">
                <p>PeLam <i class="fa-solid fa-leaf"></i> atau Peduli Alam adalah suatu gerakan yang diprakarsai oleh sekumpulan anak muda,</p>
                <p>berfokus dalam membantu membersihkan alam dan membuat bumi menjadi lebih hijau.</p>
                <p>Buatlah lingkungan menjadi lebih sehat dan asri</p>
                <p>Mari bergabung dengan kami, <em class="text-warning">Let’s nurture the nature, so that we can have a better future.</em></p>
            </div>
            <p class="h4">Ayo bergabung bersama kami dengan cara <a href="#">Daftar Disini</a></p>
        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
