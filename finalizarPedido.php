<?
    require_once("header.php");
?>

<link rel="stylesheet" href="css/finalizarPedido.css">

<div class='finalizarPedido' style='color: white !important; margin: 0 auto'>

    <i class='fas fa-check' style='font-size: 100px; color: green'></i>

    <h3> Seu pedido foi realizado com sucesso! </h3>
    <small> Recebemos seu pedido, o estabelecimento prepará o envio e poderá entrar
        em contato para confirmar informações, se necessário. </small>

</div>

<div class='barraProgresso'>
    <label for="progress">Percentual de conclusão do seu pedido</label>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>