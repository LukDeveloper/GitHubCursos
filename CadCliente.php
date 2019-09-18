<?php
    $nome=$_POST['cxnome'];
	$end=$_POST['cxendereco'];
	$email=$_POST['cxemail']; 
	$cpf=$_POST['cxcpf']; 
	$pg=$_POST['group1'];
    
    try
	{
		$conect = new PDO('mysql:host=localhost;port=3306;dbname=concessionaria','root','');
		$conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
            $texto="INSERT INTO clientes(nome,endereco,email,cpf) VALUES('".$nome."','".$end."','".$email."','".$cpf."')";
			$conect->exec($texto);
			if($pg == 0){
		    echo "<script>
               alert('Dados do cliente gravados com sucesso! forma de pagamento = Dédito'');                                         
               </script>";                
			   header('Location: principal.php');
			}
			if($pg == 1){
				echo "<script>
				   alert('Dados do cliente gravados com sucesso! forma de pagamento = Crédito');                                         
				   </script>";                
				   header('Location: principal.php');
			}				
    }
	
	catch(PDOExcpetion $erro)
	{
		echo "Ocorreu um erro ao criar sua conta = $erro";
	}

?>