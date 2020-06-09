<?php
include "header.php";
?>

<section class='container' id='artist'>
    <div class="row artist-name justify-content-between">
        <h2 class="text-dark align-self-center" style="margin-bottom: 0rem;">Atist Name</h2>
        <img src="http://placehold.it/150x150" class="rounded float-right ml-2 " id="imgArtist" style="width: 150px; height: 150px" />
    </div>
    <div class="row" id="most-listened">
        <h3 class="text-dark">Most Listened</h3>
        <table class="table text-light bg-dark music-list">
            <tbody>
                <td class="order">1.</td>
                <td class="play"><img src="../assets/img/imgPlay.png" /></td>
                <td class="song-name">song name</td>
                <td class="duration text-right">00:00</td>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="row" id="albuns">
        <div class='col-xs'>
            <h3 class="text-dark">Albuns</h3>
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/150x150" id=imgAlbum alt="Card image cap">
                <div class="card-body bg-dark">
                    <h5 class="card-title text-light">title</h5>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>