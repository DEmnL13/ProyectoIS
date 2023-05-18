<?php
$servidor="localhost";
$db="pruebablog";
$username="root";
$password="";

try{
    $conn=new PDO("mysql:host=$servidor;dbname=$db",$username,$password);

}catch(Exception $e){
    echo $e->GetMessage();
}