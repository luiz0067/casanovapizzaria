<?php include 'top.php'?>
        
	    <div class="row justify-content-sm-center" style="background-image:url('https://www.casanovapizzaria.com.br/assets/img/fundo.png');background-repeat:no-repeat;background-size:100% 460px;padding-top:30px;padding-left:15px;padding-right:15px;">
    	    <div class="col-sm-10 bg-white rounded-top">
            	<div class="row" style="height:20px;"></div>
            	<div class="row justify-content-sm-center">
                     <div class="col" style="color:#880000;font-size:24px">
                         <b>NOSSO CARDÁPIO</b>
                    </div>	
                </div>	
                <div class="row" style="height:20px;"></div>
            	<div class="row ">
                    <div class="col-sm-8 ">
                        
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-danger ">
                            <input type="radio" name="options" autocomplete="off"><i class="fas fa-pizza-slice"></i> Pizza
                          </label>
                          <label class="btn btn-danger">
                            <input type="radio" name="options" autocomplete="off"><i class="fas fa-utensils"></i> Porções
                          </label>
                          <label class="btn btn-danger">
                            <input type="radio" name="options" autocomplete="off"><i class="fas fa-beer"></i> Bebidas
                          </label>
                          <label class="btn btn-danger">
                           <input type="radio" name="options" autocomplete="off"><i class='fas fa-pepper-hot'></i> Molhos
                          </label>    
                          <label class="btn btn-danger">
                           <input type="radio" name="options" autocomplete="off"><i class="fas fa-bars"></i> Mostrar Todos
                          </label>
                        </div>
                        <div class="row" style="height:20px;"></div>

                                  
                             <div class="input-group border">
                              <span class="input-group-prepend">
                                <div class="input-group-text bg-transparent border-right-0">
                                  <i class="fa fa-search"></i>
                                </div>
                              </span>
                              <input class="form-control py-2 border-left-0 " type="search" value="" id="example-search-input"  placeholder="Buscar produtos" />
                              
                            </div>
                            
                            <div class="row" style="height:20px;"></div>                  
                            <div class="card">                  
                                <ul class="nav nav-tabs">
                                    <li class=" nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Home</a></li>
                                    <li class=" nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a></li>
                                    <li class=" nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a></li>
                                    <li class=" nav-item"><a class="nav-link" data-toggle="tab" href="#menu3">Menu 3</a></li>
                                </ul>
                                <div class="tab-content card-body">
                                    <div id="home" class="tab-pane fade show active">
                                        
                                        <div class="row" style="height:320px;">
                                            <div class="col produtos pizza" style="height:320px;">
                                                <hr  class="barra_verde_dinamica"></hr>
                                                <div class="btn btn-success botao_comprar ">Comprar</div>
                                                <img class="card-img-top" src="/logo.png" alt="Card image cap">
                                                <h6 class="card-title" style=""><b>01 A MODA DA CASA</b></h6>
                                                <p class="card-text">Molho de Tomate Artesanal, Mussarela, Carne, Calabresa, Catupiry, Batata Palha, Tomate Seco Artesanal, Orégano</p>
                                                <p class="card-text" style="color:#880000;"><b>R$ 68,00</b></p>
                                            </div>
                                            
                                             <div class="col produtos pizza" style="height:320px;">
                                                <hr  class="barra_verde_dinamica"></hr>
                                                <div class="btn btn-success botao_comprar ">Comprar</div>
                                                <img class="card-img-top" src="/logo.png" alt="Card image cap">
                                                <h6 class="card-title" style=""><b>01 A MODA DA CASA</b></h6>
                                                <p class="card-text">Molho de Tomate Artesanal, Mussarela, Carne, Calabresa, Catupiry, Batata Palha, Tomate Seco Artesanal, Orégano</p>
                                                <p class="card-text" style="color:#880000;"><b>R$ 68,00</b></p>
                                            </div>
                                            
                                            <div class="col produtos pizza" style="height:320px;">
                                                <hr  class="barra_verde_dinamica"></hr>
                                                <div class="btn btn-success botao_comprar ">Comprar</div>
                                                <img class="card-img-top" src="/logo.png" alt="Card image cap">
                                                <h6 class="card-title" style=""><b>01 A MODA DA CASA</b></h6>
                                                <p class="card-text">Molho de Tomate Artesanal, Mussarela, Carne, Calabresa, Catupiry, Batata Palha, Tomate Seco Artesanal, Orégano</p>
                                                <p class="card-text" style="color:#880000;"><b>R$ 68,00</b></p>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h3>Menu 1</h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3>Menu 2</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <h3>Menu 3</h3>
                                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                          
              
              
              
              
                        
                    </div>
                    <div class="col-sm-4 coluna_pedido">
                        <div class="card  sm-3 pedido" >
                            <div class="card-header text-white bg-danger"><i class="fas fa-scroll"></i> MEU PEDIDO</div>
                            
                                <?php include "pedidos.php";?>
                            
                        </div>
                    </div>	
                </div>	
            </div>	
    	</div>
<?php include 'foot.php'?>