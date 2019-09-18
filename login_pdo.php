<?php
session_start();
$user=$_POST['cxlogin'];
$pass=$_POST['cxsenha'];
try {
   $conn = new PDO('mysql:host=localhost;port=3306;dbname=ads4', 'root', '');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
   $consulta = $conn->query("SELECT * FROM usuarios WHERE login='$user' AND senha='$pass'");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC); //retornará contagem de linha
   if ($linha>0)
   {
     $_SESSION['nome_usuario']=$user;
	 $_SESSION['valida']='1';
     header('location: consulta.php');
   }
   else
   {
     echo "<script>
	       alert('Dados incorretos, tente novamente...');
		   document.location.href=('login.php');
		   </script>";
   }
   
 } // fecha try
 catch(PDOException $e)
 {
   echo 'ERRO: ' . $e->getMessage();
 }
?>