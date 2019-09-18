<?php
    $email=$_POST['cxEmail'];
	$senha=$_POST['cxSenha'];
	$id=$_POST['group1'];   
    
    try
	{
		$conect = new PDO('mysql:host=localhost;port=3306;dbname=concessionaria','root','');
		$conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
            $texto="INSERT INTO acesso(ID,email,senha) VALUES('".$id."','".$email."','".$senha."')";
			$conect->exec($texto);
			if($id == 0){
		    echo "<script>
               alert('Dados do cliente gravados com sucesso!');                                         
               </script>";                
			   header('Location: index.php');     //redirecionar
			}
			if($id == 1){
				echo "<script>
				   alert('Dados do adm gravados com sucesso!');                                         
				   </script>";                
				   header('Location: adm.php');    //redirecionar
			}

    }
	
	catch(PDOExcpetion $erro)
	{
		echo "Ocorreu um erro ao criar sua conta = $erro";
	}

?>