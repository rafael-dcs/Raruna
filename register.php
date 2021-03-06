<?php
$page = "Raruna - Register";
include "header.php";
if (filter_input(INPUT_POST, 'register') != null) {
    if (filter_input(INPUT_POST, 'terms') == "accepted") {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $confPassword = filter_input(INPUT_POST, 'conf-password', FILTER_SANITIZE_STRING);
        if($password !== $confPassword){
            $passwordError = true;
        }else{
            if(!register($email, $password, $name)){
                $registerError = true;
            }
        }
    }
}
?>
<div class="form">
    <h2>Register Now</h2>
    <p>Ain't you a big music lover? Hurry then!</p>
    <?php if(isset($registerError) && $registerError){ ?>
    <div class="alert alert-danger" role="alert">
        Email already in use.
    </div>
    <?php } ?>
    <?php if(isset($passwordError) && $passwordError){ ?>
    <div class="alert alert-danger" role="alert">
        Both passwords need to correspond.
    </div>
    <?php } ?>
    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="conf-password" placeholder="Confirm Password" required>
        </div>
        <div>
            <input class="" type="checkbox" name="terms" value="accepted" required>
            <label for="terms">I accept the <a href="">Terms of Use</a> & <a href="">Privacy Policy</a> of
                course.</label>
        </div>
        <div>
            <input title="I'm kinda poor" type="submit" name="register" class="btn btn-outline-secondary" value="Register Free">
            <a href="" title="I'm rich AF"><button class="btn btn-primary">I Want Premium</button></a>
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