<!DOCTYPE html>
<html lang="en">

<?php include "bases/head.php"?>

<style type="text/css">
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
  padding: 2px 16px;
  text-align: center;
}
.img1{
  border-radius: 5px 5px 0 0;
}
.button{
  $green: #1ECD97;
$gray: #bbbbbb;
* {
  font-family: 'Roboto', sans-serif;
}
.container {
  position: absolute;
  top:50%;
  left:50%;
  margin-left: -65px;
  margin-top: -20px;
  width: 130px;
  height: 40px;
  text-align: center;
}
button {
  outline:none;
  height: 40px;
  text-align: center;
  width: 130px;
  border-radius:40px;
  background: #fff;
  border: 2px solid $green;
  color:$green;
  letter-spacing:1px;
  text-shadow:0;
  font:{
    size:12px;
    weight:bold;
  }
  cursor: pointer;
  transition: all 0.25s ease;
  &:hover {
    color:white;
    background: $green;
  }
  &:active {
    //letter-spacing: 2px;
    letter-spacing: 2px ;
  }
  &:after {
    content:"SUBMIT";
  }
}
.onclic {
  width: 40px;
  border-color:$gray;
  border-width:3px;
  font-size:0;
  border-left-color:$green;
  animation: rotating 2s 0.25s linear infinite;

  &:after {
    content:"";
  }
  &:hover {
    color:$green;
    background: white;
  }
}
.validate {
  font-size:13px;
  color: white;
  background: $green;
  &:after {
    font-family:'FontAwesome';
    content:"\f00c";
  }
}

@keyframes rotating {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
}
  </style>


<body>

    <?php include "bases/menu.php"?>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
  <div class="container">
    <img class="img1" src="https://cdn-icons-png.flaticon.com/256/3106/3106921.png" alt="Avatar" height="300px" width="300px">
    <a href="#" class="button">Meus dados</a>
</div>
</div>

<div class="col-sm-6">
<div class="card">
  <img class="img1" src="https://cdn-icons-png.flaticon.com/256/33/33308.png" alt="Avatar" height="300px" width="300px">
  <a href="#" class="card-link">Gerenciar usuários</a>
  </div>
</div>
</div>
    <?php include "bases/rodape.php"?>
    
</body>

</html>