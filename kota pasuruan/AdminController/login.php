<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Page</title>
    <!-- Favicon (using Bootstrap Icons) -->
    <link rel="icon" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/box-arrow-in-right.svg" type="image/svg+xml">
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../UserController/css/styles.css" rel="stylesheet" />
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

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#66CCFF;">
        <div class="container">
            <a class="navbar-brand" href="../UserController/bloghome.php" style="color: white;">Kota Pasuruan 🔥</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="../UserController/bloghome.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../UserController/about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="../UserController/contact.php">Contact</a></li>
                    <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="../UserController/bloghome.php">Blog</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="../AdminController/login.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-1 bg-light border-bottom mb-1">
        <div class="container px-5">
            <div class="text-center my-2">
                <h1 class="fw-bolder hover-text">Admin Login</h1>
                <p class="lead mb-0 hover-text">Silahkan login untuk mengelola konten</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="act_login.php">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" name="inputEmail" placeholder="Email" />
                                <label for="inputEmail">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPassword" type="password" name="inputPassword" placeholder="Password" />
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                <button class="btn btn-secondary" type="submit" name="submit">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="register.php">Not an admin? Sign up</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5" style="background-color: #66CCFF; margin-top: 50px;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>