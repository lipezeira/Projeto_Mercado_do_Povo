<?php
    require "dados.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="produtos2.css">
</head>
<body>
<header>
    <div class="navegacao">
       <img src="imagens/slogan.png" alt="Logo do Site">
        <nav>
          <ul>
            <li><a href="paginainicial.php">Página inicial</a></li>
            <li><a href="pagina.html">História da empresa</a></li>
            </ul>
        </nav>
    </div>
</header>

    <h1 id="prop"><u>Promoções do dia</u></h1>

<main>

    
<?php
    foreach($produtos as $i => $prod){     
?>

    <div class="prod">
        <a href="detalhes.php? i=<?=$i?>">
            <img src="<?=$prod['foto']?>" alt="<?=$prod['nome']?>">
        </a>
        <div class="info">
        <h4><?=$prod['nome']?></h2>
        <h5><s><?=$prod['valor']?></s></h4>
        <h3><?=$prod['valordesconto']?></h3>
        <a href="detalhes.php? i=<?=$i?>" id=botao>Ver Produto</a>
    </div>
    </div>

<?php
    }
?>

</main>

</body>
</html>