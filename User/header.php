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

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php"><img src="../assets/img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="playlist.php">Playlists</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="feed.php">Feed</a>
                </li>
            </ul>
            <a href=""><button class="btn btn-outline-light my-2 my-sm-0" type="button">Logout</button></a>
        </div>
    </nav>