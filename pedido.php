<?
    require_once("header.php");
?>

<link rel="stylesheet" href="css/pedido.css">

<div class='corpoPedido'>

    <div class='selectsIniciais col-md-8 col-lg-4 col-sm-12'>

        <div class="form-group">
            <label for="selectCidade">Cidade</label>

            <select id='selectCidade' class='form-control'>
                <option value=''>Selecione uma cidade</option>
                <option>Ibirubá</option>
                <option>Quinze de Novembro</option>
            </select>

            <br>

            <label for="selectCategoria">Categoria</label>

            <select id='selectCategoria' class='form-control'>
                <option value=''>Selecione uma categoria</option>
                <option>Supermercado</option>
                <option>Farmácia</option>
            </select>

        </div>

    </div>
    
    <div class='empresasDisponiveis'>

        <hr style='color: white; border: 1px solid white;'>

        <h4 style='color: white'>  Empresas disponíveis para pedido </h3>

        <div class='empresas'>

            <div class="row">
                <div class="col-sm-4">
                    <a href="lista_produtos.php?id_empresa=12">
                        <div class="card" >
                            <div class="card-body" style='background: url("https://static.wixstatic.com/media/741571_b48820a5c405482da403e64209615810~mv2.png/v1/fill/w_564,h_358,al_c,q_85,usm_0.66_1.00_0.01/741571_b48820a5c405482da403e64209615810~mv2.webp")'></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body" style='background: url("https://lh3.googleusercontent.com/proxy/XzbZkgCxikYxkQP8_N5A8oXzQIPGspctmG_x17yzdQJERHXy5p-383mBYUxTfnFIb6aSWBFYww1ko29dfuExdeeWyAWfoOqfQINYr7f3K8tXwgBBgwD80AMUdMiUV56mwYvd5L3v")'></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body" style='background: url("https://www.tapera.net/regional/logo.jpg")'></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mercadinho do Josimar</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<div class='barraProgresso'>
    <label for="progress">Percentual de conclusão do seu pedido</label>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>