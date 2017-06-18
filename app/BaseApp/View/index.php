<!DOCTYPE html>
<html>
    <head>
        <?= $head; ?>
    </head> 
    <body>

  
 
        <div class="container-fluid">   
            <div class="col-md-1 previsao"  >
                <div class="row">
                    <div class="col-md-12" style="background-color: #55585D;color:#fff;font-size: 18px "><center><span id='txt_atg'>PREVISÃO</span></center></div>

                </div>
                <div class="row">
                    <div class="col-md-6"><span style="font-size: 9px; font-weight: bold;">ENTRE 75% E 90%</span><button class="btn btn-danger" id="vermelho" style="width: 100%">0</button></div>
                    <div class="col-md-6"><span style="font-size: 9px; font-weight: bold;">ENTRE 90% E 100%</span><button class="btn btn-warning" id="amarelo"  style="width: 100%">0</button></div>
                </div>
                <div class="row">
                    <div class="col-md-6"><span style="font-size: 9px; font-weight: bold;">ACIMA DE 100%</span><button class="btn btn-success" id="verde" style="width: 100%">0</button></div>
                    <div class="col-md-6"><span style="font-size: 9px; font-weight: bold;">ABAIXO DE 75%</span><button class="btn btn-default" id="vermelho_escuro" style="color:#fff;background-color:  #8B0000;width: 100%">0</button></div>
                </div>
            </div>
           <div class="col-md-1 tempo " style="padding: 0px" >
                <div class="row">
                    <div class="col-md-12">
						
                        <div class="col-md-12">
                            <button class="btn btn-primary" id="btnClima">CLIMA</button>
                        </div>
                         
                    </div>
                </div> 
           </div>  
           <div class="col-md-1 telaClima hidden"  >
                
                        <div class="col-md-12"> 
                            <div class="row">
                                <h4 id="cidade">Rio de Janeiro, Quinta-feira, 10/11/2016</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-2" id="imagemClima"></div>
                                <div class="col-md-2" id="zas"></div>
                                <div class="col-md-8">
                                    <table class="table"  style="font-size: 16px;"  >
                                        <tr><td>Condição: </td><td id="condicao">Sol</td></tr>
                                        <tr><td>Máx:      </td><td id="temp_max">35</td> </tr>
                                        <tr><td>Min:      </td><td id="temp_min">30</td> </tr>
                                        <tr><td colspan="2" id="hora">Atualizado às 17:30 </td></tr>
                                    </table>
                                </div>
                                
                            </div>
                 
                </div> 
           </div>  
			
			<div class="row"   >  
             <div class="col-md-12" style="padding: 0" >  
				<div class="col-md-5" style="width: 50%;height: 108px;background-color: #C2272D;border: solid 1px #C2272D;color:#fff">
					<center><img src="<?= asset("assets/images/LOGO_LASA_1.png"); ?>" class="img-responsive" style="width: 30%"  ></center>
				</div>
				 <div class="col-md-6">
						<div class="row">
							<div class="col-md-12"  style="height: 40px;background-color: #333333;color:#fff;font-size: 26px ">
								<center>TOTAL</center>

							</div>
						</div>
						<div class="row" style="height: 60px;font-size: 15px !important">
							<div  class="col-md-2"  style="height: 67px;width: 14.28%;background-color: #4D4D4D;color:#CCCCCC;text-align: center; ">
								Vda Real:<br> <span style="font-size: 36px;color:#f0ad4e;font-weight: bold;" id="venda" ></span>
							</div>
							<div   class="col-md-2" style="height: 67px;border-left: 1px solid #000;width: 14.28%;background-color: #4D4D4D;color:#CCCCCC;text-align: center; ">
								Atg %:<br> <span style="font-size: 36px;color:#f0ad4e;font-weight: bold;" id="atingimento"></span>
							</div>
							<div  class="col-md-2"  style="height: 67px;border-left: 1px solid #000;width: 14.28%;background-color: #4D4D4D;color:#CCCCCC;text-align: center; ">
								Dsv:<br> <span style="font-size: 36px;color:#f0ad4e;font-weight: bold;" id="desvio" ></span>
							</div>
							<div   class="col-md-2" style="height: 67px;border-left: 1px solid #000;width: 14.28%;background-color: #4D4D4D;color:#CCCCCC;text-align: center; ">
								Orçado:<br> <span style="font-size: 36px;color:#f0ad4e;font-weight: bold;" id="orcado"></span>
							</div>
							<div  class="col-md-2"  style="height: 67px;border-left: 1px solid #000;width: 14.28%;background-color: #4D4D4D;color:#CCCCCC;text-align: center; ">
								Prev $:<br> <span style="font-size: 36px;color:#f0ad4e;font-weight: bold;" id="previsao_valor" ></span>
							</div>
							<div   class="col-md-2" style="height: 67px;border-left: 1px solid #000;width: 14.28%;background-color: #4D4D4D;color:#CCCCCC;text-align: center; ">
								Prev %:<br> <span style="font-size: 36px;color:#f0ad4e;font-weight: bold;" id="previsao_perc" ></span>
							</div>
							<div   class="col-md-2" style="height: 67px;border-left: 1px solid #000;width: 14.28%;background-color: #4D4D4D;color:#CCCCCC;text-align: center; ">
								Cresc %:<br> <span style="font-size: 36px;color:#f0ad4e;font-weight: bold;" id="crescimento" ></span>
							</div>
						</div>
					</div>
			 </div>
			</div>
			
                            <div class="row" style="padding: 0; margin: 0;"  >  
                                <div class="col-md-6" style="height: 912px;" >  
                                    <div class="row"   >  
                                       
                                    </div>
                                     <div class="row" >
                                         <div class="col-md-12" > 
                                             <h4 style="font-size:30px;">
												 <img src="<?= asset("assets/images/tela-max.jpg"); ?>" id="fullscreen" onclick="telaFullScreen()" width="40px" style="cursor: pointer" height="40px" title="Full Screen" alt="Full Screen">
												 &nbsp;
												 <img src="<?= asset("assets/images/atualizando.gif"); ?>" id="atualizar_pag" width="40px" style="cursor: pointer" height="40px" title="Atualizar" alt="Atualizar">
												 &nbsp;&nbsp;
												 ONDE ESTOU: <span id="ondeEstouMap">REGIÕES</span></h4>
                                         </div> 
                                     </div>
                                    <div id="map"></div>
                                </div> 
								
                                <div class="col-md-6 " style="height: 800px; margin-top: 10px;"" >  
									<div class="form-group" style="float: left; width: 500px">
										<span style="font-weight: bold; font-size: 16px">Data:</span> <input id="data" value="" name="data" type="text" class="data" style="width: 150px;"> 
									</div>
									<div id="minhaDiv" style="float: right; font-size: 28px"></div>
                                    <div class="row">
                                        <div class="col-md-12"   >
                                            <ul class="nav nav-tabs" style="background-color: #FFF;height: 75px" id="myTab">
                                                <li class="active"><a data-target="#home" data-toggle="tab" style=" height: 75px"><h2>Visão Comercial</h2></a></li>
                                               <li><a data-target="#profile"  data-toggle="tab" style=" height: 75px"><h2>Visão Geográfica</h2></a></li> 
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                  
                                      
			<div class="tab-content">
                            <div class="tab-pane active" id="home">
                                 <div class="col-md-12"><h4 style="font-size:30px;margin-top: 15px" id="navTituloCom">GERÊNCIAS</h4></div>
                                 <div class="col-md-12 tabs" id="visao_comercial" > </div> 
							     <div id="legenda_comercial" style="font-size: 26px"></div>
                            </div>
                            <div class="tab-pane" id="profile">     
                               <div class="col-md-12"><h4 style="font-size:30px;margin-top: 15px" id="navTituloGeo">REGIÕES</h4></div>
                                      <div class="col-md-12 tabs" id="visao_geografica"></div> 
    								  <div id="legenda_geografica" style="font-size: 26px"></div>
                                </div>
			  
			</div>
                  
                  
                                <div class="col-md-12 hidden" id="tabelaGeograficaComercial">
                                        <div class="row">
                                            <div class="col-md-12" style="padding:25px 0px 25px 15px;">
                                                <span style="color:#B3B3B3">...</span>
                                                <span style="font-weight: bold;color:#000">/</span>
                                                <span style="color:#B3B3B3">GERENTES</span>
                                                 <span style="font-weight: bold;color:#000">/</span>
                                                <span style="font-weight: bold;color:red">DISTRITOS</span>
                                                
                                            </div>
                                        </div>
                                                             <table class="table table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Departamento</th>
                                                        <th>Atg%</th>
                                                        <th>Venda</th>
                                                        <th>Orçado</th>
                                                        <th>Prev %</th>
                                                        <th>Prev $</th>
                                                        <th>Prev $Desvio</th>
                                                        <th>Cresc %</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Telefonia</td>
                                                        <td>
                                                             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                                40% 
                                                              </div>
                                                        </td>
                                                        <td>Doe</td>
                                                        <td>john@ </td>
                                                        <td>John</td>
                                                        <td>Doe</td>
                                                        <td>john@ </td>
                                                        <td>john@e </td>
                                                    </tr>
                                       
                                                </tbody>
                                            </table>
                                    </div>

                                </div> 
                            </div> 
                    </div> 
                    </body>
                    </html>
