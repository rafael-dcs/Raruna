<html>

<head>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/slick.scss" />
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Register</title>
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <a title="Raruna!" href="index.php"><img src="./img/Logo.png"></a>
                </div>
                <div class="interacoes">
                    <a title="Register" href="register.php"><buttonclass="btn btn-primary btn-sm">Register</button></a>
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
                    <li><a href="">Library</a></li>
                    <li><a href="">Live</a></li>
                    <li><a href="">Discover</a></li>
                    <li><a href="">Premium</a></li>
                </ul>

            </div>
            <div class="busca">
                <input placeholder="Search Something" type="text">
            </div>
        </div>
    </main>
    <div class="form">
        <h2>Register Now</h2>
        <p>Ain't you a big music lover? Hurry then!</p>
        <form action="">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="nome" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="conf-password" name="nome" placeholder="Confirm Password">
            </div>
            <div>
                <input class="" type="checkbox" name="terms">
                <label for="terms">I accept the <a href="">Terms of Use</a> & <a href="">Privacy Policy</a> for
                    course.</label>
            </div>
            <div>
                <a href="" title="I'm kinda poor"><button class="btn btn-outline-secondary">Register Free</button></a>
                <a href="" title="I'm rich AF"><button class="btn btn-primary">I Want Premium</button></a>
            </div>
        </form>
    </div>
    <footer>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-migrate.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script src="bootstrap/bootstrap.min.js" ></script>
    </footer>
</body>

</html>