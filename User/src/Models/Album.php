<?php

include "../Connection.php";

class Album{
    var $idalbum;
    var $title;
    var $year;
    var $record_comp;
    var $image;
    var $idartist;

    
    function getAlbuns(){
        $query = '
            select * from albuns 
        ';
        $conn = openConnection();
        $stmt = $conn->query($query);
        $albuns = $stmt->fetchAll();
   
        foreach($albuns as $album){
            $this->title = $album['title'];
            
            $this->year = $album['year'];
            
            $this->record_comp = $album['record_comp'];
            
            $this->image = $album['image'];
            
            $this->idartist = $album['idartist'];                
        }  
        
    }

    function getAlbum($valorId){
        $query = "
            select * from albuns where idalbum = $valorId
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        $album = $stmt->fetchAll();
        
        $this->title = $album['title'];
            
        $this->year = $album['year'];
            
        $this->record_comp = $album['record_comp'];
            
        $this->image = $album['image'];
            
        $this->idartist = $album['idartist'];  
           
    }
}
//select