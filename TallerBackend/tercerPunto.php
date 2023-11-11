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
<form action="respuesta_tercerPunto.php" method ="GET" class="row g-3">
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombres" id="nombre" class="form-control" required id="inputEmail4" placeholder="Ingrese sus Nombres">
  </div>
  <div class="col-md-6">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" name="apellido" id="edad" class="form-control" required id="inputEmail4" placeholder="Ingrese su Apellido">
  </div>
  <div class="col-md-6">
    <label for="numeroCedula" class="form-label">Numero de Cedula</label>
    <input type="number" name="numeroCedula" id="edad" class="form-control" required id="inputEmail4" placeholder="Ingrese su numeroCedula">
  </div>
  <div class="col-12">
    <button type="submit" name ="enviar" class="btn btn-primary">enviar</button>
  </div>
</form>
    <section>
        <a href="../TallerBackend/cuartoPunto.php">Click para dirigirse al cuarto punto</a>
    </section>
    <script src="../js/main2.js"></script>
</body>
</html>