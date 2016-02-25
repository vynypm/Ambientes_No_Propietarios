<?php
if($_POST){
$materias=$_POST['materias'];
$niveles=$_POST['nivel'];
$conn = new mysqli('localhost', 'root',"", "supletorio");
        if( $conn->connect_error ){ 
        $result = "No se puede establece la conexión con la BDD";
        }
    else{
        $contador=0;
        foreach ($materias as $materia=> $value) {
        $q_insert = "UPDATE `materia` SET `id_materia`=$value,`id_nivel`=$niveles WHERE id_materia=$value";
                $res = $conn->query($q_insert);
                $contador++;
                }
                if(!$res){
                 $result = 'Existi&oacute; un error al insertar.' . $conn->error;
                 } 
            else {
                 $result = 'Mensaje enviado con &eacute;xito.';
                 }
    }
}
$salidaJSON=array("result" => $result);
echo json_encode($salidaJSON);
?>