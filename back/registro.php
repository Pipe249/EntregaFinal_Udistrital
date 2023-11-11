<?php 

    include '../DB/conexion.php';

    echo "hola";
    if(isset($_POST['buttonRegister'])){
        $names = $_POST['name_lastName'];
        $nummber = $_POST['contactNumber'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];

        $pass_encrypt = base64_encode($pass);

        mysqli_query($conexion, "INSERT INTO users
        (Names, TelContact, Mail, Pass ) VALUES ('$names', '$nummber', '$mail', '$pass_encrypt')");

        header('location:../html/home.php');
    }
?>