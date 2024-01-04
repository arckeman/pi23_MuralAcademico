<!DOCTYPE html>
<html lang="en">
<!--head-->
<?php include 'bases/head.php' ?>
  <style type="text/css">
  .botao{
  text-align: center;
  color:white;
  background-color:rgb(0, 63, 0) ;
  font-weight: bold;
  border-radius: 20px;
  margin-left:70px;
} 
.informacoes1{ 
  margin-top:30px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(325px, auto));
  gap: 1.5rem;
  margin-top: 40px;
  height: 100%;
  border-style: solid;
  border-color: green;
  border-bottom-width: 0px;
  border-top-width: 0px;
  border-right-width: 0px;
  border-left-width: 0px;
}
.imagem{margin-left:30px;
 
}
.texto{
  border-left:1px solid black;
  border-color: green;
}
form input{
  display:inline;
    text-align: center;
    padding: 15px 20px;
    border: 1px solid #eee;
    border-radius: 6px;
    background-color:lightgray ;
 
    
}
</style>
</head>
<body>
<!--menu-->
<?php include 'bases/menu.php' ?>

<div class="cadlogin">

        <div class="informacoes1">

        <div class="imagem">
        <img class="img-fluid rounded" src="src/img/fotodoif.jpg" width="75%" height="60%" alt="">
        </div>

        <div class="texto">
       
        <form action="php/bd_autenticação.php" method="post">
        <h2>Login de autenticação</h2>
        <p class="p">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p class="p">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </p>
        <?php
          if (isset($_GET['erro'])) {
          echo "<p class='text-danger'>".$_GET['erro']."</p>";
          }
        ?>
    
        <p><input class="botao" type="submit" value="Cadastrar"></p>
        
        </form>
        </div>
        </div>
        
        </div>
</div>
        </div>
        </div>
<!--rodape-->
<?php include 'bases/rodape.php' ?>
</body>
</html>
