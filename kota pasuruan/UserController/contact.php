<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home</title>
    <!-- Favicon (using Bootstrap Icons) -->
    <link rel="icon" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/apple.svg" type="image/svg+xml">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .hover-zoom:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
        }

        .hover-text:hover {
            color: #66CCFF;
            transition: color 0.3s;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#66CCFF;">
        <div class="container">
            <a class="navbar-brand" href="bloghome.php" style="color: white;">Kota Pasuruan 🔥</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="bloghome.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="bloghome.php">Blog</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="../AdminController/login.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-1 bg-light border-bottom mb-1">
        <div class="container">
            <div class="text-center my-3">
                <h1 class="fw-bolder hover-text">Contact</h1>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container flex-grow-1">
        <div class="row justify-content-center align-items-center">
            <!-- Tambahkan div untuk gambar di sini -->
            <div class="col-lg-4 py-3">
                <img src="http://localhost/kota%20pasuruan/img/contact.png" alt="Gambar Kontak" class="img-fluid hover-zoom">
            </div>
            <!-- Bagian konten profil penulis tetap di sebelah kanan -->
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-body text-start">
                        <h2 class="card-title text-center hover-text">Profil Penulis</h2>
                        <p class="card-text text-center">
                            Jika Anda memiliki pertanyaan atau ingin berbicara dengan kami, silakan gunakan informasi kontak di bawah :
                        </p>
                        <ul class="list-unstyled text-center">
                            <li>Email: musaalkadzim567@gmail.com</li>
                            <li>Telepon: 081259654543</li>
                            <li>Alamat: Jl.Sunan Muria V, Dinoyo,Kec,Lowokwaru, Kota Malang</li>
                        </ul>
                        <p class="card-text text-center">
                            Atau Anda bisa langsung Klik Icon Di bawah sendiri ⬇️
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="py-5" style="background-color: #66CCFF;">
        <div class="container text-center text-white">
            <p class="m-0">&copy; Kota Pasuruan 2024 </p>
            <div class="mt-3">
                <a href="https://www.instagram.com/musaalkadzim__?igsh=bzluOXgyazZxYWEz" target="_blank" class="text-white me-3">
                    <i class="bi bi-instagram"></i> Instagram
                </a>
                <a href="mailto:musaalkadzim567@gmail.com" class="text-white me-3">
                    <i class="bi bi-envelope-fill"></i> Email
                </a>
                <a href="https://wa.me/6281259654543" target="_blank" class="text-white">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
