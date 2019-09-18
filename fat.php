<?php
require("fatorial.php");
$ob=new Fatorial();
$resultado=0;

if(isset($_POST['caixa1'])){
    $resultado=$ob->CalcFat ($_POST['caixa1']);
}
?>

<html>
<head><title>FATORIAL</title></head>
<body>
    <form method="post" action="#">
    Digite um valor: <input type="text" name="caixa1">
    <br>
    Resultado <input type="text" value="<?php echo $resultado; ?>">
    <br>
    <input type="submit" value="Calcular Fatorial">
    </form>
</body>

</html>