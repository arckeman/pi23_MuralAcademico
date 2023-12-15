<!DOCTYPE html>
<html lang="en">
<!--head-->
<?php include 'bases/head.php' ?>
  <style type="text/css">
  form{
    display:inline-block;
    justify-content: center;
    border:2px solid #000000;
    background-color:#DCDCDC;
    margin:6px;
    margin-left:0;
    margin-right:80px;
  }
  form input{
    margin: 0 0 20px;
    padding: 10px 25px;
    width: 50%;
    color:black;   
  }
  .botao{
  text-align: center;
  color:white;
  background-color:rgb(0, 63, 0) ;
  font-weight: bold;
  border-radius: 20px;
  margin-left:70px;
}   
h2{
  text-align:center;
}
.imagem{
  width:400px;
  height:380px;
  margin-top:0;
  display:inline-block;
  margin-left:80px;
}
.principal1{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(325px, auto));
  gap: 1.0rem;
  margin-top: 40px;
  padding: 20px;
  padding-top: 1px;
  margin-bottom:250px;
}
  </style>
</head>
<body>
<!--menu-->
<?php include 'bases/menu.php' ?>
<div class="principal1">

<div class="imagem">
<img class="img-fluid rounded" src="src/img/fotodoif.jpg" width="75%" height="60%" alt="">
</div>

<div class="texto">
<div>

<div class="form">
<form action="php/bd_autenticação.php" method="post">
<h2>Login de Autenticação</h2>
<p>
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" id="usuario">
</p>
<p>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha">
</p>
<?php
         if (isset($_GET['erro'])) {
         echo "<p class='text-danger'>".$_GET['erro']."</p>";
         } ?>
<p><input class="botao" type="submit" value="Entrar"></p>
</form>
</div>
</div>
</div>
</div>
<!--rodape-->
<?php include 'bases/rodape.php' ?>
</body>
</html>
