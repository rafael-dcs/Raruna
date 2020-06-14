<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Playlist</h5>
            </div>
            <div class="modal-body">
                <section class='container'>
                    <div class='row'>
                        <?php
                        if (filter_input(INPUT_GET, 'play') && filter_input(INPUT_GET, 'add') != "") {
                            $idplaylist = filter_input(INPUT_GET, 'play');
                            $idmusic = filter_input(INPUT_GET, 'add');
                            $playlist = playlistInfo($idplaylist);
                            if ($playlist->iduser == profile($_SESSION['user'])->iduser) {
                                $playlist->addMusic($idmusic);
                            }
                        }
                        $playlists = myPlaylists($_SESSION['user']);
                        if(isset($playlists)){
                            foreach ($playlists as $idplaylist) {
                                $myPlaylist = playlistInfo($idplaylist['idplaylist']);
                            ?>
                                <div class='col-xs'>
                                    <a href="<?php echo $path . "&play=" . $myPlaylist->idplaylist ?>&add=" class="choose">
                                        <div class="card border-0 bg-transparent">
                                            <img class="card-img-top" src="../assets/img/<?php echo $myPlaylist->image ?>" id="" alt="Card image cap">
                                            <div class="card-body bg-dark border">
                                                <h5 class="card-title text-light"><?php echo $myPlaylist->title ?></h5>
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
                </section>
            </div>
        </div>
    </div>
</div>
<script>
    function changeRef(id) {
        var links = document.getElementsByClassName('choose');
        for (var i = 0; i < links.length; i++) {
            var href = links[i].getAttribute('href') + id;
            links[i].setAttribute('href', href);
        }
    }
</script>