<?php

include "../Connection.php";

class Music{
    var $idmusic;
    var $title;
    var $duration;
    var $idalbum;

    function getMusics(){
        $query = '
            select * from musics 
        ';
        $conn = openConnection();
        $stmt = $conn->query($query);
        $musics = $stmt->fetchAll();
    
        foreach($musics as $music){
            $this->idmusic = $music['idmusic'];
    
            $this->title = $music['title'];     
            
            $this->duration = $music['duration']; 
            
            $this->idalbum = $music['idalbum'];
        }    
    }
    
    function getMusic($valorId){
        $query = "
            select * from musics where idmusic = $valorId
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        $music = $stmt->fetchAll();
    
        $this->idmusic = $music['idmusic'];
    
        $this->title = $music['title'];     
            
        $this->duration = $music['duration']; 
            
        $this->idalbum = $music['idalbum'];                    
    } 
}
//select