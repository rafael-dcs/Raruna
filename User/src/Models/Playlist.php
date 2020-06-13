<?php

class Playlist{
    var $idplaylist;
    var $title;
    var $description;
    var $image;
    var $iduser;

    function getPlaylist($idplaylist){
        $query = "
            select * from playlists where idplaylist = $idplaylist
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt->rowCount() > 0){
            $playlist = $stmt->fetchAll()[0];
            $this->idplaylist = $idplaylist;
            $this->title = $playlist['title'];
            $this->description = $playlist['description'];
            $this->image = $playlist['image'];
            $this->iduser = $playlist['iduser'];
            return $this;
        }
        return null;
    }
    
    function getMyPlaylists($iduser){
        $query = "
            select idplaylist from playlists where iduser = $iduser
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt->rowCount() > 0){
            $playlists = $stmt->fetchAll();
            return $playlists;
        }
        return null;
    }

    function getPlaylistMusics($idplaylist){
        $query = "
            select * from musics_playlist where idplaylist = $idplaylist
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt->rowCount() > 0){
            $musics = $stmt->fetchAll();
            return $musics;
        }
        return null;
    }

    function postPlaylist($file){
        $query = "
            insert into playlists (title, description, image, iduser) values ('$this->title', '$this->description', '$this->image', $this->iduser)
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt){
            if(is_uploaded_file($file)){
                file_put_contents("../assets/img/" . $this->image, file_get_contents($file));
            }
            return true;
        }else{
            return false;
        }
    }

    static function deletePlaylist($idplaylist){
        $query = "
            delete from playlists where idplaylist = $idplaylist
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt){
            return true;
        }else{
            return false;
        }
    }

    function addMusic($idmusic){
        $query = "
            insert into musics_playlist (idplaylist, idmusic) values ($this->idplaylist, $idmusic)
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt){
            return true;
        }else{
            return false;
        }
    }

    function removeMusic($idmp){
        $query = "
            delete from musics_playlist where idmp = $idmp
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt){
            return true;
        }else{
            return false;
        }
    }
}
//insert,update,delete,select