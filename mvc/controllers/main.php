<?php
    class Main extends Controller{

        function __construct(){
            parent::__construct();
            echo "<p>Nuevo controlador Main</p>";
        }
        function saludo(){
            echo "<p>Ola</p>";
        }
    }
