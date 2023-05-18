<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="usuais";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){die("Algo salio mal :s ".mysqli_connect_error());}
$nombre=$_POST["usuario"];
$password=$_POST["password"];

$query=mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario='".$nombre."' and password='".$password."' ");
$nr=mysqli_num_rows($query);

if($nr==1){
    
/*echo "si jalo!".$nombre;*/
header("Location: index.php");
}
else if($nr==0){header("Location: login.html");}
?>