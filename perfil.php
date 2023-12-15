
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfil</title>

    <?php include 'bases/head.php'; ?>

<style type="text/css">
a{
    color:black;
}
.container{
  border:2px solid black;
  margin-left:60px;
  margin-bottom:60px;
  margin-right:60px;
  background-color:#DCDCDC;
  
}
h2{
  margin-left:60px;
  margin-top:40px;
}

div{
  display: inline-block;
  
}
img{
  margin:20px;
}
h4{
  text-align:center;
}

</style>

<link rel="stylesheet" type="text/css" href="perfil.css">
</head>

<body>
  <!-- INCLUINDO CÓDIGO DE MENU COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/menu.php'; ?>

  <h2>Página de Perfil</h2>

  <div class="container">



<div class="row">
    <div class="col-lg-4 col-md-6 col-12 mb-4">

    <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto1">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        
          <h4 >Meus Dados</h4>
        
      </a>

    </div>
  </div>
</div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto2">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
      
          <h4 >Gerenciar Núcleos</h4>
        
      </a>

    </div>
  </div>
</div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto3">
    <div class="card h-100">
      <a href="p_areas.php">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        <h4>  Gerenciar Áreas</h4>
      </a>
    </div>
  </div>
</div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto4">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        <h4> Gerenciar Públicos</h4>
      </a>
    </div>
  </div>
</div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto5">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        <h4> Gerenciar Usuários</h4>
      </a>
    </div>
  </div>
</div>

  </div>
  </div>
</div>
<?php include 'bases/rodape.php'; ?>

</body>

</html>