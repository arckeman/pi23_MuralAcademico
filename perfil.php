
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfil</title>

    <?php include 'bases/head.php'; ?>

<style type="text/css">
a{
    color:black;
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
.container
{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(325px, auto));
  gap: 1.0rem;
  margin-top: 40px;
  padding: 20px;
  padding-top: 1px;
  border:2px solid black;
  margin-left:60px;
  margin-bottom:60px;
  margin-right:60px;
  background-color:#DCDCDC;
}

.container .box
{
  position: relative;
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-radius: 0.5rem;
  box-shadow: var(--box-shadow);
  
}
body {
  padding-top: 56px;
}

.carousel-item {
  height: 65vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.portfolio-item {
  margin-bottom: 30px;
}
</style>

<link rel="stylesheet" type="text/css" href="perfil.css">
</head>

<body>
  <!-- INCLUINDO CÓDIGO DE MENU COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/menu.php'; ?>

  <h2>Página de Perfil</h2>

  <div class="container">



<div class="box">
  <div class="foto1">
    <div class="card h-100">
      <a href="meusdados.php">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        
          <h4 >Meus Dados</h4>
        
      </a>

    </div>
  </div>
</div>
</div>

<div class="box">
  <div class="foto1">
    <div class="card h-100">
      <a href="nucleos.php">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        
          <h4 >Gerenciar Núcleos</h4>
        
      </a>

    </div>
  </div>
</div>
<<<<<<< HEAD

  <div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="foto3">
    <div class="card h-100">
      <a href="area_crud.php">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        <h4>  Gerenciar Áreas</h4>
      </a>
    </div>
  </div>
=======
>>>>>>> 1f710621e88fa02ddc8a30f1338ba69ec164134d
</div>
<div class="box">
  <div class="foto1">
    <div class="card h-100">
      <a href="publicos.php">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        
          <h4 >Gerenciar Áreas</h4>
        
      </a>

    </div>
  </div>
</div>
</div>
<div class="box">
  <div class="foto1">
    <div class="card h-100">
      <a href="usuarios.php">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        
          <h4 >Gerenciar Públicos</h4>
        
      </a>

    </div>
  </div>
</div>
</div>
<div class="box">
  <div class="foto1">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/perfil1.png" alt="" widht="200px" height="100px">
        
          <h4 >Gerenciar Usuários</h4>
        
      </a>

    </div>
  </div>
</div>
</div>


  </div>
  </div>
</div>
<?php include 'bases/rodape.php'; ?>

</body>

</html>