<?php
    class Controller{

        function __construct(){
            echo "<p>controller base</p>";
            $this->view = new View();
        }
    }    
?>