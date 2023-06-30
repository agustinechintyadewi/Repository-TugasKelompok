<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_assets/css/style2.css')); ?>">

    <!-- Logo Title -->
    <link rel="icon" href="admin_assets/img/Logo Shelter.png" type="image/x-icon">
    <title>PETSHELTER</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-transparent position-fixed w-100">
        <div class="container">
            <div class="logo">
                <img class="gambar-logo" src="admin_assets/img/Logo Shelter.png">
                <h3>PETSHELTER</h3>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-dark" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark" href="#">Tentang</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark" href="#">FAQ</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark" href="#">Hubungi Kami</a>
                    </li>
                </ul>

                <!--Login dan Register Button-->
                <div class="sm:fixed sm:top-0 sm:right-0 p-10 text-right z-10">
                    <a class="btn btn btn-dark mb-2" href="<?php echo e(route('login')); ?>">Masuk</a>
                    <a class="btn btn btn-dark mb-2" href="<?php echo e(route('register')); ?>">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1 class="text-dark">PETSHELTER</h1>
                    <p class="text-dark">Berikan rumah terbaik bagi <br> hewan di sekitar Anda!</p>

                    <button class="button-lg-primary">Mulai</button>

                </div>
            </div>

            <img src="admin_assets/img/landingpage.png" alt=""
                class="landing-image position-absolute img-hero row-cols-lg-3">
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH D:\Chintya\KULIAH\SMT 6\PEMWEB\Project\webpetshelter\resources\views/welcome.blade.php ENDPATH**/ ?>