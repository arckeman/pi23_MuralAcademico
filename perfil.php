<!DOCTYPE html>
<html lang="en">

<head>
    <title>Núcleos de Pesquisa</title>

    <!-- INCLUINDO CÓDIGO DE HEAD COMUM A TODAS AS PÁGINAS -->
    <?php include 'bases/head.php'; ?>

    <style type="text/css">
    .carousel-item{
        height: 200px;
    } 
    div{
      width: 100px;
    height: 100px;
    width: 100px;
    height: 100px;
    display: inline-block;
    }
    #card-body{
      display: inline-grid;;
    }
    h4{
      font-size:20px;
    }
  </style>

</head>

<body>
  <!-- INCLUINDO CÓDIGO DE MENU COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/menu.php'; ?>

<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location: login.php");
    die();
}
?>

  <div class="container">

    <div class="row mt-4">
        <div class="col-12">
            <h4 class="text-center">Página de Perfil</h4>
        </div>
    </div>


    <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <a href="">
                <div class="card" style="width: 18rem;">
                <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/18765757-icone-de-perfil-de-usuario-em-estilo-simples-ilustracao-em-avatar-membro-no-fundo-isolado-conceito-de-negocio-de-sinal-de-permissao-humana-vetor.jpg" width="100px" height="100px"alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Meus Dados</h5>
                        
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <a href="">
                <div class="card" style="width: 18rem;">
                <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/18765757-icone-de-perfil-de-usuario-em-estilo-simples-ilustracao-em-avatar-membro-no-fundo-isolado-conceito-de-negocio-de-sinal-de-permissao-humana-vetor.jpg" width="100px" height="100px"alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gerenciar Núcleos</h5>
                       
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <a href="">
                <div class="card" style="width: 18rem;">
                <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/18765757-icone-de-perfil-de-usuario-em-estilo-simples-ilustracao-em-avatar-membro-no-fundo-isolado-conceito-de-negocio-de-sinal-de-permissao-humana-vetor.jpg" width="100px" height="100px"alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gerenciar Áreas</h5>
                        
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <a href="">
                <div class="card" style="width: 18rem;">
                <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/18765757-icone-de-perfil-de-usuario-em-estilo-simples-ilustracao-em-avatar-membro-no-fundo-isolado-conceito-de-negocio-de-sinal-de-permissao-humana-vetor.jpg" width="100px" height="100px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gerenciar Públicos</h5>
                      
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <a href="">
                <div class="card" style="width: 18rem;">
                    <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/18765757-icone-de-perfil-de-usuario-em-estilo-simples-ilustracao-em-avatar-membro-no-fundo-isolado-conceito-de-negocio-de-sinal-de-permissao-humana-vetor.jpg" width="100px" height="100px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gerenciar Usuários</h5>
                        
                    </div>
                </div>
            </a>
        </div>


    </div>

  </div>
  
<br/><br/>
   <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
   <?php include 'bases/rodape.php'; ?>

</body>

</html>