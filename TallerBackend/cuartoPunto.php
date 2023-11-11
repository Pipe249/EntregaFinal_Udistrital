<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/EstilosMenu.css">
    <link rel="stylesheet" href="../css/TallerBack.css">
    <title>Taller back 3</title>
</head>
<body>
<div id="navigation-menu"></div>
<form action="cuartoPunto.php" method ="POST" class="row g-3">
  <div class="col-md-6">
    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
    <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required id="inputEmail4" placeholder="Ingrese su Fecha de Nacimiento">
  </div>
  <div class="col-12">
    <button type="submit" name ="calcular" class="btn btn-primary">Calcular edad</button>
  </div>
</form>

    <?php 
        if(isset($_POST['calcular'])){

           $fecha_nacimiento = $_POST['fechaNacimiento'];
           $fecha = new DateTime($_POST['fechaNacimiento']);
           $fecha_actual_n = date('Y-m-d');
           $fecha_act = new DateTime(date('Y-m-d'));

           $diff = $fecha->diff($fecha_act);
           $año = $diff->y;
           $mes = $diff->m;
           $dia = $diff->d;

           echo 'Fecha de nacimiento = '.$fecha_nacimiento.'<br>'.
             'Fecha actual = '.$fecha_actual_n.'<br>'.
             'Edad = '.$año.' año(s) '.$mes.' mese(s) y '.$dia.' dia(s)';

        }
    
    ?>
    <script src="../js/main2.js"></script>
</body>
</html>