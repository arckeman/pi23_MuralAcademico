<!DOCTYPE html>
<html lang="en">

<!--head-->
<?php include 'bases/head.php' ?>

<body>
    <?php
    session_start();

   //Remore as variáveis de sessão
    session_unset();

    //Encerra toda a sessão
    session_destroy();

    $result = $conn->query($sql);
    if($result){
        $conn->close();
        header("location: ../index.php");
        die();
    }
    ?>

<!--rodape-->
<?php include 'bases/rodape.php' ?>
</body>

</html>