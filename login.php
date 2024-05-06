<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Login</title>

    <link rel="icon" type="image/png" href="/assets/ourgaleri.png">
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login</h2>
                    <form class="login-form" action="proses_login.php" method="post">
                        <div class="input-group">
                            <input class="input--style-3" type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-password" type="password" name="password" placeholder="Password" required>
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" value="login" type="submit">Submit</button>
                        </div>
                        <br>
                        <div>
                            <span>
                                <p style="color: white;">Haven't a account? <a href="register.php">Resgiter!</a></p>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Check if error parameter exists in URL
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        // Display Sweet Alert with error message
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Upsss...',
                    text: 'Username dan password tidak ada. Tolong masukkan akun yang sudah terdaftar.',
                });
             </script>";
    }
    ?>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->