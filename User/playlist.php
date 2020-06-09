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
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body bg-dark">
                    <h5 class="card-title text-light">title</h5>
                    <p class="card-text text-light">description</p>
                    <a href="" class="text-light delete" name="delete">o</a><!--simbolo do lixo!!-->
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <input type="button" value="New Playlist" class="btn btn-dark">
    </div>
    <hr>
    <?php include "new-playlist-form.php" ?>
</section>
</body>
</html>