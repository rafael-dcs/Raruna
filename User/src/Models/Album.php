<?php

include "../Connection.php";

class Album{
    var $idalbum;
    var $title;
    var $year;
    var $record_comp;
    var $image;
    var $idartist;

    
    static function getAllAlbuns(){
        $query = '
            select * from albuns 
        ';
        $conn = openConnection();
        $stmt = $conn->query($query);
        $albuns = $stmt->fetchAll();
        return $albuns;
        // foreach($albuns as $album){
        //     $this->title = $album['title'];
            
        //     $this->year = $album['year'];
            
        //     $this->record_comp = $album['record_comp'];
            
        //     $this->image = $album['image'];
            
        //     $this->idartist = $album['idartist'];                
        // }  
        
    }

    static function getAlbuns($idartist){
        $query = "
            select * from albuns where idartist = $idartist 
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        $albuns = $stmt->fetchAll();
        return $albuns;
    }

    function getAlbum($valorId){
        $query = "
            select * from albuns where idalbum = $valorId
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        $album = $stmt->fetchAll()[0];
        
        $this->title = $album['title'];
            
        $this->year = $album['year'];
            
        $this->record_comp = $album['record_comp'];
            
        $this->image = $album['image'];
            
        $this->idartist = $album['idartist'];  
        
        return $this;
    }
}
//select