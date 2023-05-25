<?php

    require "dados.php";
    
    if(!isset($_GET["i"])){
        header("location: funcionarios.php"); 
        die; 
    }

    $indice = $_GET["i"];

    if(isset($produtos[$indice]))
    {
    $p = $produtos[$indice];
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo1.css">
    <title>Produtos</title>
</head>
<body>
    <header>
        
        <img src="imagens/slogan.png">

        <nav>
            <ul>
                <li><a href="ofertasdodia.php">Ofertas do dia</a></li>
                <li><a href="">História da empresa</a></li>
                <li><a href="paginainicial.php">Página inicial</a></li>
            </ul>
        </nav>
            
    </header>

	<div class="container-detalhe">
		
		
		<div class="card-1">

        <?php
            if(isset($p)){
        ?>

            <div class="card-img">
                <img src="<?=$p["foto"]?>" alt="<?=$p["nome"]?>">
            </div>
            <div class="card-texto">
                <h2><?=$p["nome"]?></h2>
                <h4><?=$p["valor"]?></h4>
                <h3><?=$p["valordesconto"]?></h3>

            </div>
			

        </div>
        <div class="card-2">  
       
            <h2>FRETE GRATIS</h2>  
            <p><?=$p["descricao"]?> </p>
            <h4><?=$p["garantia"]?></h4>
            <div id="but">
                <a href="ofertasdodia.php" class="link" id="botao">Voltar</a>
            </div>

        <?php

    }else{
        echo "<h3>Produto não Encontrados</h3>";
    }
?>

        </div> 
</html>
