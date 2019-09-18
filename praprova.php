//metodo post
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	<title>Bem vindo a prova</title>
<html>
<head><title>FATORIAL</title></head>
<body>
    <form method="post" action="#">								//declaração do metodo post
    Digite um valor: <input type="text" name="caixa1"> 			//valor que será digitado pelo usuário e será capturado pelo metodo post
    <br>
    Resultado <input type="text" value="<?php echo $resultado; ?>">  //impressão do resultado na tela
    <br>
    <input type="submit" value="Calcular Fatorial">			//este botão ira chamar a execução do metodo post
    </form>
</body>

</html>

//Instanciando a classe e passando valor por parametro
<?php
require("fatorial.php");		//instanciando a classe e seus metodos
$ob=new Fatorial();        //$ob é um objeto da classe Fatorial
$resultado=0;				// receberá o resultado ao termino do calculo do fatorial e será impresso

if(isset($_POST['caixa1'])){      //só executara o metodo se conter valor na 'caixa1'
    $resultado=$ob->CalcFat ($_POST['caixa1']);      //resultado recebe o valor de retorno da função CalcFat que recebe o valor da 'caixa1' por parametro
}
?>

///////////////////////////////////////////////////////em outro arquivo estará a seguinte classe php///////////////////////////////////////////////////////

<?php
class Fatorial                  //nome da classe
{
    public function CalcFat($n)		//declaração do metodo CalcFat e o valor que receberá como parametro
    {
            $fat=1;
            for($c=1; $c<=$n; $c++)
            {
                $fat = $fat * $c;
            }
        return($fat);				//valor é retornado para o objeto desta classe
    }
}


/////////////////////////////////////////////////Uma pagina recebendo valores de outra via metodo post////////////////////////////////////////////////

$user=$_POST['cxlogin'];         //a variavel $user recebe o valor que vem da 'cxlogin' em outra pagina
$pass=$_POST['cxsenha'];		// a variavel $pass recebe o valor que vem da 'cxsenha' em outra pagina

////////////////////////////////////////////////exemplo de botão que chama outra pagina////////////////////////

<button class="nav-link" href="index.php">Home</button>    //href contem a url da pagina que será carregada ao apertar o botão

///////////////////////////////////////////////botão limpar ////////////////////////////////

<input type="reset" Value="LIMPAR">	

//////////////////////////////////////////////declaração do metodo post /////////////////////////////////

<form method="post" action="page3.php">
.
.
.
</form>

///////////////////////////////////////////////exemplo de forreach ///////////////////////////////////////

<?php
    $v=array("p0"=>10,     //carregando o vetor
             "p1"=>20,
             "p2"=>30);
    foreach($v as $dados){
         echo "[".$dados."]";    //imprimindo o vetor na tela
    } 
    echo "[".$v['p2']."]";    //imprimindo uma posição do vetor

?>

///////////////////////////////////////////// exemplo de forreach 2 //////////////////////////////////////

foreach($dados as $linha)
		{
			echo $linha['nome']."----".$linha['cpf']."----".$linha['endereco']."<br>";
		}

//////////////////////////////////////////// exemplo de tabelas //////////////////////////////////////

<!DOCTYPE html>
<html>
<head><title>Tabela</title></head>
<body>
    <table border="2">      //colocar borda na tabela
    <tr>
        <td>coluna1</td>    //colunas
        <td>coluna2</td>
    </tr>
    <tr>
        <td>linha1</td>   //linhas
        <td>linha2</td>
    </tr>
    </table>
</body>
</html>

/////////////////////////////////////////////colocando variaveis vindas de um BD na tabela ////////////////////////

<table border = 2>
    <tr>
	  <td>ID</td>
	  <td>USUÁRIO</td>
      	  <td>SENHA</td>
    </tr>
<?php
    try{
    $conecta=new PDO('mysql:host=localhost;port=3306;dbname=unimed', 'root', '');
    $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	$dados=$conecta->query("SELECT * FROM acesso");
  
    foreach($dados as $linha)
    {
	   echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
       echo "<tr>
				<td>".$linha['ID']."</td>
				<td>".$linha['usuario']."</td>
				<td>".$linha['senha']."</td>				
			</tr>";
    }
  }
  catch(PDOException $erro)
  {
    echo "Deu erro";
  }
?>
</table>

/////////////////////////////////////////// usando o echo e alert ///////////////////////////

echo "<script>
	       alert('Você não está logado, tente novamente...');    //caixa de alerta na tela
		   document.location.href=('login.php');                 //redirecionar para a pagina referenciada
		</script>";
		
//////////////////////////////////////////// chamada recursiva ////////////////////////////////////

<html>
<head> <title> chamada recursiva </title> </head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="submit" name="bt" value="chamada do POST">
</form>
<?php
if(isset ($_POST['bt']))
{
echo "chamando eu mesmo";
}
?>
</body>
</html>