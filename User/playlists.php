<?php
$page = "Raruna - Playlists";
include "header.php";
if (filter_input(INPUT_POST, 'new-play')) {
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $image = md5($_FILES['image']['name']) . ".jpg";
    $file = $_FILES['image']['tmp_name'];
    newPlaylist($title, $description, $image, $file);
}
if (filter_input(INPUT_GET, 'del-play')) {
    $idplaylist = filter_input(INPUT_GET, 'del-play');
    $playlist = playlistInfo($idplaylist);
    if ($playlist->iduser == profile($_SESSION['user'])->iduser) {
        deletePlaylist($idplaylist);
    }
}
$playlists = myPlaylists($_SESSION['user']);
?>

<section class='container' id='playlist'>
    <div class="row playlist-name">
        <h2 class="text-dark">My Playlists</h2>
    </div>
    <div class="row" id="playlists">
    <?php if(isset($playlists)) { ?>
        <?php foreach ($playlists as $idplaylist) {
            $myPlaylist = playlistInfo($idplaylist['idplaylist']);
        ?>
            <div class='col-xs'>
                <a href="playlist.php?play=<?php echo $myPlaylist->idplaylist ?>">
                    <div class="card border-0 bg-transparent">
                        <img class="card-img-top" src="../assets/img/<?php echo $myPlaylist->image ?>" id="" alt="Card image cap">
                        <div class="card-body bg-dark border">
                            <h5 class="card-title text-light"><?php echo $myPlaylist->title ?></h5>
                            <p class="card-text text-light"><?php echo $myPlaylist->description ?></p>
                            <a href="?del-play=<?php echo $myPlaylist->idplaylist ?>" class="text-light delete"><img src="../assets/img/imgLixo.png" /></a>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    <?php }else{ ?>
        <div class="alert alert-success" role="alert">
            You haven't created any playlists yet! :(
        </div>
    <?php } ?>
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <h3 class="text-white ">New Playlist</h3>
                        <div class="row d-flex justify-content-center">
                            <div class="col form-group align-self-center ">
                                <input type="text" name="title" placeholder="Title" class="form-control bg-light text-white border-dark " required>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col form-group align-self-center">
                                <textarea name="description" class="form-control bg-light text-dark border-dark" cols="30" rows="10" placeholder="Description" required></textarea>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class=" col form-group align-self-center">
                                <label for="image" class="image-label text-white ">Image</label>
                                <input type="file" name="image" class="form-control bg-secondary text-white border-dark" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-info text-white" value="Save" name="new-play">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>