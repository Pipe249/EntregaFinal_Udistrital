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
<form action="TallerBack.php" method ="POST" class="row g-3">
  <div class="col-md-6">
    <label for="No1" class="form-label">Numero 1</label>
    <input type="number" step="any" name="numero1" id="n1" class="form-control" required id="inputEmail4" placeholder="Digite numero 1">
  </div>
  <div class="col-md-6">
    <label for="No2" class="form-label">Numero 2</label>
    <input step="any" type="number" name="numero2" id="n2" required class="form-control" id="inputPassword4" placeholder="Digite numero 2">
  </div>
  <div class="col-md-12">
    <label for="operacion" class="form-label">Operación a realizar</label>
    <select required name="operacion" id="inputState" class="form-select">
      <option value="">Seleccione una opción</option>
      <option value="1">Suma</option>
      <option value="2">Resta</option>
      <option value="3">Multiplicación</option>
      <option value="4">División</option>
    </select>
  <div class="col-12">
    <button type="submit" name ="operar" class="btn btn-primary">Operar</button>
  </div>
</form>

    <?php 
        if(isset($_POST['operar'])){

            $Numero1 = $_POST['numero1'];
            $Numero2 = $_POST['numero2'];
            $ope = $_POST['operacion'];

            switch ($ope) {
                case '1':
                    $total = $Numero1 + $Numero2;
                    $ope2 = 'suma';
                    break;
                    case '2':
                    $total = $Numero1 - $Numero2;
                    $ope2 = 'resta';
                    break;
                    case '3':
                    $total = $Numero1 * $Numero2;
                    $ope2 = 'Multiplicacion';
                    break;
                    case '4':
                    $total = $Numero1 / $Numero2;
                    $ope2 = 'División';
                    break;
            }
            echo 'La '.$ope2.' entre el numero '.$Numero1.' y el Numero '.$Numero2.' es igual a = '.$total;
        }
    
    
    
    ?>
    <section>
        <a href="../TallerBackend/segundoPunto.php">Click para dirigirse al segundo punto</a>
    </section>
    <script src="../js/main2.js"></script>
</body>
</html>