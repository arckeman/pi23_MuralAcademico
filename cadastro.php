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
.informacoes{

  margin-bottom:30px;
  margin-top:30px;
}
.imagem{margin-left:30px;
 
}
.texto{
  border-left:1px solid black;

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
<body>
<!--menu-->
<?php include 'bases/menu.php' ?>

<div class="principal1">

        <div class="informacoes">

        <div class="imagem">
        <img class="img-fluid rounded" src="src/img/fotodoif.jpg" width="75%" height="60%" alt="">
        </div>

        <div class="texto">
        
        <h2>Cadastro de Usuário</h2>

        <form action="php/bd_registro.php" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </p>

        <p><input class="botao" type="submit" value="Cadastrar"></p>
        </form>

        </div>
        
        </div>
</div>

<!--rodape-->
<?php include 'bases/rodape.php' ?>
</body>

</html>
