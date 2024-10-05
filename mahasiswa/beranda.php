<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Beranda</title>
    <style>
        body {
            font-family: Times new roman;
            background-image:url('picture/bg_main.jpg');
            background-size:cover;
            background-position:cover;
            background-repeat:no-repeat;
        }
        .offcanvas-header {
            justify-content:center;
        }
        .navbar{
            background-color:maroon;
        }
        .container-centering {
            justify-content:center;
            align-items:center;
            text-align:center;   
            padding-right:40px;
            padding-left:40px;
        }
        .container-centering h2 {
            background-color:white;
            border:2px solid gray;
            padding:10px;
            border-radius:6px;
            box-shadow:3px 3px 10px rgba (0,0,0,0,0.2);
        }
        p {
            font-size:18px;
        }
        .sides {
            justify-content:center;
            align-items:center;
            text-align:center;
        }
        .nav-link {
            border-radius:6px;
        }
    </style>
</head>
<body>
    <div class="offcanvas offcanvas-start" id="mycanvas">
        <div class="offcanvas-header text-bg-dark">
            <h4 class="canvas-title">Dashboard</h4>
        </div>
        <div class="offcanvas-body sides">
            <!-- Actived on Beranda -->
            <a href="#" class="nav-link pt-3 pb-3 text-bg-warning">Beranda</a> 
            <a href="#" class="nav-link pt-3 pb-3">Data Konsultasi</a>
            <a href="#" class="nav-link pt-3 pb-3">Rekomendasi</a>
            <a href="#" class="nav-link pt-3 pb-3">Janji Temu</a>
        </div>
    </div>
    <div class="container-fluid" style="padding-top:70px;">    
    <!-- Navigation-bar laman -->
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container-fluid">
                <!-- Bagian button sidebar -->
                <ul class="navbar-nav">
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#mycanvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </ul>
                <div class="container-fluid">
                    <span class="navbar-text">Beranda</span>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            Nama_mahasiswa
                            <img src="picture/profile.png" alt="Foto profil" style="width:24px; margin-right: 2px; margin-left: 3px;" class="rounded-pill">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Pengaturan</a></li>
                            <li><a href="#" class="dropdown-item">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Batas navigation-bar -->
    <div class="container-fluid container-centering">
        <h2><b>Buku Perwalian Akademik Mahasiswa Online<br>Prodi Teknik Informatika</b></h2>
    </div>
    <div class="container-fluid pt-4 container-centering">
        <p>
            Proses Pembibingan Akademik (PA) merupakan proses bimbingan bagi mahasiswa dalam menjalani dan menghadapi masalah
            dan tantangan terkait aktivitas akademik selama masa studinya.
        </p>
    </div>
    <div class="container-fluid pt-4 container-centering">
        <p>
            Dalam buku Pedoman Akademik, yang tercantum dalam Peraturan Direktur Nomor: 12 Tahun 2019 <br>
            tentang Penyelenggara Pendidikan Politeknik Negeri Pontianak. <br>
        </p>
    </div>
    <div class="container-fluid pt-4 container-centering">
        <p>
            Pelaksanaan pembimbingan akademik di lingkungan Jurusan Teknik Elektro lebih lanjut diatur <br>
            dalam <b>Standard Operating Procedure Pembimbingan Akademik Nomor Dokumen :</b><br>
            <a href="#">SOP/03/8.5.3/EL/013/E01</a> 
        </p>
    </div>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>