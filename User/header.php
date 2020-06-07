<?php
$path = "";
include "src/UserControl.php";
// checkInternalAccess();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.scss" />
    <link rel="stylesheet" href="../assets/icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>perfil</title>
</head>

<body>
    <header class="menu-principal">
        <div class="container">
            <div class="row">
                <div class="col-10"><a title="Raruna!" href="../index.php"><img src="../assets/img/Logo.png"></a></div>
                <div class="col-2"><a title="Logout" href="../register.php"><button class="btn btn-dark btn-sm">Logout</button></a></div>

            </div>
        </div>
    </header>
    <div class="conteiner">
        <div class="row">
            <nav class="coluna-100 menu-urls">
                <div class="header-2">
                    <div class="col-10 menu">

                        <ul>
                            <li><a title="Home" href="./index.php">Home</a></li>
                            <li><a title="Profile" href="profile.php">Profile</a></li>
                            <li><a href="">Musicas</a></li>
                            <li><a href="">Feed</a></li>
                        </ul>

                    </div>
                    <div class="col-2 busca">
                        <input placeholder="Search Something" type="text">
                    </div>

                </div>
        </div>
    </div>
    </nav>