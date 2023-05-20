<?php

if(isset($_FILES['file'])) {
    //echo "Llego info   ->  ";
}else {
    //echo "No llego nada exist";
}

$resultado = "";
$ruta_carpeta = $_POST['ruta'];
$nombre_archivo = "pdf_".date("dHis").".".pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
$ruta_guardar_archivo = "../$ruta_carpeta/" . $nombre_archivo;

if(move_uploaded_file($_FILES["file"]["tmp_name"], $ruta_guardar_archivo)){
    $resultado = str_replace("../", "",$ruta_guardar_archivo);
    
}else{
    $resultado = false;
}


echo $resultado;

?>
