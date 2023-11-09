<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css"/>
   
   
    <title>anuncios</title>
</head>
<style>
    *
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

    :root
    {  
    /*Box Sandow*/
    --box-shadow: 2px 2px 10px 4px rgb(14 55 54 / 15%);
    }
   
    .mural{
        text-align: center;
        padding-top: 20px;
    }
   
   
</style>
<body>

<!--menu-->

    <header>
       
            <a href="https://portal.ifrn.edu.br/"><img src="fotosdosite/logoif-removebg-preview.png" width="40%"></a>
       


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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">&#10151;</button>
                      </form>
                </li>
            </ul>
        </nav>
        </div>


        </nav>    
        </header>


<div class="principal">


<!--Informação-->


    <div class="informacoes">


        <div class="imagem">
        <img src="fotosdosite/fotodoif.jpg" width="100%" height="90%" alt="IFRN campus canguaretama">
        </div>


        <div class="texto">
            <h1>Mural Virtual do IFRN</h1>
            <p>Este site tem como objetivo publicar todos os tipos de anúncios que se escontram
               no mural fisico do IFRN campus de canguaretama, afim de estabelecer um meio de
               avisos virtuais. Fazer anúncios online se tornou essencial para pessoas que querem
               alcançar um público maior, mais segmentado e com retorno garantido. Apesar de muitas
               pessoas ainda serem apegadas à publicidade tradicional, realizar anúncios nas
               plataformas digitais se tornou importante em um mundo cada vez mais conectado.</p>              
        </div>
    </div>


<!--anuncios-->
    <h1 class="mural">Nossos Avisos</h1>


    <div class="anuncios-container">


                    <div class="box">
                        <img src="https://img.freepik.com/vetores-gratis/ilustracao-de-embaixador-de-design-plano-desenhado-a-mao_23-2149348099.jpg?w=740&t=st=1698325352~exp=1698325952~hmac=5d07b893a17c5fa53e52396695fe51c42ba5cc06c1485d1d724cc6f115c1fd37" alt="">
                        <div class="content">
                            <br/>
                            <span><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                              </svg></i></span>
                       
                            <div class="mais">
                            <a href="">Saiba mais...</a>
                            </div>




                        </div>
                    </div>

                   <div class="box">
                        <img src="https://img.freepik.com/vetores-gratis/ilustracao-de-embaixador-de-design-plano-desenhado-a-mao_23-2149348099.jpg?w=740&t=st=1698325352~exp=1698325952~hmac=5d07b893a17c5fa53e52396695fe51c42ba5cc06c1485d1d724cc6f115c1fd37" alt="">
                        <div class="content">
                            <br/>
                            <span><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                              </svg></i></span>

                            <div class="mais">
                            <a href="">Saiba mais...</a>
                            </div>

                        </div>
                    </div>

                    <div class="box">
                        <img src="https://img.freepik.com/vetores-gratis/ilustracao-de-embaixador-de-design-plano-desenhado-a-mao_23-2149348099.jpg?w=740&t=st=1698325352~exp=1698325952~hmac=5d07b893a17c5fa53e52396695fe51c42ba5cc06c1485d1d724cc6f115c1fd37" alt="">
                        <div class="content">
                            <br/>
                            <span><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                              </svg></i></span>

                            <div class="mais">
                            <a href="">Saiba mais...</a>
                            </div>

                        </div>
                    </div>


                   <div class="box">
                        <img src="https://img.freepik.com/vetores-gratis/ilustracao-de-embaixador-de-design-plano-desenhado-a-mao_23-2149348099.jpg?w=740&t=st=1698325352~exp=1698325952~hmac=5d07b893a17c5fa53e52396695fe51c42ba5cc06c1485d1d724cc6f115c1fd37" alt="">
                        <div class="content">
                            <br/>
                            <span><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                              </svg></i></span>




                            <div class="mais">
                            <a href="">Saiba mais...</a>
                            </div>




                        </div>
                    </div>

                    <div class="box">
                        <img src="https://img.freepik.com/vetores-gratis/ilustracao-de-embaixador-de-design-plano-desenhado-a-mao_23-2149348099.jpg?w=740&t=st=1698325352~exp=1698325952~hmac=5d07b893a17c5fa53e52396695fe51c42ba5cc06c1485d1d724cc6f115c1fd37" alt="">
                        <div class="content">
                            <br/>
                            <span><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                              </svg></i></span>




                            <div class="mais">
                            <a href="">Saiba mais...</a>
                         </div>

                        </div>
                    </div>

                    <div class="box">
                        <img src="https://img.freepik.com/vetores-gratis/ilustracao-de-embaixador-de-design-plano-desenhado-a-mao_23-2149348099.jpg?w=740&t=st=1698325352~exp=1698325952~hmac=5d07b893a17c5fa53e52396695fe51c42ba5cc06c1485d1d724cc6f115c1fd37" alt="">
                        <div class="content">
                            <br/>
                            <span><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                              </svg></i></span>

                            <div class="mais">
                            <a href="">Saiba mais...</a>
                            </div>

                        </div>
                    </div>


                    <div class="box">
                        <img src="https://img.freepik.com/vetores-gratis/ilustracao-de-embaixador-de-design-plano-desenhado-a-mao_23-2149348099.jpg?w=740&t=st=1698325352~exp=1698325952~hmac=5d07b893a17c5fa53e52396695fe51c42ba5cc06c1485d1d724cc6f115c1fd37" alt="">
                        <div class="content">
                            <br/>
                            <span><i class="bi bi-bookmarks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                              </svg></i></span>

                            <div class="mais">
                            <a href="">Saiba mais...</a>
                            </div>

                        </div>
                    </div>


     </div>

<!--Rodapé-->
    <footer>


        <p>Copyright © 2023 | Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte</p>


    </footer>
</div>  
</body>
</html>
