<?php
    session_start();
    if (!isset($_SESSION['userid'])) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Komentar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="/assets/ourgaleri.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        /* Custom styles for this template */
        .navbar {
            background-color: #f8f9fa !important; /* Light grey background */
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #343a40 !important; /* Dark grey text */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff !important; /* Blue text on hover */
        }

        .navbar-nav .active > .nav-link {
            color: #007bff !important; /* Blue text for active link */
        }

        .navbar-nav .dropdown-menu {
            background-color: #f8f9fa !important; /* Light grey background for dropdown */
        }

        .dropdown-item {
            color: #343a40 !important; /* Dark grey text for dropdown items */
        }

        .dropdown-item:hover {
            background-color: #007bff !important; /* Blue background on hover */
            color: #fff !important; /* White text on hover */
        }
    </style>

</head>
<body>

    <header class="bg-white">
    <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
        <a class="block text-teal-600" href="home.php">
        <span class="sr-only">Home</span>
        <img src="/assets/ourgaleri.png" width="30px;" alt="">
            <path
            d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
            fill="currentColor"
            />
        </svg>
        </a>

        <div class="flex flex-1 items-center justify-end md:justify-between">
        <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm">
            <li>
                <a class="text-gray-500 transition hover:text-gray-500/75" href="index.php"> Jelajahi </a>
            </li>

            <li>
                <a class="text-gray-500 transition hover:text-gray-500/75" href="foto.php"> Post Foto </a>
            </li>

            <li>
                <a class="text-gray-500 transition hover:text-gray-500/75" href="album.php"> Album </a>
            </li>

            <li>
                <a class="text-gray-500 transition hover:text-gray-500/75" href="report.php"> Report Data </a>
            </li>
            </ul>
        </nav>

        <div class="flex items-center gap-4">
            <div class="sm:flex sm:gap-4">
            <a
                class="hidden rounded-md bg-red-500 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
                href="logout.php"
            >
            <img src="/assets/logout.png" width="25px;" alt="">
            </a>
            </div>

            <button
            class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
            >
            <span class="sr-only">Toggle menu</span>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            </button>
        </div>
        </div>
    </div>
    </header>

<section style="background-color: #eee;">
    <div class="container my-5 py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php
                            include "koneksi.php";
                            $fotoid = $_GET['fotoid'];
                            $sql = mysqli_query($conn, "SELECT * FROM foto WHERE fotoid='$fotoid'");
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <img src="gambar/<?= $data['lokasifile'] ?>" class="img-fluid" width="100%">
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Komentar</h5>
                        <form action="tambah_komentar.php" method="post">
                            <?php
                                include "koneksi.php";
                                $fotoid = $_GET['fotoid'];
                                $sql = mysqli_query($conn, "SELECT * FROM foto WHERE fotoid='$fotoid'");
                                while ($data = mysqli_fetch_array($sql)) {
                            ?>
                            <input type="text" name="fotoid" value="<?= $data['fotoid'] ?>" hidden>
                            <div class="form-group">
                                <label for="judulfoto">Judul</label>
                                <input type="text" class="form-control" id="judulfoto" name="judulfoto" value="<?= $data['judulfoto'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="deskripsifoto">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsifoto" name="deskripsifoto" value="<?= $data['deskripsifoto'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="isikomentar">Komentar</label>
                                <input type="text" class="form-control" id="isikomentar" name="isikomentar">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <?php
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Komentar</h5>
                        <?php
                            include "koneksi.php";
                            $userid = $_SESSION['userid'];
                            $fotoid = $_GET['fotoid'];
                            $sql = mysqli_query($conn, "SELECT * FROM komentarfoto, user WHERE komentarfoto.userid=user.userid AND komentarfoto.fotoid='$fotoid'");
                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex flex-start align-items-center">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60"
                                        height="60" />
                                    <div>
                                        <h6 class="fw-bold text-primary mb-1"><?= $data['namalengkap'] ?></h6>
                                        <p class="text-muted small mb-0"><?= $data['tanggalkomentar'] ?></p>
                                    </div>
                                </div>
                                <p class="mt-3 mb-4 pb-2"><?= $data['isikomentar'] ?></p>
                            </div>
                        </div>
                        <?php
                                }
                            } else {
                                echo "<p>Tidak ada komentar yang ditemukan.</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
</section>

</body>
</html>
