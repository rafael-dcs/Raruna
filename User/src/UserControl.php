﻿<?php
session_start();

include "Models/User.php";

function checkInternalAccess(){
    if(!isset($_SESSION['user'])){
        header("Location: ../index.php");
    }
}

function checkExternalAccess(){
    if(isset($_SESSION['user'])){
        header("Location: User/feed.php");
    }
}

function login($email, $password){
    $user = new User;
    $user = $user->getUser($email);
    if(password_verify($password, $user->password)){
        $_SESSION['user'] = $user->email;
        checkExternalAccess();
    }
}

function logout($email){
    if($_SESSION['user'] == $email){
        unset($_SESSION['user']);
        checkInternalAccess();
    }
}

function register($email, $password, $name){
    $user = new User;
    $user->email = $email;
    $user->password = $password;
    $user->name = $name;
    if($user->postUser()){
        login($email, $password);
    }
}

function profile($email){
    $user = new User;
    $user = $user->getUser($email);
    return $user;
}

function editPassword($email, $oldpassword, $newpassword){
    $user = new User;
    $user = $user->getUser($email);
    if(password_verify($oldpassword, $user->password)){
        $user->putUser('password', $newpassword, $email);
    }
}

function editAccount($field, $value, $email){
    $user = new User;
    $user->putUser($field, $value, $email);
}

function deleteAccount($email){
    if(User::deleteUser($email)){
        unset($_SESSION['user']);
        checkInternalAccess();   
    } 
}