<?php
$page = "Raruna - Profile";
include "header.php";
$profile = profile($_SESSION['user']);
if (filter_input(INPUT_POST, "edit")) {
    if (filter_input(INPUT_POST, "name") != null) {
        editAccount("name", filter_input(INPUT_POST, "name"), $_SESSION['user'], FILTER_SANITIZE_STRING);
    }
    if (filter_input(INPUT_POST, "password") != null && filter_input(INPUT_POST, "current-password") != null) {
        $oldpassword = filter_input(INPUT_POST, "current-password", FILTER_SANITIZE_STRING);
        $newpassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        editPassword($_SESSION['user'], $oldpassword, $newpassword);
    }
}
if (filter_input(INPUT_POST, "send-image")) {
    $image = md5($_FILES['image']['name']) . ".jpg";
    $file = $_FILES['image']['tmp_name'];
    sendImage($image, $file, $_SESSION['user']);
}
$playlists = myPlaylists($_SESSION['user']);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class=" col-8 card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <img src="<?php echo isset($profile->image) ? "../assets/img/" . $profile->image : "http://placehold.it/150x150" ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);" class="text-dark"><?php echo $profile->name ?></a></h2>
                                <h6 class="d-block "><a href="javascript:void(0)" class="text-info"><?php echo isset($playlists)? count($playlists) : 0 ?></a> Playlists</h6>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="file">
                                        <input type="file" name="image" class="file-input" id="File">
                                        <label class="file-label" for="File"></label>
                                    </div>
                                    <div>
                                        <input type="submit" style="margin-top: 5px;" class="btn btn-dark" value="Send" name="send-image">
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-dark" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-info" id="editProfile-tab" data-toggle="tab" href="#editProfile" role="tab" aria-controls="editProfile" aria-selected="false">Edit</a>
                                </li>
                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Full Name</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            <?php echo $profile->name ?>
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Email</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            <?php echo $profile->email ?>
                                        </div>
                                    </div>
                                    <hr />


                                </div>
                                <div class="tab-pane fade" id="editProfile" role="tabpanel" aria-labelledby="editProfile-tab">
                                    <h3 class="text-black ">Edit Informations</h3>
                                    <div clas="row">
                                        <form action="" method="post">
                                            <div class="input-group">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text" id="">Name</span>
                                                </div>
                                                <input type="text" class="form-control" name="name">
                                            </div><br>
                                            <div class="form-group">
                                                <label for="InputPassword1">Current Password</label>
                                                <input type="password" class="form-control" name="current-password" id="InputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="InputPassword1">New Password</label>
                                                <input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password">
                                            </div>
                                            <input value="Submit" type="submit" class="btn btn-secondary" name="edit">
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>