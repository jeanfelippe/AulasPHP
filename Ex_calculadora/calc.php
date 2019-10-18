
<?php

$valor1=addslashes($_POST["val1"]);
$valor2=addslashes($_POST['val2']);
$operador=addslashes($_POST['operador']);

if($operador==1){    

   
 
    $calc=$valor1+$valor2;     
   
    echo $valor1."+".$valor2."=".$calc;
}

if($operador==2){    
    $calc=$valor1-$valor2;     
   
    echo $valor1."-".$valor2."=".$calc;
}

if($operador==3){    
    $calc=$valor1*$valor2;     
   
    echo $valor1."*".$valor2."=".$calc;
}

if($operador==4){    
    $calc=$valor1/$valor2;     
   
    echo $valor1."/".$valor2."=".$calc;
}





?>