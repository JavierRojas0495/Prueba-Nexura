<?php
@session_start();
function dd($var){
    echo "<pre>";
    die(print_r($var));
}

function redirect($url){
    echo "<script type='text/javascript'>"
        . " window.location.href='$url';"
       . "</script>";
}

function getUrl($modulo,$controlador,$funcion,$parametros=false,$ajax=false){
    
    if($ajax!=false){
        $page="ajax";
    }
    else{
        $page="index";
    }
    
    $url="$page.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";
    
    if($parametros!=false){
        foreach($parametros as $nombre=>$valor){
            $url.="&$nombre=$valor";
        }
    }
    return $url;
}

function resolve(){
    
    $modulo=  ucwords($_GET['modulo']);
    $controlador= $_GET['controlador'];
    $funcion= $_GET['funcion'];
    //dd();
        if(is_dir("../controller/$modulo")){
        if(file_exists("../controller/$modulo/".$controlador."Controller.php")){
            include_once "../controller/$modulo/".$controlador."Controller.php";
            
            $nombreClase=$controlador."Controller";
            $objControlador= new $nombreClase();
            
            if(method_exists($objControlador, $funcion)){
                $objControlador->$funcion();
            }
            else{
                echo "La función especificada no existe";
            }
        }
        else{
            echo "El controlador especificado no existe";
        }
    }
    else{
        echo "El módulo especificado no existe";
    }
    
}

?>