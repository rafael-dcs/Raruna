<?php

class User{
    var $iduser;
    var $email;
    var $password;
    var $name;

    function getUser($email){
        $query = "
            select * from users where email = '$email' limit 1
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt->rowCount() > 0){
            $user = $stmt->fetchAll()[0];
            $this->iduser = $user['iduser'];
            $this->email = $user['email'];
            $this->password = $user['password'];
            $this->name = $user['name'];
            $this->image = $user['image'];
            return $this;
        }
        return null;
    }

    function postUser(){
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $query = "
            insert into users (email, password, name) values ('$this->email', '$this->password', '$this->name')
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt){
            return true;
        }else{
            return false;
        }
    }

    function putUser($field, $value, $email){
        if($field == "password"){
            $value = password_hash($value, PASSWORD_DEFAULT);
        }
        $query = "
            update users set $field = '$value' where email = '$email' 
        ";
        $conn = openConnection();
        $stmt = $conn->query($query);
        if($stmt){
            return true;
        }else{
            return false;
        }
    }

    function putUserImage($image, $file, $email){
        if($this->putUser("image", $image, $email)){
            if(is_uploaded_file($file)){
                file_put_contents("../assets/img/" . $image, file_get_contents($file));
            }
        }
    }

    static function deleteUser($email){
        $query = "
            delete from users where email = '$email'
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