<?php
    class View{

        function __construct(){
            echo "<p>view base</p>";
        }

        function render($nombre){
            require 'views/'.$nombre.'.php'; 
        }
    }    
?>