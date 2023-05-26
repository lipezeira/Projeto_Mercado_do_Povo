<?php
    require "dados2.php"; 
?>


<?php
    require "dados2.php";

    if(!isset($_GET["i"])){
        header("location: paginainicial.php");
        die; 
    }

    $indice = $_GET["i"];
    if(isset($produtos[$indice])){
        $p = $produtos[$indice];
    }
   

?>

<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilodet.css" rel="stylesheet">
        <title>Mercado do Povo</title>
    </head>

<body>

        <header>
            <div class="container flex">
            <img src="imagens/slogan.png">

            <nav>
                <ul>
                    <li><a href="paginainicial.php">Página Inicial</a></li>
                    <li><a href="ofertasdodia.php">Ofertas do dia</a></li>
                    <li><a href="pagina.html">História da empresa</a></li>
                </ul>
            </nav>

        </header>

        <div class="detalhe">
		

		<div class="produto">
            
		    <?php
            if(isset($p)){
            ?>

            <div id="imagem">
			    <img src="<?=$p["foto"]?>" alt="<?=$p["nome"]?>">
            </div>

            <div id="infos">
                <h2><?=$p["nome"]?></h3>
                <h3>R$<?=($p["preco"])?>,00</h4>
                <h4><?=$p["desconto"]?></h4>
                <h5>Ou <?=$p["parcelas"]?></h4>
                <h6><?=$p["descrição"]?></h4>

                <div id="bot">
                    <a href="paginainicial.php" class="link">Voltar</a>
                </div>
                
            </div>

			

            <?php
            }else{
                echo "<h3>Produto não encontrado!</h3>";
            }
            ?>

		</div>
			
		
	</div>
</body>
</html>