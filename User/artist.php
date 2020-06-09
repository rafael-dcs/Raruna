<?php
include "header.php";
?>

<section class='container' id='artist'>
    <div class="row artist-name">
        <h2 class="text-dark">Atist Name</h2>
    </div>
    <div class="row" id="most-listened">
        <h3 class="text-dark">Most Listened</h3>
        <table class="table text-light bg-dark music-list">
            <tbody>
                <td class="order">1.</td>
                <td class="play">|></td>
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
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body bg-dark">
                    <h5 class="card-title text-light">title</h5>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>