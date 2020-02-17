<?php

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome=addslashes($_POST['nome']);
    $email=addslashes($_POST['email']);

    require 'config.php';

    $pdo->query("INSERT INTO usuarios SET nome='$nome', email='$email'");
    $id=$pdo->lastinsertId();

    $md5=md5($id);
    $link='http://www.b7web.com.br/cadastroconfirma/confirmar.php?h='.$md5;

    $assunto="Confirme seu cadastro";
    $msg="Clique no link abaixo para confirmar o seu cadastro:".$link;
    $headers="From:suporte@b7web.com.br";

    mail($email,$assunto,$msg,$headers);

    echo "<h2>Confirme seu cadastro agora</h2>";

    exit;

}

?>

<form method="POST">

Nome:<br>
<input type="text" name="nome"><br> 

E-mail:<br>
<input type="text" name="email">

<input type="submit" value="Cadastrar">

</form>

