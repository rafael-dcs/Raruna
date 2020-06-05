<?php
    include 'User/src/UserControl.php';
    checkExternalAccess();
    if(filter_input(INPUT_POST, 'login')){
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
        $password = password_hash(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING), PASSWORD_DEFAULT);
        login($email, $password);
    }
    if(filter_input(INPUT_POST, 'register')){
        $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
        $password = password_hash(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING), PASSWORD_DEFAULT);
        register($email, $password, $name);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick.scss" />
    <link rel="stylesheet" href="assets/icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <header class="menu-principal">

        <div class="header-1">
            <div class="logo">
                <a title="Raruna!" href="index.php"><img src="assets/img/Logo.png"></a>
            </div>
            <div class="interacoes">
                <a title="Register" href="register.php"><button class="btn btn-primary btn-sm">Register</button></a>
                <a title="Login" href="login.php"><button class="btn btn-dark btn-sm">Login</button></a>
            </div>
        </div>
        <nav class="coluna-100 menu-urls">
            <div class="header-2">
                <div class="menu">
                    <ul>
                        <li><a title="Home" href="index.php">Home</a></li>
                        <li><a href="">Premium</a></li>
                    </ul>

                </div>
                <div class="busca">
                    <input placeholder="Search Something" type="text">
                </div>
            </div>
        </nav>
    </header>