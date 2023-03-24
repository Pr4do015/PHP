<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
 
  <?php
    $numeros = [1,3,6,9,12,15];

    

    foreach ($numeros as $key => $value) {

      $ispar =(($value %2) ==0) ;

      if ($ispar) {
        echo'<div class="alert alert-danger">';
        echo"   <strong>Success!</strong> Sucesso $value";
        echo'</div>';
      }
      else{
      echo'<div class="alert alert-success">';
      echo"   <strong>Success!</strong> Sucesso $value";
      echo'</div>';
      }
    }
  ?>

</div>

</body>
</html> 