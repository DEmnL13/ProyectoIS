<?php 
    /*if ( ! $_POST ){
        header('location:  ./');
        return ;
    }

    $nombre = $_POST['empresa'] ?  $_POST['empresa']: null;
    $apellido = $_POST['nombre'] ?  $_POST['nombre']: null;
    $correo = $_POST['correo'] ?  $_POST['correo']: null;
    $cantidad = $_POST['cantidad'] ? $_POST['cantidad']: null;
    $tarjeta = $_POST['infotarjeta'] ?  $_POST['infotarjeta']: null;

    //establecer Variable de respuesta
    $response = array();
    $response['status'] = true;
    
    //Validar si están llenos los datos
    foreach  ($_POST as $key => $value ) {//recorre todos los items del POST 
        if ( !$value ) {
            $response['status'] = false;
            $response["error"][$key] = "$key es requerido";
        }

    }

    if ( !$tarjeta ){
        $response['status'] = false;
        $response["error"]["tarjeta"] = "No se ingreso información de la Tarjeta";

    }

     echo json_encode($response) ;

?>*/
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="usuais";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    $empresa=$_POST['empresa'];
    $colaborador=$_POST['colaborador'];
    $correo=$_POST['correo'];
    $cantidad=$_POST['cantidad'];
    $infotarjeta=$_POST['infotarjeta'];
  
  $query=("INSERT INTO donat(empresa, colaborador, correo, cantidad, infotarjeta) VALUES ('".$empresa."','".$colaborador."','".$correo."','".$cantidad."','".$infotarjeta."')");
  $result = mysqli_query($conn, $query);
  
  if(!$result){
      echo "ta bad";
  }
  else{
      header("Location: index.html");
  }

?>