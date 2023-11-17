<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css"/>
    <title>Cadastro</title>

<style>
    {
    font-family: 'Anton', sans-serif;
    color: black;
    margin:0;
    padding: 0;
    box-sizing: border-box;
    scroll-padding-top: 4rem;
    scroll-behavior: smooth;
    list-style: none;
    text-decoration: none;
    background-color:white;
    }

    header
    {
    width: 85%;
    margin: 0 auto;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px;
    transition: 0.5s linear;
    border-style: solid;
    border-color:green;
    border-bottom-width: 0.5px;
    border-top-width: 0px;
    border-right-width: 0px;
    border-left-width: 0px;
    }

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}

.rodape{
    text-align:center;

}
</style>
</head>
<body>
    
<!--Cabeçalho-->
<header>
<div class="menubaixo">
        <input type="checkbox" id="chec">
        <label for="chec">
            <i class="bi bi-list"><svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg></i>
        </label>

        <nav>
            <ul>
                <h1>Menu</h1>
                <li>             
                    <a href=""><i class="bi bi-person-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg></i>  Login</a>
                </li>

                <li>
                    <a href=""><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                        <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                        </svg></i>  Salvos</a>
                </li>

                <li>
                    <a href=""><i class="bi bi-gear-fill"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                      </svg></i>   Configurações</a>
                </li>

                <li>
                    <form action="" method="post">
                       
                        <div class="busca">  
                          <input type="search" id="busca" placeholder="Buscar..." name="q">
                          <button type="submit">OK</button>
                        </div>
                     
                      </form>
                </li>
            </ul>
        </nav>
        </div>
</header>

<div class="principal">
    <div class="informacoes">
        <label>

    </div>
</div>

<!--Fora da Tela-->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">icon menu</button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-4">
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action" href="#list-item-1">Início</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-2">Salvos</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-3">Configurações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Form-->
<form>
        <label for="perfil">PERFIL</label>
        <div class="img">
            <img>
        </div>
        <div class="form-floating mb-3">
            <input type="email" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder="@gmail.com" value="@gmail.com">
            <label for="floatingPlaintextInput">FULANO DE TAL</label>
        </div>

        <h3>NOTIFICAÇÕES</h3>
        <label>E-MAIL</label>
        <div class="form-floating mb-3">
            <input type="email" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder="@gmail.com">
            <label for="floatingEmptyPlaintextInput">Essas configuações se aplicam às notificações que você recebe por e-mail.</label>
            <h3>Permitir notificações por e-mail</h3>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">On</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Off</label>
                </div>
        </div>

    </form>

    <!--Rodapé-->
    <footer>

        <p>Copyright © 2023 | Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte</p>

    </footer>
</body>
</html>