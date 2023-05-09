<?php
    class Errores extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->mensaje =  "Error generico";
            $this->view->render('Errores/index');
            // echo "<p>Error al cargar el recurso</p>";
        }

    }
?>