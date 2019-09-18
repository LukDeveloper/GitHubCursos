<?php
$id=$_POST['group1'];
$user=$_POST['cxemail'];
$pass=$_POST['cxsenha'];
try {
   $conn = new PDO('mysql:host=localhost;port=3306;dbname=concessionaria', 'root', '');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "<script>
   alert('Dados incorretos, tente novamente...$user $pass');
// document.location.href=('index.php');
 </script>";

   $consulta = $conn->query("SELECT * FROM acesso WHERE email='$user' AND senha='$pass'");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC); 
   if ($linha > 0)
   {
     if($id == 0)
     {
     header('location: principal.php');
     }
     if($id == 1)
     {
      header('location: adm.php');
     }
   }
   else
   {
     echo "<script>
	       alert('Dados incorretos, tente novamente...');
		  // document.location.href=('index.php');
		   </script>";
   }
   
 } // fecha try
 catch(PDOException $e)
 {
   echo 'ERRO: ' . $e->getMessage();
 }
?>