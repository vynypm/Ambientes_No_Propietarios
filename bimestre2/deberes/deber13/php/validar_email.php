<?php 
//$result = "";
	$conn =new mysqli('localhost','root','','deber_13');
 	if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  	else{
  	if (isset($_REQUEST['email'])) {
    echo $_REQUEST['email'];
    $email = $_REQUEST['email'];
    $sql = $conn->prepare("SELECT * FROM registro WHERE email=?");
    $sql->bindParam(1, $email, PDO::PARAM_STR);
    $sql->execute();
    $valid = 'true';
    if ($sql->rowCount() > 0) {
        $valid= 'false';
    } else {
       $valid='true';
    }
}
$sql=null;
$conn = null;
echo $valid;
 ?>