<?php
    class Main extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->render('main/index');
            //echo "<p>Nuevo controlador Main</p>";
        }

        //METODOS DE LA VISTA ACTUAL
        function saludo(){
            echo "<p>Ola</p>";
        }
    }
