<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
require '../database.php';
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $data=array(
        'username' => $username,
        'password' => $password
    );
    db_insert('`user`',$data);
    echo json_encode($data);
}