<?php
$page = "Raruna - Login";
include "header.php";
if (filter_input(INPUT_POST, 'login')) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    login($email, $password);
}
?>
<div class="form">
    <h2>Login</h2>
    <p>Access all of our songs</p>
    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="nome" placeholder="Password">
        </div>
        <div>
            <input class="" type="checkbox" name="remember">
            <label for="remember">Remember me</label>
            <a title="If this worked you could send yourself an email" id="forgot" href="">Forgot your password?</a>
        </div>
        <div>
            <input name="login" class="btn btn-primary" type="submit" value="Login">
        </div>
    </form>
</div>
<footer>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</footer>
</body>

</html>