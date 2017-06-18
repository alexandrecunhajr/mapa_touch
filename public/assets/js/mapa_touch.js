function init(){
	 /////////////CRONOMETRO,RELOAD EM 5 E 5 SEGUNDOS///////////
		var tempo = new Number();
		tempo = 300;
		startCountdown(tempo);
	
		$( "#data" ).datepicker({
			dateFormat: 'dd/mm/yy',
			dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
			dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
			dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
			monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
			monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
			nextText: 'Próximo',
			prevText: 'Anterior'
		});
		 
		Number.prototype.format = function (n, x, s, c) {
		  var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
				  num = this.toFixed(Math.max(0, ~~n));

		  return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
		};
						
						
		$("#data").change(function () {
			
			//fazer mapa influenciar regiao, distrito ou loja. 
			$(".tb").fadeToggle(1500);
			query_dados('visao_comercial', nivel_com_memoria_tabela_comercial, nivel_geo_memoria_tabela_comercial, chave_geo_memoria_tabela_comercial, chave_com_memoria_tabela_comercial);
			query_dados('visao_geografica', nivel_com_memoria_tabela_geografica, nivel_geo_memoria_tabela_geografica, chave_geo_memoria_tabela_geografica, chave_com_memoria_tabela_geografica);
			$(".tb").fadeToggle(1500);
			
			var data_in = $("#data").val();

			if(data_in){
				dt_res = data_in.split('/');
				dt_inx = dt_res[2]+dt_res[1]+dt_res[0];
				
				dta_res = data_atual.split('/');
				dta_atl = dta_res[2]+dta_res[1]+dta_res[0];
			}
			$.post("home/carrega_dados",
				{data: data_in},
				function (data) {

					$('#atingimento').html(Math.round(data.dadosCompanhia[0]['atingimento']));

					var vendamp = data.dadosCompanhia[0]['venda_atual'];
					vendamp = (vendamp > 0) ? vendamp.format(0, 3, '.', ',') : vendamp;
					$('#venda').html(vendamp);

					var orcadobd = data.dadosCompanhia[0]['orc'];
					orcadobd = (orcadobd > 0) ? orcadobd.format(0, 3, '.', ',') : orcadobd;
					$('#orcado').html(data.dadosCompanhia[0]['orc'].format(0, 3, '.', ','));

					if (data.dadosCompanhia[0]['prev_valor'] == undefined ||
							data.dadosCompanhia[0]['prev_valor'] == null ||
							data.dadosCompanhia[0]['prev_valor'] == "") {
						var previsao = '--';
					} else {
						var previsao = data.dadosCompanhia[0]['prev_valor'].format(0, 3, '.', ',');
					}
					if (data.dadosCompanhia[0]['prev_perc'] == undefined ||
							data.dadosCompanhia[0]['prev_perc'] == null ||
							data.dadosCompanhia[0]['prev_perc'] == "") {
						var previsao_perc = '--';
					} else {
						var previsao_perc = data.dadosCompanhia[0]['prev_perc'].format(0, 3, '.', ',');
					}

					if(hora_atual < 10 && (data_in == data_atual || data_in == '')){
						$('#previsao_perc').html('--');
						$('#previsao_valor').html('--');
						$('#crescimento').html('--');
						$('#desvio').html('--');
						$("#txt_atg").html('PREVISÃO');
					} else if (data_in == '' || data_in == data_atual) {
						//dia atual
						$('#previsao_perc').html(previsao_perc);
						$('#previsao_valor').html(previsao);
						$('#crescimento').html(data.dadosCompanhia[0]['crescimento_cia']);
						$('#desvio').html(data.dadosCompanhia[0]['desvio'].format(0, 3, '.', ','));
						$("#txt_atg").html('PREVISÃO');
					} else if (dt_inx < dta_atl){
						var desvant = data.dadosCompanhia[0]['venda_atual']-data.dadosCompanhia[0]['orc'];
						desvant = (desvant) ? desvant.format(0, 3, '.', ',') : desvant;
						$('#desvio').html(desvant);
						$('#previsao_perc').html('-');
						$('#previsao_valor').html('-');
						$('#crescimento').html('-');
						$("#txt_atg").html('ATINGIMENTO');
					} else {
						//dias anteriores  
						$('#previsao_perc').html('-');
						$('#previsao_valor').html('-');
						$('#crescimento').html('-');
						$('#desvio').html('-');
						$("#txt_atg").html('ATINGIMENTO');
					}
				}
			);
				
				
			if (nivel_mapa == "LOJA") {
				lojas(codigoDistrito, codigoRegiao, corRegiao[codigoRegiao].cor, nomeDistrito);
				return false;
			}
			if (nivel_mapa == "DISTRITO") {
				distritos(codigoRegiao, corRegiao[codigoRegiao].cor);
				return false;
			}
			if (nivel_mapa == "REGIÃO") {
				carrega_mapa_regiao(0);
				return false;
			}  
		});   
		$("#btnClima").click(function () {
			$(".tb").fadeToggle(1500);
			var id = '';
			nomeRegiao = '';
			nomeDistrito = '';
			nomeLoja = '';
			codigoRegiao = '';
			codigoDistrito = '';
			codigoLoja = '';
			spanRegiao = '';
			spanDistrito = '';
			spanLoja = '';
			//NAVEGAÇÃO DE NOME 
			var menuComercial = spanGerenciaBrasil;
			var menuGeografico = spanRegiaoBrasil;
			$("#ondeEstouMap").html(menuGeografico);
			$("#navTituloCom").html(menuComercial);
			$("#navTituloGeo").html(menuGeografico);
			if ($("#btnClima").hasClass("btn-primary")) { //carrega mapa com imagens de clima
				$("#btnClima").removeClass("btn-primary");
				$("#btnClima").addClass("btn-danger");
				// carrega mapa nivel brasil  com clima
				carrega_mapa_regiao(1);
			} else { //carrega mapa normal
				$("#btnClima").removeClass("btn-danger");
				$("#btnClima").addClass("btn-primary");
				$(".telaClima").addClass("hidden");
				// carrega mapa nivel brasil  sem clima
				carrega_mapa_regiao(0);
			}
			query_dados('visao_comercial', 'ger', 'companhia', '', '');
			query_dados('visao_geografica', '', 'reg', '', '');
			$(".tb").fadeToggle(1500);
		});
		$("#atualizar_pag").click(function () {
			$('#atualizar_pag').attr('src','<?= asset("assets/images/atualizando.gif"); ?>');
			//location.reload();
			carrega_mapa();
		});
		$('.tabs, #navTituloGeo, #ondeEstouMap').delegate('.click_regiao', 'click', function (id) {
			var id = id.currentTarget.attributes.data.nodeValue;
			codigoRegiao = id;
			codigoDistrito = '';
			codigoLoja = '';
			spanDistrito = '';
			spanLoja = '';
			nomeRegiao = arrayNomeRegiao[id].nome;
			spanRegiao = '<span class="click_regiao corLink"  data="' + id + '" >' + nomeRegiao + '</span>';
			var menuComercial = spanGerenciaBrasil;
			var menuGeografico = spanRegiaoBrasil + ' / ' + spanRegiao;

			$("#ondeEstouMap").html(menuGeografico);
			if (spanGerencia != '') {
				menuComercial += ' / ' + spanGerencia;
				menuGeografico += ' / ' + spanGerencia;
				if (spanDepartamento != '') {
					menuComercial += ' / ' + spanDepartamento;
					menuGeografico += ' / ' + spanDepartamento;
				}
			}
			menuComercial += ' / ' + spanRegiao;
			$("#navTituloCom").html(menuComercial);
			$("#navTituloGeo").html(menuGeografico);

			//traz lista de distritos quando clica em regiões
			query_dados('visao_geografica', nivel_com_memoria_tabela_geografica, 'dis', id, chave_com_memoria_tabela_geografica);
			if (nivel_com_memoria_tabela_comercial == 'dep') {
				query_dados('visao_comercial', 'dep', id, id, chave_com_memoria_tabela_comercial);
			} else {
				query_dados('visao_comercial', 'ger', 'reg', id, '');
			}
			$(".tb").fadeToggle(1500);
			$(".tb").fadeToggle(1500);
			distritos(id, corRegiao[id].cor);
			nivel_mapa = "DISTRITO";
		});
		$('.tabs, #navTituloGeo, #ondeEstouMap').delegate('.linkReg', 'click', function () {
			var id = '';
			nomeRegiao = '';
			nomeDistrito = '';
			nomeLoja = '';
			codigoRegiao = '';
			codigoDistrito = '';
			codigoLoja = '';
			spanRegiao = '';
			spanDistrito = '';
			spanLoja = '';
			nivel_mapa = "REGIÃO";
			//NAVEGAÇÃO DE NOME 
			var menuComercial = spanGerenciaBrasil;
			var menuGeografico = spanRegiaoBrasil;
			$("#ondeEstouMap").html(menuGeografico);
			if (spanGerencia != '') {
				menuComercial += ' / ' + spanGerencia;
				menuGeografico += ' / ' + spanGerencia;
				if (spanDepartamento != '') {
					menuComercial += ' / ' + spanDepartamento;
					menuGeografico += ' / ' + spanDepartamento;
				}
			}

			$("#navTituloCom").html(menuComercial);
			$("#navTituloGeo").html(menuGeografico);


			$(".tb").fadeToggle(1500);
			//query_dados(visao, nivel_com, nivel_geo, chave_geo, chave_com)
			if (spanDepartamento != '') {
				// regiao com gerencia e departamento 
				query_dados('visao_comercial', 'dep', '', '', codigoGerencia);
				query_dados('visao_geografica', 'dep', 'reg', '', codigoDepartamento);
			} else if (spanGerencia != '') {
				// regiao com gerencia
				query_dados('visao_comercial', 'dep', '', '', codigoGerencia); // reg a nivel brasil
				query_dados('visao_geografica', 'ger', 'reg', '', codigoGerencia);
			} else {
				//  regiao e gerencia a nivel brasil
				query_dados('visao_comercial', 'ger', 'companhia', '', '');
				query_dados('visao_geografica', '', 'reg', '', '');
			}
			$(".tb").fadeToggle(1500);
			carrega_mapa_regiao(0);
		});
		$('.tabs, #navTituloGeo, #navTituloCom, #ondeEstouMap').delegate('.linkGer', 'click', function () {
			nomeGer = '';
			codigoDepartamento = '';
			codigoGerencia = '';
			nomeDep = '';
			spanGerencia = '';
			spanDepartamento = '';

			var menuComercial = spanGerenciaBrasil;
			var menuGeografico = spanRegiaoBrasil;

			if (spanRegiao != '') {
				menuGeografico += ' / ' + spanRegiao;
				menuComercial += ' / ' + spanRegiao;

				if (spanDistrito != '') {
					menuGeografico += ' / ' + spanDistrito;
					menuComercial += ' / ' + spanDistrito;

					if (spanLoja != '') {
						menuGeografico += ' / ' + spanLoja;
						menuComercial += ' / ' + spanLoja;
					}
				}
			}

			$("#navTituloCom").html(menuComercial);
			$("#navTituloGeo").html(menuGeografico);


			$(".tb").fadeToggle(1500);
			//query_dados(visao, nivel_com, nivel_geo, chave_geo, chave_com)
			if (spanLoja != '') {
				// gerencia com região distrito e loja
				query_dados('visao_comercial', 'ger', 'loj', codigoLoja, '');
				query_dados('visao_geografica', '', 'loj', codigoDistrito, '');
			} else if (spanDistrito != '') {
				// gerencia com região e distrito 
				query_dados('visao_comercial', 'ger', 'dis', codigoDistrito, '');
				query_dados('visao_geografica', '', 'loj', codigoDistrito, '');
			} else if (spanRegiao != '') {
				// gerencia com região e distrito 
				query_dados('visao_comercial', 'ger', 'reg', codigoRegiao, '');
				query_dados('visao_geografica', '', 'dis', codigoRegiao, '');
			} else {
				// gerencia e regiao a nível brasil
				//query_dados('visao_comercial', 'ger', 'reg', '', '');

				query_dados('visao_comercial', 'ger', 'companhia', '', '');
				query_dados('visao_geografica', '', 'reg', '', '');

			}



			$(".tb").fadeToggle(1500);
		});
		$('.tabs, #navTituloGeo, #navTituloCom, #ondeEstouMap').delegate('.click_gerencia', 'click', function (id) {
			var id = id.currentTarget.attributes.data.nodeValue;
			codigoGerencia = id;
			codigoDepartamento = '';
			spanDepartamento = '';
			var nomeGerencia = arrayNomeGerencia[id].nome;
			nomeGer = nomeGerencia;
			spanGerencia = '<span class="click_gerencia corLink"  data="' + id + '" >' + nomeGerencia + '</span>';
			var menuComercial = spanGerenciaBrasil + ' / ' + spanGerencia;
			var menuGeografico = spanRegiaoBrasil;
			spanDepartamento = '';

			if (spanRegiao != '') {
				menuGeografico += ' / ' + spanRegiao;
				menuComercial += ' / ' + spanRegiao;

				if (spanDistrito != '') {
					menuGeografico += ' / ' + spanDistrito;
					menuComercial += ' / ' + spanDistrito;

					if (spanLoja != '') {
						menuGeografico += ' / ' + spanLoja;
						menuComercial += ' / ' + spanLoja;
					}
				}
			}
			$("#ondeEstouMap").html(menuGeografico);
			menuGeografico += ' / ' + spanGerencia;
			$("#navTituloCom").html(menuComercial);
			$("#navTituloGeo").html(menuGeografico);


			if (nivel_geo_memoria_tabela_comercial == 'loj') {
				query_dados('visao_comercial', 'dep', nivel_geo_memoria_tabela_comercial, chave_geo_memoria_tabela_comercial, id);
			} else {
				//chama o departamento com a chave_geo_memoria  regiao, distrito ou loja e lista os departamentos
				//aqui eu uso a chave geo de memoria para indicar o nivel
				query_dados('visao_comercial', 'dep', chave_geo_memoria_tabela_geografica, chave_geo_memoria_tabela_geografica, id);
			}
			query_dados('visao_geografica', 'ger', nivel_geo_memoria_tabela_geografica, chave_geo_memoria_tabela_geografica, id);

			$(".tb").fadeToggle(1500);
			$(".tb").fadeToggle(1500);
		});   
		$('.tabs, #navTituloGeo, #ondeEstouMap').delegate('.click_distrito', 'click', function (id) {
			var id = id.currentTarget.attributes.data.nodeValue;
			codigoDistrito = id;
			codigoLoja = '';
			spanLoja = '';
			var nomeDistritoxy = arrayNomeDistrito[id].nome;
			nomeDistrito = nomeDistritoxy;

			spanDistrito = '<span class="click_distrito corLink"  data="' + id + '" >' + nomeDistrito + '</span>';
			var menuComercial = spanGerenciaBrasil;
			var menuGeografico = spanRegiaoBrasil + ' / ' + spanRegiao + ' / ' + spanDistrito;

			$("#ondeEstouMap").html(menuGeografico);
			if (spanGerencia != '') {
				menuComercial += ' / ' + spanGerencia;
				menuGeografico += ' / ' + spanGerencia;
				if (spanDepartamento != '') {
					menuComercial += ' / ' + spanDepartamento;
					menuGeografico += ' / ' + spanDepartamento;
				}
			}
			menuComercial += ' / ' + spanRegiao + ' / ' + spanDistrito;
			$("#navTituloCom").html(menuComercial);
			$("#navTituloGeo").html(menuGeografico);


			if (nivel_com_memoria_tabela_comercial == 'dep') {
				query_dados('visao_comercial', 'dep', 'dis', id, chave_com_memoria_tabela_comercial);
			} else {
				query_dados('visao_comercial', 'ger', 'dis', id, '');
			}
			query_dados('visao_geografica', nivel_com_memoria_tabela_geografica, 'loj', id, chave_com_memoria_tabela_geografica);

			$(".tb").fadeToggle(1500);
			$(".tb").fadeToggle(1500);

			lojas(id, codigoRegiao, corRegiao[codigoRegiao].cor, nomeDistritoxy);
			//fazer navegação loja
			nivel_mapa = "LOJA";
		});   
		$('.tabs, #navTituloGeo, #ondeEstouMap').delegate('.click_loja', 'click', function (id) {
			var id = id.currentTarget.attributes.data.nodeValue;
			codigoLoja = id;
			var nomeLoj = arrayNomeLoja[id].nome;
			nomeLoja = nomeLoj;
			spanLoja = '<span class="click_loja corLink"  data="' + id + '" >' + nomeLoja + '</span>';
			var menuComercial = spanGerenciaBrasil;
			var menuGeografico = spanRegiaoBrasil + ' / ' + spanRegiao + ' / ' + spanDistrito + ' / ' + spanLoja;
			$("#ondeEstouMap").html(menuGeografico);
			if (spanGerencia != '') {
				menuComercial += ' / ' + spanGerencia;
				menuGeografico += ' / ' + spanGerencia;
				if (spanDepartamento != '') {
					menuComercial += ' / ' + spanDepartamento;
					menuGeografico += ' / ' + spanDepartamento;
				}
			}
			menuComercial += ' / ' + spanRegiao + ' / ' + spanDistrito + ' / ' + spanLoja;
			$("#navTituloCom").html(menuComercial);
			$("#navTituloGeo").html(menuGeografico);


			if (nivel_com_memoria_tabela_comercial == 'dep') {
				query_dados('visao_comercial', 'dep', 'loj', id, chave_com_memoria_tabela_comercial);
			} else {
				query_dados('visao_comercial', 'ger', 'loj', id, '');
			}
			$(".tb").fadeToggle(1500);
			$(".tb").fadeToggle(1500);
		});     
		$('.tabs, #navTituloGeo,#navTituloCom, #ondeEstouMap').delegate('.click_dep', 'click', function (id) {
			var id = id.currentTarget.attributes.data.nodeValue;
			codigoDepartamento = id;

			var nomeDepartamento = arrayNomeDepartamento[id].nome;
			nomeDep = nomeDepartamento;
			spanDepartamento = '<span class="click_dep corLink"  data="' + id + '" >' + nomeDepartamento + '</span>';
			var menuComercial = spanGerenciaBrasil + ' / ' + spanGerencia + ' / ' + spanDepartamento;
			var menuGeografico = spanRegiaoBrasil;

			if (spanRegiao != '') {
				menuGeografico += ' / ' + spanRegiao;
				menuComercial += ' / ' + spanRegiao;
				if (spanDistrito != '') {
					menuGeografico += ' / ' + spanDistrito;
					menuComercial += ' / ' + spanDistrito;
					if (spanLoja != '') {
						menuGeografico += ' / ' + spanLoja;
						menuComercial += ' / ' + spanLoja;
					}
				}
			}
			$("#ondeEstouMap").html(menuGeografico);
			menuGeografico += ' / ' + spanGerencia + ' / ' + spanDepartamento;
			$("#navTituloCom").html(menuComercial);
			$("#navTituloGeo").html(menuGeografico);

			query_dados('visao_geografica', 'dep', nivel_geo_memoria_tabela_geografica, chave_geo_memoria_tabela_geografica, id);
			$(".tb").fadeToggle(1500);
			$(".tb").fadeToggle(1500);
		});     
		function MapTouch() {
			return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
		}        
		if (MapTouch() === true) {
			navigator = navigator || {};
			navigator.msMaxTouchPoints = navigator.msMaxTouchPoints || 2;
			navigator.msPointerEnabled = true;
		}
		
		//visao          ,nivel_com ,nivel_geo ,chave_geo
		query_dados('visao_comercial', 'ger', 'companhia', '', '');
		query_dados('visao_geografica', '', 'reg', '', '');
	
		google.maps.event.addDomListener(window, 'load', carrega_mapa_regiao(0));
	   

		function scrollRight (){
			 $(".col-sm-12").animate( { scrollLeft: '+=460' }, 1000);
		};
	 


		$(document).on('click', '.seta-direita', function () {
			event.preventDefault();
			scrollRight();
		});
}