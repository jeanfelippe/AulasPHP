
<?php

session_start();

if(!empty($_POST['n'])){

    $n=intval($_POST['n']);
    //receber o valor de n da pagina anterior e converter pra interio
    //o valor de n ficou armazenado na session dentro da pagina index,aqui será comparado com n para validar

    if($_SESSION['v']==$n){
        echo "Humano";
    }else{
        echo "fake";
    }

}else{
    header("Location:index.php");
}




?>
