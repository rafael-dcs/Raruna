<?php
include "header.php";
?>

<section class='container' id='playlist'>
    <div class="row playlist-name">
        <h2 class="text-dark">My Playlists</h2>
    </div>
    <div class="row" id="playlists">
        <div class='col-xs'>
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/150x150" id=imgAlbum alt="Card image cap">
                <div class="card-body bg-dark">
                    <h5 class="card-title text-light">title</h5>
                    <p class="card-text text-light">description</p>
                    <a href="" class="text-light delete" name="delete"><img src="../assets/img/imgLixo.png" /></a>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <button type="button" value="New Playlist" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">New Playlist</button>
    </div>
    <hr>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close text-muted" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php include "new-playlist-form.php" ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info text-white">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate.js"></script>
<script type="text/javascript" src="../assets/js/slick.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>