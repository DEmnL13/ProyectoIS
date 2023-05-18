<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="usuais";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  
  $nombre=$_POST['usuario'];
  $password=$_POST['password'];
  
  $query=("INSERT INTO usuarios(usuario, password) VALUES ('".$nombre."','".$password."')");
  $result = mysqli_query($conn, $query);
  
  if(!$result){
      echo "ta bad";
  }
  else{
      header("Location: login.html");
  }

?>