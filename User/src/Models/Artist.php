<?php

class Artist{
    var $idartist;
    var $name;
    var $image;

    static function getArtists(){
        $query = '
            select * from artists 
        ';
        $conn = openConnection();
        $stmt = $conn->query($query);
        $artists = $stmt->fetchAll();
        return $artists;
        // foreach($artists as $artist){
        //     $this->idartist = $artist['idartist'];
    
        //     $this->name = $artist['name'];     
            
        //     $this->image = $artist['image'];                    
        // }    
    }
    
    function getArtist($valorId){
        $query = "
            select * from artists where idartist = $valorId
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        $artist = $stmt->fetchAll()[0];
    
        $this->idartist = $artist['idartist'];
    
        $this->name = $artist['name'];     
            
        $this->image = $artist['image'];
        
        return $this;
    } 
}
//select