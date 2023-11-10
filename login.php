

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<<<<<<< HEAD
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen" >
 
    <link rel="stylesheet" href="style.css"/>
body{
    background-color:#FAF0E6;
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
>>>>>>> a90e866c0201ebf3275f079bf8ecca96d53c4dd3
   
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');


body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
    color:black ;
}
header
    {
    width:%;
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
    flex-direction: column;
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
</style>
<body>
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
   
    <div class="page">
        <form method="POST" class="formLogin">
            <h1>Login</h1>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite seu e-mail" />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
  
    <footer>
    <p>Copyright © 2023 | Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte</p>
    </footer>

</body>
</html>
