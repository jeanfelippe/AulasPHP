<?php 



?>


<h2>Calculadora de Imposto</h2>

<form method="POST">

Valor do Produto:<br>
<input type="number" name="valprod"><br><br>

Taxa de Imposto(em %):<br>
<input type="text" name="taxaimp">


<input type="submit" value="Calcular"><br>


</form>

<?php



$valprod=$_POST['valprod'];
$valprod=intval($valprod);

$taxaimp=$_POST['taxaimp'];
$taxaimp=intval($taxaimp);


if(isset($_POST['valprod']) && empty($_POST['valprod']) == false) {
    
    $imposto=($taxaimp/100)*$valprod;
    $produto=$valprod-$imposto;

 echo  "Valor do Produto: R$".$valprod;
 echo "<br>";  

 echo "Taxa de imposto: R$".$taxaimp;

 echo "<br><hr><br>";



 echo "Imposto: R$".$imposto."<br>";
 echo "Produto: R$".$produto."<br>";





}else{

}
?>
