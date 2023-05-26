<?php
    require "dados2.php"; 
?>

<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilo.css" rel="stylesheet">
        <title>Mercado do Povo</title>
    </head>

<body>

        <header>
            <div class="container flex-center-between">
            <img src="imagens/slogan.png">

            <nav>
                <ul>
                    <li><a href="ofertasdodia.php">Ofertas do dia</a></li>
                    <li><a href="pagina.html">História da empresa</a></li>
                </ul>
            </nav>

        </header>

            <img src="imagens/image.png" id="propaganda">

            <h1 id="prop">Várias ofertas para aproveitar</h1>

        <main class = "container">

        <section id="produtos">

            <?php
                foreach($produtos as $i => $prod){
            ?>

            
            <div class="produto">
                <a href="exibirdetalhes.php?i=<?=$i?>">
                    <img src="<?=$prod["foto"]?>" alt="<?=$prod["nome"]?>">
                </a>

                <div class="info">
                    <h1>R$<?=$prod["preco"]?>,00</h1>
                    <h2 class="desconto"><?=$prod["desconto"]?></h2>
                    <h3 class="parcelas">Em <?=$prod["parcelas"]?></h3>
                    <h4 class="nome"><?=$prod["nome"]?></h>
                </div>
            </div>

            <?php
                }
            ?>

        </section>
        </main>
</body>
</html>