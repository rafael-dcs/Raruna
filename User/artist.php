<?php
$page = "Raruna - Artists";
include "header.php";
if (filter_input(INPUT_GET, 'artist')) {
    $idartist = filter_input(INPUT_GET, 'artist');
    $artist = artistInfo($idartist);
    $albuns = artistAlbuns($idartist);
    $path = "?artist=$idartist";
}
?>

<section class='container' id='artist'>
    <div class="row artist-name justify-content-between">
        <h2 class="text-dark align-self-center" style="margin-bottom: 0rem;"><?php echo $artist->name; ?></h2>
        <img src="../assets/img/<?php echo $artist->image ?>" class="rounded float-right ml-2 " id="imgArtist" style="width: 150px; height: 150px" />
    </div>
    <div class="row" id="most-listened">
        <h3 class="text-dark">Most Listened</h3>
        <table class="table text-light bg-dark music-list">
            <tbody>
                <?php for ($i = 0; $i < 5; $i++) {
                    if (isset($albuns[$i])) {
                        $musics = albumMusics($albuns[$i]['idalbum']);
                ?>
                        <tr>
                            <td class="order"><?php echo $i + 1 ?>.</td>
                            <td class="play"><img src="../assets/img/imgPlayMusic.png" /></td>
                            <td class="song-name"><?php echo $musics[0]['title'] ?></td>
                            <td><a class="button" onClick="changeRef(<?php echo $musics[0]['idmusic'] ?>)" data-toggle="modal" data-target="#exampleModal"><img src="../assets/img/addToPlaylist.png" /></a></td>
                            <td class="duration text-right"><?php echo $musics[0]['duration'] ?></td>
                        </tr>


                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content bg-dark text-white">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Choose Playlist</h5>

                                    </div>
                                    <div class="modal-body">
                                        <?php include "choose-playlist.php" ?>
                                    </div>



                                <?php } ?>
                            <?php } ?>
            </tbody>
        </table>
    </div>
    <hr>

    <h3 class="text-dark">Albuns</h3>
    <div class="row" id="albuns">
        <?php foreach ($albuns as $album) { ?>
            <div class='col-xs'>
                <a href="album.php?album=<?php echo $album['idalbum'] ?>">
                    <div class="card border-0">
                        <img class="card-img-top" src="../assets/img/<?php echo $album['image'] ?>" id=imgAlbum alt="Card image cap">
                        <div class="card-body bg-dark">
                            <h5 class="card-title text-light"><?php echo $album['title'] ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</section>
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate.js"></script>
<script type="text/javascript" src="../assets/js/slick.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>