<!DOCTYPE html>
<html lang="en">

<!--head-->
<?php include 'bases/head.php' ?>
<style type="text/css">
.login{
  background:none;
  text-align:center;
  font-family:Times, Times New Roman, serif ;
    color: black;
    margin:0;
    padding:10px;
    box-sizing: border-box;
    scroll-padding-top: 4rem;
    scroll-behavior: smooth;
    list-style: none;
    text-decoration: none;
    background-size:20px;
    }

h2 {
  font-family:Times, Times New Roman, serif ; 
  font-weight: 600; 
  font-size:20px; 
  color:black;
  text-align: center;
  background-color:#8FBC8F;
  display:inline-block;
}

form{
    display:inline-block;
    flex-direction: column;
    justify-content: center;
    border:4px solid #000000;
    background-color:#DCDCDC;
    
}

form input {
   
    margin: 0 0 20px;
    padding: 10px 25px;
    width: 50%;
    color:black;
}
.botao{
  background-color:#8FBC8F;
}


  </style>
<body>
<!--menu-->
<?php include 'bases/menu.php' ?>
<div class="container">
<div class="login">
    

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
        <p><input class="botao" type="submit" value="Cadastrar"></p>
        </form>

        </div>
        
        </div>
</div>
        </div>
<!--rodape-->
<?php include 'bases/rodape.php' ?>
</body>

</html>