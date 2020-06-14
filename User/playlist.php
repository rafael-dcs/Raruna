<?php
$page = "Raruna - Playlist";
include "header.php";

if (filter_input(INPUT_GET, 'play')) {
    $idplaylist = filter_input(INPUT_GET, 'play');
    $playlist = playlistInfo($idplaylist);
    $musics = myMusics($idplaylist);
    $path = "?play=$idplaylist";
    if (filter_input(INPUT_GET, 'del')) {
        $idmp = filter_input(INPUT_GET, 'del');
        $playlist->removeMusic($idmp);
        header("Location: $path");
    }
}


?>

<section class='container' id='album'>
    <div class="row album-name justify-content-between">
        <h2 class="text-dark align-self-end " style="margin-bottom: 0rem;"><?php echo $playlist->title ?></h2>

        <img src="../assets/img/<?php echo $playlist->image ?>" class="rounded float-right ml-2" id="imgAlbum" style="width: 150px; height: 150px" />
    </div>
    <div class="row">
        <p><?php echo $playlist->description ?></p>
    </div>
    <hr>
    <div class="row">
        <table class="table text-light bg-dark music-list">
            <tbody>
                <?php if (isset($musics)) { ?>
                    <?php foreach ($musics as $idmusic) {
                        $music = musicInfo($idmusic['idmusic']);
                    ?>
                        <tr>
                            <td class="play"><img src="../assets/img/imgPlayMusic.png" /></td>
                            <td class="song-name"><?php echo $music->title ?></td>
                            <td><a href="<?php echo "?play=$playlist->idplaylist&del=" . $idmusic['idmp'] ?>"><img src="../assets/img/imgLixo.png" /></a></td>
                            <td class="duration text-right"><?php echo $music->duration ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <hr>
</section>
<?php include "footer.php" ?>