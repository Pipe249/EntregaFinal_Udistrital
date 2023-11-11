<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/EstilosMenu.css">
    <link rel="stylesheet" href="../css/TallerBack.css">
    <title>Taller back</title>
</head>
<body>
<div id="navigation-menu"></div>
<form action="segundoPunto.php" method ="POST" class="row g-3">
  <div class="col-md-6">
    <label for="edad" class="form-label">Edad</label>
    <input type="number" name="edad" id="edad" class="form-control" required id="inputEmail4" placeholder="Ingrese su edad">
  </div>
  <div class="col-12">
    <button type="submit" name ="enviar" class="btn btn-primary">enviar</button>
  </div>
</form>

    <?php 
        if(isset($_POST['enviar'])){

            $edad = $_POST['edad'];

            if($edad >= 18 && $edad <= 100) {
                echo '<h1>El usuario es Mayor de edad</h1>';
            } if($edad > 100) {
                echo '<h1>El usuario ingreso un valor incorrecto</h1>';
            } if($edad > 0 && $edad < 18) {
                echo '<h1>El usuario es menor de edad</h1>';
            } if($edad <= 0) {
                echo '<h1>El usuario no ha nacido</h1>';
            }
        }
    
    
    
    ?>
    <section>
        <a href="../TallerBackend/tercerPunto.php">Click para dirigirse al tercer punto</a>
    </section>
    <script src="../js/main2.js"></script>
</body>
</html>