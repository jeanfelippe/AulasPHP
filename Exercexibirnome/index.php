<?php 



?>

<form method="POST">

Qual seu nome?<br>
<input type="text" name="nome"><br>
<input type="submit" value="Enviar"><br>


</form>

<?php



$nome=$_POST['nome'];


if(isset($_POST['nome']) && empty($_POST['nome']) == false) {


 echo  "Opa,".$nome;  
}else{

}
?>
