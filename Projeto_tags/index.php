





<?php


try{
	$pdo=new PDO("mysql:dbname=projeto_tags;host=localhost","root","");		

}catch(PDOException $e){
	echo "Error".$e->getMessage();
	exit;
}

$sql="SELECT caracteristicas FROM usuarios";
$sql=$pdo->query($sql);
if($sql->rowCount()>0){
	$lista=$sql->fetchAll();





$carac=array();				

foreach($lista as $usuario){
	$palavras=explode(",",$usuario['caracteristicas']);
	foreach($palavras as $palavra){
		$palavra=trim($palavra);
		//trim retira os espaços em branco caso tenha na palavra

		if(isset($carac[$palavra])){
			$carac[$palavra]++;

		}else{
			$carac[$palavra]=1;
		}

	}
}

arsort($carac);

$palavras=array_keys($carac);
$contagens=array_values($carac);

$maior=max($contagens);

$tamanhos=array(11,15,20,30);


for($x=0;$x<count($palavras);$x++){

	$n=$contagens[$x]/$maior;

	$h=ceil($n * count($tamanhos));

	echo "<p style='font-size:".$tamanhos[$h-1]."px'>".$palavras[$x]."(".$contagens[$x].")</p>";

}



}


?>