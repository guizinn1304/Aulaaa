<?php

use Model\Pedido;

    require_once '../vendor/autoload.php';

    $ped = new Pedido(); //chama construct

    if(isset($_GET['ingrediente'])){
        $ped->itens = $_GET['ingrediente'];
    }else{
        $ped->itens = null;
    }

    if(isset($_GET['qtde'])){
        $ped->quant = $_GET['qtde'];
    }else{
        $ped->quant = null;
    }

    if(isset($_GET['pgto'])){
        $ped->pag = $_GET['pgto'];
    }else{
        $ped->pag = null;
    }
    
    if(isset($_GET['entrega'])){
        $ped->local = $_GET['entrega'];
    }else{
        $ped->local = null;
    }

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de pedidos</title>
</head>
<body>
    <?php 
    
    ?>
    <?= $ped->gerarDesconto() ?>

    <h2 style="color:brown">Itens:</h2><hr>
    <?php foreach ($ped->itens as $item) : ?>
        <!-- Aqui sera repetido quantas vezes necessario -->
        <h4> <?=$item ?> </h4>
    <?php endforeach ?>  <hr>

    <h2>Quantidade</h2> 
    <h4> <?= $ped->quant ?> </h4> <hr>

    <h2>Tipo de Pagamento</h2>
    <h4><?= $ped->pag?></h4> <hr>

    <h2>Local da entrega</h2>
    <h4><?= $ped->local ?></h4> <hr>



</body>
</html>