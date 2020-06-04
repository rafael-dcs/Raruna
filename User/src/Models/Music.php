<?php

class Music{
    var $idmusic;
    var $title;
    var $duration;
    var $idalbum;

    function getMusics(){
        $query = '
            select * from musics 
        ';
        $stmt = $conexao->query($query);
        $musics = $stmt->fetchAll();
    
        for($musics as $music){
            $this->idmusic = $music['idmusic'];
    
            $this->title = $music['title'];     
            
            $this->duration = $music['duration']; 
            
            $this->idalbum = $music['idalbum'];
        }    
    }
    
    function getMusic($valorId){
        $query = '
            select * from musics where idmusic = $valorId
        ';
        $stmt = $conexao->query($query);
        $music = $stmt->fetchAll();
    
        $this->idmusic = $music['idmusic'];
    
        $this->title = $music['title'];     
            
        $this->duration = $music['duration']; 
            
        $this->idalbum = $music['idalbum'];                    
    } 
}
//select