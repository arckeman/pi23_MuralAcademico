<!DOCTYPE html>
<html lang="en">

  <head>
    <style type="text/css">
.img1{
  border-radius: 5px 5px 0 0;
}

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
    content:"";
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
  </style>
</head>
<body>

    <?php include "bases/head.php"?>

    <?php include "bases/menu.php"?>


<div class="cont">
    <img class="img1" src="https://cdn-icons-png.flaticon.com/256/3106/3106921.png" alt="Avatar" height="300px" width="300px">
    <button class="button" id="button">Meus dados</button>
</div>
</div>


<div class="container">
  <img class="img1" src="https://cdn-icons-png.flaticon.com/256/33/33308.png" alt="Avatar" height="300px" width="300px">
  <button class="button" id="button">Gerenciar usuários</button>
</div>
</div>
</div>
    


</body>

</html>