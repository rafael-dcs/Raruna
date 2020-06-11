<?php 

include "Models/Album.php";
include "Models/Music.php";
include "Models/Artist.php";
include "Models/Playlist.php";

function pageAlbum($idalbum){
    $album = new Album;
    $album->getAlbum($idalbum);
    return $album;
}

function musicAlbum($idalbum){
    $musics = Music::getMusics($idalbum);
    return $musics;
}

function artistAlbum($idartist){
    $artist = new Artist;
    $artist->getArtist($idartist);
    return $artist;
}

function albumArtist($idartist){
    $albuns = Album::getAlbuns($idartist);
    return $albuns;
}