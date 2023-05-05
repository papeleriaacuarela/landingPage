<?php
    class App{
        function __construct(){
            echo "<p>Nueva app</p>";
            // Capturar url
            $url = $_GET['url'];
            $url = rtrim($url, '/'); //Quitar "/" este caracter si se encuentran varios seguidos o que no necesite
            $url = explode('/', $url); //Busca el caracter "/" y genera un arreglo con los parametros de la url

            //var_dump($url);
            $archivoController = 'controllers/'.$url[0].'.php';
            // Validacion si exite el controlador
            if(file_exists($archivoController)){
                
                require_once $archivoController;
                $controller = new $url[0];
                //Validar si el metodo existe
                if(isset($url[1])){
                    $controller->{$url[1]}();
                }
            
            }else{
                $controller = new Error();
            }
        }
    }
?>