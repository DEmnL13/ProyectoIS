<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="usuais";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    $nombrecont=$_POST['nombrecont'];
    $apellidocont=$_POST['apellidocont'];
    $correocont=$_POST['correocont'];
    $mensajecont=$_POST['mensajecont'];
  
  $query=("INSERT INTO contact(nombrecont, apellidocont, correocont, mensajecont) VALUES ('".$nombrecont."','".$apellidocont."','".$correocont."','".$mensajecont."')");
  $result = mysqli_query($conn, $query);
  
  if(!$result){
      echo "ta bad";
  }
  else{
      header("Location: index.html");
  }

?>