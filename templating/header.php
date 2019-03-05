<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Refresh automatic by second -->
    <meta http-equiv="refresh" content="601; url="<?php echo $_SERVER['PHP_SELF']; ?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPM</title>

    <!-- Memasukkan Dropzone -->
    <link rel="stylesheet" type="text/css" href="css/dropzone.css" />
    <script type="text/javascript" src="js/dropzone.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <style type="text/css">
        h1{font-family:'Open Sans',sans-serif;font-weight:400;}
    </style>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <a class="btn btn-danger" href="logout.php" role="button"><i class="fa fa-sign-out"></i></a>

                </div>
            </div>

            <div class="card">
                <div class="card-body text-center">
                    <a class="btn btn-dark" href="timeline.php"><i class="fa fa-home"></i></a>
                    <a class="btn btn-dark" href="berkas.php">Berkas</a>
                    <a class="btn btn-dark" href="">Profil</a>
                    <a class="btn btn-dark" href="">Riwayat</a>
                </div>
            </div>

        </div>

        <div class="col-md-8">

            <div class="card mb-3">
                <div class="card-body text-center">
                    <b>SISTEM PEMBERKASAN MANDIRI</b>
                </div>
            </div>