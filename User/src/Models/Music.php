<?php

class Music{
    var $idmusic;
    var $title;
    var $duration;
    var $idalbum;

    static function getAllMusics(){
        $query = '
            select * from musics 
        ';
        $conn = openConnection();
        $stmt = $conn->query($query);
        $musics = $stmt->fetchAll();
        return $musics;
        // foreach($musics as $music){
        //     $this->idmusic = $music['idmusic'];
    
        //     $this->title = $music['title'];     
            
        //     $this->duration = $music['duration']; 
            
        //     $this->idalbum = $music['idalbum'];
        // }    
    }

    static function getMusics($idalbum){
        $query = "
            select * from musics where idalbum = $idalbum
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        $musics = $stmt->fetchAll();
        return $musics;
    }
    
    function getMusic($valorId){
        $query = "
            select * from musics where idmusic = $valorId
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        $music = $stmt->fetchAll()[0];
    
        $this->idmusic = $music['idmusic'];
    
        $this->title = $music['title'];     
            
        $this->duration = $music['duration']; 
            
        $this->idalbum = $music['idalbum'];                    

        return $this;
    } 
}
//select