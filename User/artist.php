<?php
$page = "Raruna - Artists";
include "header.php";
if(filter_input(INPUT_GET, 'artist')){
    $idartist = filter_input(INPUT_GET, 'artist');
    $artist = artistAlbum($idartist);
    $albuns = albumArtist($idartist);
}

?>

<section class='container' id='artist'>
    <div class="row artist-name justify-content-between">
        <h2 class="text-dark align-self-center" style="margin-bottom: 0rem;"><?php echo $artist->name; ?></h2>
        <img src="<?php echo $artist->image ?>" class="rounded float-right ml-2 " id="imgArtist" style="width: 150px; height: 150px" />
    </div>
    <div class="row" id="most-listened">
        <h3 class="text-dark">Most Listened</h3>
        <table class="table text-light bg-dark music-list">
            <tbody>
                <?php for($i=0;$i<5;$i++){ 
                 if(isset($albuns[$i])){                    
                $musics = musicAlbum($albuns[$i]['idalbum']);                
                ?>
                <?php //foreach($musics as $music){ ?>
                <tr>
                <td class="order">1.</td>
                <td class="play"><img src="../assets/img/imgPlay.png" /></td>
                <td class="song-name"><?php echo $musics[0]['title'] ?></td>
                <td class="duration text-right">00:00</td>
                </tr>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <hr>
    
    <h3 class="text-dark">Albuns</h3>
    <div class="row" id="albuns">   
    <?php foreach($albuns as $album){ ?>
        <div class='col-xs'>
            
            <div class="card">
                <img class="card-img-top" src="<?php echo $album['image']?>" id=imgAlbum alt="Card image cap">
                <div class="card-body bg-dark">
                    <h5 class="card-title text-light"><?php echo $album['title'] ?></h5>
                </div>
            </div>            
        </div>  
        <?php } ?> 
    </div>
</section>
</body>

</html>