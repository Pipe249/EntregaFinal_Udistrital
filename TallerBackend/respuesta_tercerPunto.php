<?php   
    if(isset($_GET['enviar'])){
        $nombres = $_GET['nombres'];
        $apellido = $_GET['apellido'];
        $id = $_GET['numeroCedula'];

        echo 'nombre ='.$nombres.'<br>';
        echo 'apellido ='.$apellido.'<br>';
        echo 'cedula ='.$id.'<br>';
    }

?>