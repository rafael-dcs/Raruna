<?php
$page = "Raruna - Albuns";
include "header.php";

if(filter_input(INPUT_GET, 'album')){
    $idalbum = filter_input(INPUT_GET, 'album');
    $album = pageAlbum($idalbum);
    $musics = musicAlbum($idalbum);
}


?>

<section class='container' id='album'>
    <div class="row album-name justify-content-between">
        <h2 class="text-dark align-self-end " style="margin-bottom: 0rem;"><?php echo $album->title ?></h2>

        <img src="<?php echo $album->image ?>" class="rounded float-right ml-2" id="imgAlbum" style="width: 150px; height: 150px" />
    </div>
    <div class="row">
        <table class="table text-light bg-dark music-list">
            <tbody>
                <?php foreach($musics as $music){ ?>
                <tr>
                <td class="play"><img src="../assets/img/imgPlay.png" /></td>
                <td class="song-name"><?php echo $music['title'] ?></td>
                <td class="duration text-right"><?php echo $music['duration'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <hr>
</section>
</body>

</html>