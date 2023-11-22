

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Página de autenticação</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');


body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
}
.menubaixo
{
  font-size: 2px;
  position: relative;
}
.menubaixo nav{
  background-color:white;
  padding: 6px;
  width: 600%;
  height: 900%;
  top:50px;
  margin-left:-230px;
  position:absolute;
  font-size:15px;
  display: none;
  z-index:1;
  box-shadow: var(--box-shadow);
}
.menubaixo nav ul{
  list-style-type:none;
  margin-top:20px;
  margin-left: 30px;
}
.menubaixo nav ul li{
  padding-top: 40px;
   
}
.menubaixo nav a{
  padding: 5px;
  display:block;
  margin-top: -4px;
}
.menubaixo nav ul h1{
  font-size: 30px;
 
}
.menubaixo nav form{
    width: 80%;
    position: relative;
}    
.menubaixo label {display:block;}
.menubaixo input {width: 100%;}
.menubaixo input,  button {padding: 2px;}
.menubaixo  button {
    position: absolute;  
    top: 0;
    right: 0;
  }

input[type="checkbox"]{
  display:none;
}
input[type="checkbox"]:checked~nav{
  display:block;
}

.principal
{
  width: 75%;
  align-items: center;
  margin:0 auto;
}
.informacoes
{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(325px, auto));
  gap: 1.5rem;
  margin-top: 40px;
  height: 100%;
  border-style: solid;
  border-color: green;
  border-bottom-width: 0.5px;
  border-top-width: 0px;
  border-right-width: 0px;
  border-left-width: 0px;
}
.imagem
{
  padding: 20px;
  width: 100%;
}
.texto
{
  width: 100%;
  padding: 20px;
 
}
.texto p
{
  margin-top:50px;
  text-align: justify;
}
.texto h1
{
  text-align: center;
}
.texto a{
  text-align: center;
}

@media screen and (max-width: 720px) {
  img {
    max-width: 100%;
    object-fit: contain;
    height: 10em;
  }
  .card {
    max-width: 10em;
    margin-top: 1em;
  }
  #products {
    grid-template-columns: auto auto;
    grid-column-gap: 1em;
  }
}

.anuncios-container
{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(325px, auto));
  gap: 1.5rem;
  margin-top: 40px;
  padding: 20px;
  padding-top: 1px;
}

.anuncios-container .box
{
  position: relative;
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-radius: 0.5rem;
  box-shadow: var(--box-shadow);
}


.anuncios-container img
{
  width: 100%;
  height: 250px;
  object-fit: contain;
  object-position: center;
  padding: 20px;
  background: #f1f1f1;
  border-radius: 0.5rem;
}



.anuncios-container .box content
{
  display: flex;
  align-items: center;
  justify-content: space-around;
}


.anuncios-container .box .content span
{
  padding: 0 1rem;
  color: var(--bg-color);
  background: var(--main-color);
  border-radius: 4px;
  font-weight: 500;
}


.anuncios-container .box .content a
{
  padding: 0 1rem;
  color: var(--text-color);
  border: 2px solid var(--main-color);
  border-radius: 4px;
  text-transform: uppercase;
}

.anuncios-container .box .content a:hover
{
  background: var(--main-color);
  color: var(--bg-color);
  transition: 0.2s all linear;
}
header
    {
    width: 75%;
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
    border-color: green;
    border-bottom-width: 0.5px;
    border-top-width: 0px;
    border-right-width: 0px;
    border-left-width: 0px;
}
.page {
    display: flex;
    
    align-items: center;
    align-content: center;
    justify-content: center;
    width:100%;
    height: 100vh;
    background-color:#F5F5F5;
}


.formLogin {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 7px;
    padding: 40px;
    box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.4);
    gap: 5px
}


.areaLogin img {
    width: 420px;
}


.formLogin h1 {
    padding: 0;
    margin: 0;
    font-weight: 500;
    font-size: 2.3em;
}


.formLogin p {
    display: inline-block;
    font-size: 14px;
    color: #666;
    margin-bottom: 25px;
}


.formLogin input {
    padding: 15px;
    font-size: 14px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    margin-top: 5px;
    border-radius: 4px;
    transition: all linear 160ms;
    outline: none;
}




.formLogin input:focus {
    border: 1px solid rgb(0,63,0);
}


.formLogin label {
    font-size: 14px;
    font-weight: 600;
    color:rgb(0,63,0);
}


.formLogin a {
    display: inline-block;
    margin-bottom: 20px;
    font-size: 13px;
    color: #555;
    transition: all linear 160ms;
}


.formLogin a:hover {
    color:rgb(0,63,0);
}


.btn {
    background-color:rgb(0,63,0);
    color:white;
    font-size: 14px;
    font-weight: 600;
    border: none !important;
    transition: all linear 160ms;
    cursor: pointer;
    margin: 0 !important;


}


.btn:hover {
    transform: scale(1.05);
    background-color:rgb(0,63,0);


}
footer
{    
  border-style: solid;
  border-color: green;
  border-top-width: 0.5px;
  border-bottom-width: 0px;
  border-right-width: 0px;
  border-left-width: 0px;
  padding:20px;
  background-color: rgb(0, 63, 0);
}
footer p
{
  text-align: center;
  color:white;
  background-color:rgb(0, 63, 0) ;
}

</style>
<body>

<!--menu-->

<?php include 'bases/menu.php' ?>
   
    <div class="page">
        <form method="POST" class="formLogin">
            <h1>Login</h1>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite seu e-mail"  placeholder />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Entrar" class="btn" />
        </form>
    </div>
  <div>
</div>

<?php include 'bases/rodape.php' ?>

</body>
</html>
