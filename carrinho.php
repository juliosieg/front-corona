<?
    require_once("header.php");
?>

<link rel="stylesheet" href="css/carrinho.css">

<section class="section-content padding-y">
    <div class="container">
        <div class="row">
	        <main class="col-md-9">
                <div class="card">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Produto</th>
                                <th scope="col" width="120">Quantidade</th>
                                <th scope="col" width="120">Preço</th>
                                <th scope="col" class="text-right" width="200"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
	                            <td>
                                    <figure class="itemside">
                                        <div class="aside">
                                            <img style='max-width: 50px;' src="https://www.casasbahia-imagens.com.br/Eletroportateis/Cafeteiras/CafeteirasEletricas/12729665/906149092/cafeteira-eletrica-philco-thermo-ph41-ate-30-cafes-preta-12729665.jpg" class="img-sm">
                                        </div>
                                        <figcaption class="info">
                                            <a href="#" class="title text-dark">Cafeteira Cadence</a>
                                        </figcaption>
                                    </figure>
	                            </td>
	                            <td> 
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>	
                                        <option>3</option>	
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>	
                                    </select> 
	                            </td>
                                <td> 
                                    <div class="price-wrap"> 
                                        <var class="price">R$ 20,00</var> 
                                        <br>
                                        <small class="text-muted"> R$ 10,00 cada </small> 
                                    </div> <!-- price-wrap .// -->
                                </td>
	                            <td class="text-right"> 
	                                <a href="" class="btn btn-light"> Remover</a>
	                            </td>
                            </tr>

                            <tr>
	                            <td>
                                    <figure class="itemside">
                                        <div class="aside">
                                            <img style='max-width: 50px;' src="https://www.casasbahia-imagens.com.br/Eletroportateis/Cafeteiras/CafeteirasEletricas/12729665/906149092/cafeteira-eletrica-philco-thermo-ph41-ate-30-cafes-preta-12729665.jpg" class="img-sm">
                                        </div>
                                        <figcaption class="info">
                                            <a href="#" class="title text-dark">Cafeteira Cadence</a>
                                        </figcaption>
                                    </figure>
	                            </td>
	                            <td> 
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>	
                                        <option>3</option>	
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>	
                                    </select> 
	                            </td>
                                <td> 
                                    <div class="price-wrap"> 
                                        <var class="price">R$ 20,00</var> 
                                        <br>
                                        <small class="text-muted"> R$ 10,00 cada </small> 
                                    </div> <!-- price-wrap .// -->
                                </td>
	                            <td class="text-right"> 
	                                <a href="" class="btn btn-light"> Remover</a>
	                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-body border-top">

                        <h5> Dados de entrega: </h5>

                        <br>

                        <div class="form-group">
                            <label style='color: black !important'>Informe o seu número de telefone para a compra:</label>
                            <input type='text' style='width: 300px' class='form-control'>
                            <small id="emailHelp" class="form-text text-muted">Esse número será utilizado para contato do estabelecimento</small>
                        </div>

                        <div class='form-group'>

                            <div class="row">
                                <div class='col-md-6 col-sm-12'>
                                    <label style='color: black !important'>Melhor horário de entrega:</label>
                                    <input type='text' style='width: 300px' class='form-control'>
                                </div>
                                <div class='col-md-6 col-sm-12'>
                                    <label style='color: black !important'>Sexo:</label>
                                    <input type='text' style='width: 300px' class='form-control'>
                                </div>
                            </div>

                            <br>
                            
                            <div class="row">
                                <div class='col-md-6 col-sm-12'>
                                    <label style='color: black !important'>Estado:</label>
                                    <input type='text' style='width: 300px' class='form-control'>
                                </div>
                                <div class='col-md-6 col-sm-12'>
                                    <label style='color: black !important'>Cidade:</label>
                                    <input type='text' style='width: 300px' class='form-control'>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-md-6 col-sm-12'>
                                    <label style='color: black !important'>Endereço:</label>
                                    <input type='text' style='width: 300px' class='form-control'>
                                </div>
                                <div class='col-md-6 col-sm-12'>
                                    <label style='color: black !important'>Número:</label>
                                    <input type='text' style='width: 300px' class='form-control'>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-md-6 col-sm-12'>
                                    <label style='color: black !important'>Complemento:</label>
                                    <input type='text' style='width: 300px' class='form-control'>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-md-12 col-sm-12'>
                                    <label style='color: black !important'>Observações:</label>
                                    <textarea style='width: 300px' rows="4" cols="50" class='form-control'></textarea>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>


                        <a href="finalizarPedido.php" class="btn btn-primary float-md-right"> Finalizar Pedido <i class="fa fa-chevron-right"></i> </a>
                        <a href="#" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continuar Comprando </a>
                    </div>	
                </div>

                <div class="alert alert-success mt-3">
                    <p class="icontext"><i class="icon text-success fa fa-truck"></i> Por razões logísticas, aceitamos apenas encomendas acima de R$ 50,00</p>
                </div>

	        </main>
            
            <aside class="col-md-3">
                <div class="card">
                    <div class="card-body">    
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-left  h5">
                                <strong>R$ 40,00</strong>
                            </dd>
                        </dl>
                    </div> 
                </div>
	        </aside>
        </div>
    </div> 
</section>

<section class="section-name bg padding-y" style='margin-bottom: 200px'>
    <div class="container" style='color: white !important'>
        <h6>Local para algum aviso importante</h6>
        <p>É importante ressaltar que ...</p>
    </div>
</section>

<div class='barraProgresso'>
    <label for="progress">Percentual de conclusão do seu pedido</label>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>