<?php
   include("conexao.php");?>


<?php   $senha = $_POST['senha_atual'];
   $senha_nova = $_POST['senha_nova'];
   $confirme_senha = $_POST['confirme_senha'];

   $sql=mysql_query("select passe from utilizadores where login='$login' ");
   $row= mysql_fetch_array($sql);  

   if(($senha_nova=="") && ($confirme_senha=="") && ($senha_banco==""))
   {
	   echo"<script>alert('Os campos das senhas não podem ser Nulos!');
			   window.location='index.php?ver=alterar_senha.php';
			   </script>";
	   return false;
   }
	  else
	   {			
		   if(($senha != $senha_banco) && ($senha_nova != $confirme_senha))
		  {
			   echo"<script>alert('Senhas Digitadas não conhecidem!');
				  window.location='index.php?ver=alterar_senha.php';
				  </script>";
		  }
		  else
		  {
			  if($result=mysql_query("update utilizadores set passe='$confirme_senha' where login='$login'"))
	   		{	
					echo"<script>alert('Senha Alterada com Sucesso!');
					   window.location='index.php?ver=conta.php';
					  </script>";
			   }
		   }  
	   }		
  ?>


<html>
<head>
	<title></title>
	<meta name="generator" content="Bluefish 2.2.0" >
	<meta name="author" content="Sara" >
	<meta name="date" content="2013-06-13T10:30:27+0000" >
	<meta name="copyright" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
	<meta http-equiv="content-style-type" content="text/css">
	<meta http-equiv="expires" content="0">
</head>
<body>
	<h3>Alteração da Senha</h3>
	<form action="index.php?ver=altera.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="ver" />
		<p>Senha antiga:<input type="password" name="senha_atual" onfocus="this.value=''" />
		<p>Senha Nova:<input type="password" name="senha_nova" onfocus="this.value=''" />
		<p>Confirmar nova senha:<input type="password" name="confirme_senha" onfocus="this.value=''" />
		<p><input type="submit" name="alterar_bt" value="Alterar"/>

	</form>
</body>
 </html>