<?php
    session_start();
    if (!isset($_SESSION['userid'])) {
        header("location:login.php");
    }
    include "koneksi.php";
    $userid = $_SESSION['userid'];
    // Mengambil data pengguna dari database
    $sql = mysqli_query($conn, "SELECT * FROM user WHERE userid='$userid'");
    $data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="icon" type="image/png" href="/assets/ourgaleri.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <span class="fs-4" style="margin-left:15px; ">OurGallery</span>
        <img src="/assets/ourgaleri.png" width="30px;" alt="">
        </a>
        <ul class="nav nav-pills">
        <li class="nav-item" style="margin-left: 5px;"><a href="profile.php" class="btn btn-warning" aria-current="page"><img src="/assets/user.png" width="25px;" alt=""></a></li>
        <li class="nav-item" style="margin-left: 5px;"><a href="index.php" class="btn btn-warning" aria-current="page"><img src="/assets/direction.png" width="25px;" alt=""></a></li>
        <li class="nav-item" style="margin-left: 5px;"><a href="foto.php" class="btn btn-warning" aria-current="page"><img src="/assets/more.png" width="25px;" alt=""></a></li>
        <li class="nav-item" style="margin-left: 5px;"><a href="album.php" class="btn btn-warning" aria-current="page"><img src="/assets/image-gallery.png" width="25px;" alt=""></a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link" style="color: red; text-decoration: none;"><img src="/assets/logout.png" width="25px;" alt=""></a></li>
        </ul>
        <div>
        </div>
    </header>

<section style="background-color: #eee; padding: 50px 0;">
<a href="home.php" class="btn btn-warning" aria-current="page" style="border-radius: 20px; margin-left: 5%;"><img src="/assets/left-arrow.png" width="25px" style="border-radius: 20px;" alt=""></a>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="/assets/acc.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-text"><?= $data['username'] ?></h4>
                        <p class="card-title"><?= $data['namalengkap'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Profil</h5>
                        <form action="update_profil.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="<?= $data['namalengkap'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $data['email'] ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
