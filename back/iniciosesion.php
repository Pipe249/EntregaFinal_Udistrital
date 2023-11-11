<?php 
    include '../DB/conexion.php';

    

    if(isset($_POST['buttonInicio'])){
        $user = $_POST['user'];
        $pass = $_POST['password'];

        $pass_encrypt = base64_encode($pass);
        $validacion = mysqli_query($conexion, "SELECT * FROM users WHERE Mail = '$user' AND Pass = '$pass_encrypt'");

        $cont = mysqli_num_rows($validacion);

        if($cont == 1){
            session_start();
            $_SESSION['user'] = $user;
            header('location:../html/home.php?status=2');
        } else {
            header('location:../html/index.php?status=4');
        }
    }

?>