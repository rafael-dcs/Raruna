<?php

class Artist{
    var $idartist;
    var $name;
    var $image;

    function getArtists(){
        $query = '
            select * from artists 
        ';
        $stmt = $conexao->query($query);
        $artists = $stmt->fetchAll();
    
        for($artists as $artist){
            $this->idartist = $artist['idartist'];
    
            $this->name = $artist['name'];     
            
            $this->image = $artist['image'];                    
        }    
    }
    
    function getArtist($valorId){
        $query = '
            select * from artists where idartist = $valorId
        ';
        $stmt = $conexao->query($query);
        $artist = $stmt->fetchAll();
    
        $this->idartist = $artist['idartist'];
    
        $this->name = $artist['name'];     
            
        $this->image = $artist['image'];                    
    } 
}
//select