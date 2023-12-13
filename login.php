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
    padding: 0;
    box-sizing: border-box;
    scroll-padding-top: 4rem;
    scroll-behavior: smooth;
    list-style: none;
    text-decoration: none;
  
    }

h2 {
  font-family:Times, Times New Roman, serif ; 
  font-weight: 600; 
  font-size:20px; 
  color:black;
  text-align: center;
  background-color:#2E8B57;
}



  </style>
<body>
<!--menu-->
<?php include 'bases/menu.php' ?>
<div class="container">
<div class="login">
        <h2>Login de Autenticação</h2>

        <form action="php/bd_autenticação.php" method="post">
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
        <p><input type="submit" value="Cadastrar"></p>
        </form>

        </div>
        
        </div>
</div>
        </div>
<!--rodape-->
<?php include 'bases/rodape.php' ?>
</body>

</html>