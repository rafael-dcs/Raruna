<html>

<head>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/slick.scss" />
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <a title="Raruna!" href="index.php"><img src="./img/Logo.png"></a>
                </div>
                <div class="interacoes">
                    <a title="Register" href="register.php"><button class="btn btn-primary btn-sm">Register</button></a>
                    <a title="Login" href="login.php"><button class="btn btn-dark btn-sm">Login</button></a>
                </div>
            </div>
        </main>
    </header>
    <main class="coluna-100 menu-urls">
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
    </main>
    <div class="form">
        <h2>Login</h2>
        <p>Access all of our songs</p>
        <form action="">
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="nome" placeholder="Password">
            </div>
            <div>
                <input class="" type="checkbox" name="remember">
                <label for="remember">Remember me</label>
                <a title="Send an email to change password" id="forgot" href="">Forgot your password?</a>
            </div>
            <div>
                <a href="" title="Login"><button name="login" class="btn btn-primary">Login</button></a>
            </div>
        </form>
    </div>
    <footer>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-migrate.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
    </footer>
</body>

</html>