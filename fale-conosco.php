<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Bard Hut!</title>
        <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
 
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

  </head>
<body>

<?php
include_once'./include/_menu.php';
?>

<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Primeiro nome</label>
      <input type="text" class="form-control " id="validationServer01" placeholder="Nome" required>
      
      
      <div class="valid-feedback">
        Tudo certo!
      </div>

      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Sobrenome</label>
      <input type="text" class="form-control " id="validationServer02" placeholder="Sobrenome" required>

      
    
      <div class="valid-feedback">
        Tudo certo!
      </div>


    </div>
    
 
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Cidade</label>
      <input type="text" class="form-control " id="validationServer03" placeholder="Cidade" required>


      <div class="invalid-feedback">
        Por favor, informe uma cidade válida.
      </div>

      
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">Estado</label>
      <input type="text" class="form-control " id="validationServer04" placeholder="Estado" required>
      <div class="invalid-feedback">
        Por favor, informe um estado válido.
      </div>
    </div>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Escolher arquivo...</label>
    <div class="invalid-feedback">Exemplo de feedback inválido para input file</div>
  </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">
        Você deve concordar, antes de continuar.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>

  </div>
</form>

<br><br>
<?php

include_once './include/_footer.php';

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

  </body>
</html>

