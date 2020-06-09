<?php
include "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class=" col-8 card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                <div class="middle">
                                    <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change image" />
                                    <input type="file" style="display: none;" id="profilePicture" name="file" />
                                </div>
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);" class="text-dark">Some Name</a></h2>
                                <h6 class="d-block "><a href="javascript:void(0)" class="text-info">1,500</a> Playlists</h6>

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
                                            Jamshaid Kamran
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Criation account date</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            ve aqui sla ou muda se for dificil
                                        </div>
                                    </div>
                                    <hr />

                                </div>
                                <div class="tab-pane fade" id="editProfile" role="tabpanel" aria-labelledby="editProfile-tab">
                                    <h3 class="text-black ">Edit Informations</h3>
                                    <div clas="row">
                                        <form>
                                            <div class="input-group">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text" id="">First and last name</span>
                                                </div>
                                                <input type="text" class="form-control">
                                                <input type="text" class="form-control">
                                            </div><br>
                                            <div class="form-group">
                                                <label for="InputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputPassword1">Password</label>
                                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="Check1">
                                                <label class="form-check-label" for="Check1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-secondary">Submit</button>
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


<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate.js"></script>
<script type="text/javascript" src="../assets/js/slick.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>