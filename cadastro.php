<!DOCTYPE html>
<html lang="en">

<!--head-->
<?php include 'bases/head.php' ?>

<body>
<!--menu-->
<?php include 'bases/menu.php' ?>

<div class="cadastro1">

        <div class="informacoes1">

        <div class="imagem1">
        <img class="img-fluid rounded" src="src/img/fotodoif.jpg" width="75%" height="60%" alt="">
        </div>

        <div class="texto1">
        
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

        <p><input type="submit" value="Cadastrar"></p>
        </form>

        </div>
        
        </div>
</div>

<!--rodape-->
<?php include 'bases/rodape.php' ?>
</body>

</html>
