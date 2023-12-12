<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconectar</title>
</head>
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
        header("Location: index.php");
        die();
    }
    ?>
</body>
</html>