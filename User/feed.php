<?php
$page = "Raruna - Feed";
include "header.php";
$playlists = myPlaylists($_SESSION['user']);
$artists = allArtists();
$albuns = allAlbuns();
?>

<section class='container' id='feed'>
    <div class="row">
        <h2 class="text-dark">My Playlists</h2>
    </div>
    <div class="row" id="playlists">
        <?php foreach($playlists as $idplaylist){
            $myPlaylist = playlistInfo($idplaylist['idplaylist']);
        ?>
        <div class='col-xs'>
            <a href="playlist.php?play=<?php echo $myPlaylist->idplaylist ?>">
                <div class="card">
                    <img class="card-img-top" src="../assets/img/<?php echo $myPlaylist->image ?>" alt="Card image cap">
                    <div class="card-body bg-dark">
                        <h5 class="card-title text-light"><?php echo $myPlaylist->title ?></h5>
                        <p class="card-text text-light"><?php echo $myPlaylist->description ?></p>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
    <hr>
    <div class="row">
        <h2 class="text-dark">Artists</h2>
    </div>
    <div class="row" id="artists">
        <?php for($i = 0; $i < 5; $i++){ ?>
            <?php if(isset($artists[$i])){ ?>
                <div class='col-xs'>
                    <a href="artist.php?artist=<?php echo $artists[$i]['idartist'] ?>">
                        <div class="card">
                            <img class="card-img-top" src="../assets/img/<?php echo $artists[$i]['image'] ?>" alt="Card image cap">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-light"><?php echo $artists[$i]['name'] ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <hr>
    <div class="row">
        <h2 class="text-dark">Albuns</h2>
    </div>
    <div class="row" id="albuns">
        <?php for($i = 0; $i < 5; $i++){ ?>
            <?php if(isset($albuns[$i])){ ?>
                <div class='col-xs'>
                    <a href="album.php?album=<?php echo $albuns[$i]['idalbum'] ?>">
                        <div class="card">
                            <img class="card-img-top" src="../assets/img/<?php echo $albuns[$i]['image'] ?>" alt="Card image cap">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-light"><?php echo $albuns[$i]['title'] ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>
</body>

</html>