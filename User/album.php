<?php
$page = "Raruna - Albuns";
include "header.php";

if (filter_input(INPUT_GET, 'album')) {
    $idalbum = filter_input(INPUT_GET, 'album');
    $album = albumInfo($idalbum);
    $musics = albumMusics($idalbum);
    $path = "?album=$idalbum";
}


?>

<section class='container' id='album'>
    <div class="row album-name justify-content-between">
        <h2 class="text-dark align-self-end " style="margin-bottom: 0rem;"><?php echo $album->title ?></h2>

        <img src="../assets/img/<?php echo $album->image ?>" class="rounded float-right ml-2" id="imgAlbum" style="width: 150px; height: 150px" />
    </div>
    <hr>
    <div class="row">
        <table class="table text-light bg-dark music-list">
            <tbody>
                <?php foreach ($musics as $music) { ?>
                    <tr>
                        <td class="play"><img src="../assets/img/imgPlay.png" /></td>
                        <td class="song-name"><?php echo $music['title'] ?></td>
                        <td><a href="#" class="" onClick="changeRef(<?php echo $music['idmusic'] ?>)" data-toggle="modal" data-target="#exampleModal"><img src="../assets/img/addToPlaylist.png" /></a></td>
                        <td class="duration text-right"><?php echo $music['duration'] ?></td>
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

                            </div>
                        </div>
                    </div>
    </div>
<?php } ?>





</tbody>
</table>
</div>
<hr>
<div class="row">
    <small class="text-muted"><?php echo "℗ $album->year $album->record_comp" ?></small>
</div>
</section>
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate.js"></script>
<script type="text/javascript" src="../assets/js/slick.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>