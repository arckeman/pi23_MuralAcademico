<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfil</title>

    <!-- INCLUINDO CÓDIGO DE HEAD COMUM A TODAS AS PÁGINAS -->
    <?php include 'bases/head.php'; ?>
<style type="text/css">
a{
    color:black;
}
*{
    font-family: 'Anton', sans-serif;
    color: black;
    margin:0;
    padding: 0;
    box-sizing: border-box;
    scroll-padding-top: 4rem;
    scroll-behavior: smooth;
    list-style: none;
    text-decoration: none;
    background-color:white;
    }
    .foto1{
        text-align:left;;
    }
    .foto2{
        text-align:center;;
    }
    .foto1{
        text-align:left;;
    }
    .foto1{
        text-align:left;;
    }
    .foto1{
        text-align:left;;
    }
</style>

<link rel="stylesheet" type="text/css" href="perfil.css">
</head>

<body>
  <!-- INCLUINDO CÓDIGO DE MENU COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/menu.php'; ?>


  <div class="container mt-5">

  <h2>Página de Perfil</h2>

<div class="row">

<div class="col-lg-4 col-sm-6 portfolio-item">
<div class="foto1">
    <div class="card h-100">
      <a href="p_meus_dados.php">
        <img class="card-img-top"src="src/img/LOGIN.png" alt="" widht="200px" height="100px">
        <div class="card-body">
          <h4 class="card-title">
            Meus Dados
        </div>
      </a>
    </div>
</div>
  </div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto2">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/LOGIN.png" alt="" widht="200px" height="100px">
        <div class="card-body">
          <h4 class="card-title">
            Gerenciar Núcleos
        </div>
      </a>
    </div>
  </div>
</div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto3">
    <div class="card h-100">
      <a href="p_areas.php">
        <img class="card-img-top" src="src/img/LOGIN.png" alt="" widht="200px" height="100px">
        <div class="card-body">
          <h4 class="card-title">
            Gerenciar Áreas
        </div>
      </a>
    </div>
  </div>
</div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto4">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/LOGIN.png" alt="" widht="200px" height="100px">
        <div class="card-body">
          <h4 class="card-title">
            Gerenciar Públicos
        </div>
      </a>
    </div>
  </div>
</div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto5">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/LOGIN.png" alt="" widht="200px" height="100px">
        <div class="card-body">
          <h4 class="card-title">
            Gerenciar Usuários
        </div>
      </a>
    </div>
  </div>
</div>

  </div>
  </div>
  

   <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
   <?php include 'bases/rodape.php'; ?>

</body>

</html>