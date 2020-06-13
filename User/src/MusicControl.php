<?php 

include "Models/Album.php";
include "Models/Music.php";
include "Models/Artist.php";
include "Models/Playlist.php";

function albumInfo($idalbum){
    $album = new Album;
    $album->getAlbum($idalbum);
    return $album;
}

function albumMusics($idalbum){
    $musics = Music::getMusics($idalbum);
    return $musics;
}

function allAlbuns(){
    $album = new Album;
    return $album->getAllAlbuns();
}

function artistInfo($idartist){
    $artist = new Artist;
    $artist->getArtist($idartist);
    return $artist;
}

function artistAlbuns($idartist){
    $albuns = Album::getAlbuns($idartist);
    return $albuns;
}

function allArtists(){
    $artist = new Artist;
    return $artist->getArtists();
}

function myPlaylists($user){
    $playlist = new Playlist;
    $playlists = $playlist->getMyPlaylists(profile($user)->iduser);
    return $playlists;
}

function playlistInfo($idplaylist){
    $playlist = new Playlist;
    $playlist->getPlaylist($idplaylist);
    return $playlist;
}

function myMusics($idplaylist){
    $playlist = new Playlist;
    return $playlist->getPlaylistMusics($idplaylist);
}

function musicInfo($idmusic){
    $music = new Music;
    $music->getMusic($idmusic);
    return $music;
}

function newPlaylist($title, $description, $image, $file){
    $playlist = new PLaylist;
    $playlist->title = $title;
    $playlist->description = $description;
    $playlist->image = $image;
    $playlist->iduser = profile($_SESSION['user'])->iduser;
    $playlist->postPlaylist($file);
}

function deletePlaylist($idplaylist){
    Playlist::deletePlaylist($idplaylist);
}
