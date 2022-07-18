<?php

function saludarNombre(){
    echo "Hola David";
}

function saludar(){
    echo "Hola...";
}

function despedir($nombre, $apellido){
    echo "Adios " . $nombre ." " .$apellido;
}

saludar();
saludarNombre();
echo "<br/>";
despedir("David ", " Mayorga");


?>