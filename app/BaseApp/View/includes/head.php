<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="<?= asset("assets/css/datapicker/jquery-ui.css"); ?>">
<link rel="stylesheet" href="<?= asset("assets/css/datapicker/style.css"); ?>">
<script src="<?= asset("assets/js/datapicker/jquery-1.12.4.js"); ?>"></script>
<script src="<?= asset("assets/js/datapicker/jquery-ui.js"); ?>"></script>

<link rel="stylesheet" href="<?= asset("assets/css/bootstrap.min.css"); ?>"> 
<!--<link rel="stylesheet" href="<?= asset("assets/css/jquery-ui.css"); ?>"> -->
<link rel="stylesheet" href="<?= asset("assets/css/jquery.dataTables.min.css"); ?>">  
<link rel="stylesheet" href="<?= asset("assets/css/mapa_touch.css"); ?>">

<script src="<?= asset("assets/js/jquery.min.js"); ?>" type="text/javascript"></script> 
<script src="<?= asset("assets/js/jquery-ui.min.js"); ?>" type="text/javascript"></script> 
<script src="<?= asset("assets/js/jquery.dataTables.min.js"); ?>" type="text/javascript"></script> 
<script src="<?= asset("assets/vendor/jquery.blockUI.js"); ?>" ></script>
<script src="<?= asset("assets/js/bootstrap.min.js"); ?>" type="text/javascript"></script>  
<script src="<?= asset("assets/js/cronometro.js"); ?>" type="text/javascript"></script> 
<script src="<?= asset("assets/js/tela_fullscreen.js"); ?>" type="text/javascript"></script> 
<script src="<?= asset("assets/js/mapa_touch.js"); ?>" type="text/javascript"></script> 


<!-- REGIÂO GR09 -->
<script src="<?= asset("assets/js/ALAGOAS.json");?>"  type="text/javascript"></script><!--ALAGOAS-->  
<script src="<?= asset("assets/js/BAHIA.json");?>"    type="text/javascript"></script><!--BAHIA--> 
<script src="<?= asset("assets/js/SERGIPE.json");?>"  type="text/javascript"></script><!--SERGIPE-->
<script src="<?= asset("assets/js/PIAUI.json");?>"    type="text/javascript"></script><!--PIAUI-->
<!-- REGIÂO GR07 -->
<script src="<?= asset("assets/js/AMAZONAS.json");?>" type="text/javascript"></script><!--AMAZONAS-->   
<script src="<?= asset("assets/js/PARA.json");?>"     type="text/javascript"></script><!--PARA-->   
<script src="<?= asset("assets/js/MARANHAO.json");?>" type="text/javascript"></script><!--MARANHAO-->   
<script src="<?= asset("assets/js/AMAPA.json");?>"    type="text/javascript"></script><!--AMAPA--> 
<script src="<?= asset("assets/js/ACRE.json");?>"     type="text/javascript"></script><!--ACRE-->  
<script src="<?= asset("assets/js/RONDONIA.json");?>" type="text/javascript"></script><!--RONDONIA-->  
<script src="<?= asset("assets/js/RORAIMA.json");?>"  type="text/javascript"></script><!--RORAIMA-->
<!-- REGIÂO GR05 -->
<script src="<?= asset("assets/js/riograndedosul.json");?>"  type="text/javascript"></script><!--RIO GRANDE DO SUL-->   
<script src="<?= asset("assets/js/parana.json");?>"          type="text/javascript"></script><!--PARANA-->   
<script src="<?= asset("assets/js/santacatarina.json");?>"   type="text/javascript"></script><!--SANTA CATARINA-->  
<script src="<?= asset("assets/js/matogrosso.json");?>"      type="text/javascript"></script><!--MATO GROSSO-->  
<script src="<?= asset("assets/js/matogrossodosul.json");?>" type="text/javascript"></script><!--MATO GROSSO DO SUL-->  
<!-- REGIÂO GR06 -->
<script src="<?= asset("assets/js/GR06_1.json");?>"     type="text/javascript"></script><!--PARAIBA-->  
<script src="<?= asset("assets/js/PERNAMBUCO.json");?>" type="text/javascript"></script><!--PERNAMBUCO-->   
<script src="<?= asset("assets/js/GR06_3.json");?>"     type="text/javascript"></script><!--RIO GRANDE DO NORTE-->
<!-- REGIÂO GR10 -->
<script src="<?= asset("assets/js/GOIAS.json");?>"     type="text/javascript"></script><!--GOIÁS-->
<script src="<?= asset("assets/js/DISTRITO.json"); ?>" type="text/javascript"></script><!--DISTRITO FEDERAL-->
<script src="<?= asset("assets/js/TOCANTINS.json");?>" type="text/javascript"></script><!--TOCANTINS-->
<script src="<?= asset("assets/js/CEARA.json");?>"     type="text/javascript"></script><!--CEARA-->
<!-- REGIÂO GR01 -->
<script src="<?= asset("assets/js/GR01_1.json"); ?>" type="text/javascript"></script>  
<!-- REGIÂO GR04 -->
<script src="<?= asset("assets/js/GR04_1.json"); ?>" type="text/javascript"></script> 
<script src="<?= asset("assets/js/SP.json");     ?>" type="text/javascript"></script>   
<!-- REGIÂO GR03 -->
<script src="<?= asset("assets/js/GR03.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR03_1.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR03_2.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR03_3.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR03_4.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR03_5.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR03_6.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR03_7.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR03_8.json"); ?>" type="text/javascript"></script>  
<script src="<?= asset("assets/js/ESPIRITO_SANTO.json");?>" type="text/javascript"></script><!--ESPIRITO SANTO-->  
<!-- REGIÂO GR08 -->
<script src="<?= asset("assets/js/GR08_1.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_2.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_3.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_4.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_5.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_6.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_7.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_8.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_9.json");  ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_10.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_11.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_12.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_13.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_14.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_15.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_16.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_17.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_18.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_19.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_20.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_21.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_22.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_23.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_24.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_25.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_26.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_27.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_28.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR08_29.json"); ?>" type="text/javascript"></script> 
<script src="<?= asset("assets/js/mg_gr8_final.json"); ?>"   type="text/javascript"></script><!--NOVO-->
<!-- REGIÂO GR02 -->  
<script src="<?= asset("assets/js/MG_GR_2.json"); ?>" type="text/javascript"></script><!--NOVO-->  
<script src="<?= asset("assets/js/MG_GR_1.json"); ?>" type="text/javascript"></script><!--NOVO-->  
<script src="<?= asset("assets/js/GR12.json"); ?>"    type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_1.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_2.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_3.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_4.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_5.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_6.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_7.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_8.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_9.json"); ?>"  type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_10.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_11.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_12.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_13.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_14.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_15.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_16.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_17.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_18.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_19.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_20.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_21.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_22.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_23.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_24.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_25.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_26.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_27.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_28.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_29.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_30.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_31.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_32.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_33.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_34.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_35.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_36.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_37.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_38.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_39.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_40.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_41.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_42.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_43.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_44.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_45.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_46.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_47.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_48.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_49.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_50.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_51.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_52.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_53.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_54.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_55.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_56.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_57.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_58.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_59.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_60.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_61.json"); ?>" type="text/javascript"></script>   
<script src="<?= asset("assets/js/GR12_62.json"); ?>" type="text/javascript"></script>    


<title>Touch</title> 
<?php $data_atual = date("d/m/Y"); ?>
<?php $hora_atual = date("H"); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADlZE43iMC2RxfKFKn4qYT89FNIwtSsCU&signed_in=true"></script>
<script src="<?= asset("assets/js/markerclusterer.js"); ?>" type="text/javascript"></script> 

<script>
	var data_atual      = '<?php echo $data_atual; ?>';
	var hora_atual      = '<?php echo $hora_atual; ?>';
	var verde           = '#4cae4c';
	var amarelo         = '#eea236';
	var vermelho        = '#d43f3a';
	var vermelho_escuro = '#8B0000';
	var verdeCont       = 0;
	var amareloCont     = 0;
	var vermelhoCont    = 0;
	var vermelho_escuroCont = 0;
	var cor;

	var imagem_verde_gd           = 'pin-verde-gd.png';
	var imagem_amarelo_gd         = 'pin-amarelo-gd.png';
	var imagem_vermelho_gd        = 'pin-vermelho-gd.png';
	var imagem_vermelho_escuro_gd = 'pin-vinho-gd.png';
	var imagem_cinza_gd           = "pin-cinza-gd.png";

	var imagem_verde              = 'pin-verde.png';
	var imagem_amarelo            = 'pin-amarelo.png';
	var imagem_vermelho           = 'pin-vermelho.png';
	var imagem_vermelho_escuro    = 'pin-vinho.png';
	var imagem_cinza              = "pin-cinza.png";

	var nivel_com_memoria         = '';
	var nivel_geo_memoria         = '';
	var chave_com_memoria         = '';
	var chave_geo_memoria         = '';

	var nivel_com_memoria_tabela_geografica = '';
	var nivel_geo_memoria_tabela_geografica = '';
	var chave_com_memoria_tabela_geografica = '';
	var chave_geo_memoria_tabela_geografica = '';

	var nivel_com_memoria_tabela_comercial = '';
	var nivel_geo_memoria_tabela_comercial = '';
	var chave_com_memoria_tabela_comercial = '';
	var chave_geo_memoria_tabela_comercial = '';

	var nomeGer;
	var nomeDep;
	var nomeDistrito;
	var nomeRegiao;
	var nomeLoja;
	var corRegiao             = new Array();
	var arrayNomeRegiao       = new Array();
	var arrayNomeDistrito     = new Array();
	var arrayNomeLoja         = new Array();
	var arrayNomeGerencia     = new Array();
	var arrayNomeDepartamento = new Array();
	var codigoRegiao          = '';
	var codigoDistrito        = '';
	var codigoGerencia        = '';
	var codigoDepartamento    = '';
	var codigoLoja            = '';

	var spanRegiaoBrasil      = '<span class="linkReg"  data="" > REGIÕES</span>';
	var spanRegiao            = '';
	var spanDistrito          = '';
	var spanLoja              = '';
	var spanGerenciaBrasil    = '<span class="linkGer"  data="" > GERÊNCIAS</span>';
	var spanGerencia          = '';
	var spanDepartamento      = '';
	var clima                 = 0;

	var sol                   = 'sol.png';
	var sol_e_chuva           = "sol-e-chuva.png";
	var sol_e_nuvens          = "sol-e-nuvens.png";
	var parcial_nublado       = "parcial-nublado";
	var pancada_chuva         = "pancada-chuva.png";
	var nublado               = "nublado.png";
	var chuva_e_raio          = "chuva-e-raio.png";
	var chuva                 = "chuva.png";

	var nivel_mapa            = 'REGIÃO';

	var regiao = {
		'GR07': {'gr07_1': amapa, 'gr07_2': para, 'gr07_3': amazonas, 'gr07_4': maranhao, 'gr07_5': acre, 'gr07_6': roraima, 'gr07_7': rondonia},
		'GR09': {'gr09_1': alagoas, 'gr09_2': bahia,'gr09_3': sergipe,'gr09_4': piaui},
		'GR10': {'gr10_1': CEARA, 'gr10_2': GOIAS, 'gr10_3': TOCANTINS,'gr10_4': distrito},
		'GR06': {'gr06_1': gr06_1, 'gr06_2': pernambuco, 'gr06_3': gr06_3},
		'GR05': {'gr05_1': matogrosso, 'gr05_2': matogrossodosul, 'gr05_3': parana, 'gr05_4': riograndedosul, 'gr05_5': santacatarina},
		'GR01': {'gr01_1': gr01_1},
		'GR04': {'gr04_1': gr04_1,'gr04_2': sp},
		'GR03': {'gr03': gr03, 'gr03_1': gr03_1, 'gr03_2': gr03_2, 'gr03_3': gr03_3, 'gr03_4': gr03_4, 'gr03_5': gr03_5, 'gr03_6': gr03_6, 'gr03_7': gr03_7, 'gr03_8': gr03_8,'gr03_9': espirito_santo},
		'GR08': {'gr08_1': gr08_1, 'gr08_2': gr08_2, 'gr08_3': gr08_3, 'gr08_4': gr08_4, 'gr08_5': gr08_5, 'gr08_6': gr08_6, 'gr08_7': gr08_7, 'gr08_8': gr08_8, 'gr08_9': gr08_9, 'gr08_10': gr08_10, 'gr08_11': gr08_11, 'gr08_12': gr08_12, 'gr08_13': gr08_13, 'gr08_14': gr08_14, 'gr08_15': gr08_15, 'gr08_16': gr08_16, 'gr08_17': gr08_17, 'gr08_18': gr08_18, 'gr08_19': gr08_19, 'gr08_20': gr08_20, 'gr08_21': gr08_21, 'gr08_22': gr08_22, 'gr08_23': gr08_23, 'gr08_24': gr08_24, 'gr08_25': gr08_25, 'gr08_26': gr08_26, 'gr08_27': gr08_27, 'gr08_28': gr08_28, 'gr08_29': gr08_29,'gr08_31': mg_gr8_final},
		'GR02': {'gr02_3': gr12, 'gr02_4': gr12_1, 'gr02_5': gr12_2, 'gr02_6': gr12_3, 'gr02_7': gr12_4, 'gr02_8': gr12_5, 'gr02_9': gr12_6, 'gr02_10': gr12_7, 'gr12_8': gr12_8, 'gr12_9': gr12_9, 'gr12_10': gr12_10, 'gr12_11': gr12_11, 'gr12_12': gr12_12, 'gr12_13': gr12_13, 'gr12_14': gr12_14, 'gr12_15': gr12_15, 'gr12_16': gr12_16, 'gr12_17': gr12_17, 'gr12_18': gr12_18, 'gr12_19': gr12_19, 'gr12_20': gr12_20, 'gr12_21': gr12_21, 'gr12_22': gr12_22, 'gr12_23': gr12_23, 'gr12_24': gr12_24, 'gr12_25': gr12_25, 'gr12_26': gr12_26, 'gr12_27': gr12_27, 'gr12_28': gr12_28, 'gr12_29': gr12_29, 'gr12_30': gr12_30, 'gr12_31': gr12_31, 'gr12_32': gr12_32, 'gr12_33': gr12_33, 'gr12_34': gr12_34, 'gr12_35': gr12_35, 'gr12_36': gr12_36, 'gr12_37': gr12_37, 'gr12_38': gr12_38, 'gr12_39': gr12_39, 'gr12_40': gr12_40, 'gr12_41': gr12_41, 'gr12_42': gr12_42, 'gr12_43': gr12_43, 'gr12_44': gr12_44, 'gr12_45': gr12_45, 'gr12_46': gr12_46, 'gr12_47': gr12_47, 'gr12_48': gr12_48, 'gr12_49': gr12_49, 'gr12_50': gr12_50, 'gr12_51': gr12_51, 'gr12_52': gr12_52, 'gr12_53': gr12_53, 'gr12_54': gr12_54, 'gr12_55': gr12_55, 'gr12_56': gr12_56, 'gr12_57': gr12_57, 'gr12_58': gr12_58, 'gr12_59': gr12_59, 'gr12_60': gr12_60, 'gr12_61': gr12_61,
		   'gr12_63': MG_GR_2,'gr12_64': MG_GR_1}
	};


	//--------------------------------------------------------------------------------------------------------------
  
	

	function regiao_companhia() {
		
		window['event_close_regiao'].close();


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

		/*if (nivel_com_memoria_tabela_comercial == 'dep') {
			query_dados2('visao_comercial', 'dep', id, id, chave_com_memoria_tabela_comercial);
		} else {
			query_dados2('visao_comercial', 'ger', '', id, '');
		}*/
		query_dados('visao_comercial', 'ger', 'companhia', '', '');
		query_dados('visao_geografica', '', 'reg', '', '');
		//query_dados('visao_geografica', '', 'reg', '', '');
		$(".tb").fadeToggle(1500);
	}

	function distritos_companhia() {
		
		window['event_close_distritos'].close();

		var id = codigoRegiao;
		codigoDistrito = '';
		codigoLoja = '';
		spanLoja = '';
		spanDistrito = '';
		nomeDistrito = '';
		nomeLoja = '';

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

		$(".tb").fadeToggle(1500);
		query_dados('visao_geografica', nivel_com_memoria_tabela_geografica, 'dis', id, chave_com_memoria_tabela_geografica);
		if (nivel_com_memoria_tabela_comercial == 'dep') {
			query_dados('visao_comercial', 'dep', id, id, chave_com_memoria_tabela_comercial);
		} else {
			query_dados('visao_comercial', 'ger', 'reg', id, '');
		}
		$(".tb").fadeToggle(1500);
	}
	
	
	function lojas_companhia() {
		
		window['event_close_lojas'].close();

		var id = codigoDistrito;
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

		$(".tb").fadeToggle(1500);
		if (nivel_com_memoria_tabela_comercial == 'dep') {
			query_dados('visao_comercial', 'dep', 'dis', id, chave_com_memoria_tabela_comercial);
		} else {
			query_dados('visao_comercial', 'ger', 'dis', id, '');
		}
		//query_dados2('visao_geografica', '', 'loj', id, '');
		$(".tb").fadeToggle(1500);
	}


	function query_dados2(visao, nivel_com, nivel_geo, chave_geo, chave_com) {
		//    nivel_com    identifica qual nível comercial deve ser carregado
		//     nivel_geo     identifica qual nível geográfico deve ser carregado 
		//     chave_geo     traz a chave do nível geográfico específico
			var legenda = "*Não existe previsão para esse tipo de filtro!";
			var order = 6;
			var sentido = "asc";
			var flag = '0';
			var dt_inx ="";
			var dta_atl="";
			var data_inx = $("#data").val();
			var date = new Date();
			hora_atual = date.getHours();
			
			$("#legenda_comercial").html('');
			$("#legenda_geografica").html('');
			
			if(data_inx){
				dt_res = data_inx.split('/');
				dt_inx = dt_res[2]+dt_res[1]+dt_res[0];
				
				dta_res = data_atual.split('/');
				dta_atl = dta_res[2]+dta_res[1]+dta_res[0];
			}
			
			if (visao == "visao_comercial") {
				chave_com_memoria_tabela_comercial = chave_com;
				chave_geo_memoria_tabela_comercial = chave_geo;
				nivel_com_memoria_tabela_comercial = nivel_com;
				nivel_geo_memoria_tabela_comercial = nivel_geo;
				if (nivel_com == "ger") {
					var titulo = "GERENCIAS";
					var tituloTab = "Gerências";
				} else if (nivel_com == "dep") {
					var titulo = "GERENCIAS/DEPARTAMENTOS";
					var tituloTab = "Departamentos";
					var flag = '1';
				}
			} else {
				chave_com_memoria_tabela_geografica = chave_com;
				chave_geo_memoria_tabela_geografica = chave_geo;
				nivel_com_memoria_tabela_geografica = nivel_com;
				nivel_geo_memoria_tabela_geografica = nivel_geo;
				if (nivel_geo == "reg") {
					var titulo = "REGIÕES";
					var tituloTab = "Regiões";
				} else if (nivel_geo == "dis") {
					var titulo = "REGIÕES/DISTRITOS";
					var tituloTab = "Distritos";
				} else if (nivel_geo == "loj") {
					var titulo = "REGIÕES/DISTRITOS/LOJAS";
					var tituloTab = "Lojas";
				}
				if (nivel_com == "dep") {
				   
					var flag = '1';
				}
			}
			
			$.post("home/query_dados",
					{
						nivel_geo: nivel_geo,
						nivel_com: nivel_com,
						chave_geo: chave_geo,
						chave_com: chave_com,
						visao: visao,
						flag: flag,
						data: data_inx
					},
					function (data) {
						var tab = '<div style="">';
						tab += '<span class="seta-direita">';
						tab += '</span>';
						tab += '<table id="scroll-tab"  class="table'+visao+' table-striped table-responsive display tb" style="height: 90%; width: 134%" >';
						tab += '<thead style="font-size:30px">';
						tab += '<tr>';
						tab += '<th style="position:fixed; background-color:#fff; width: 380px;">' + tituloTab + '</th>';
						tab += '<th style="text-align: right; padding-left:300px;position: inherit;">Atg%&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;>Venda&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Orçado&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Prev $&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Prev %&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Desvio&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Cresc %&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Est R$</th>';
						tab += '<th style="text-align: right;position: inherit;">ESV R$</th>';
						tab += '<th id="esv-total" style="text-align: right;position: inherit;">% ESV</th>';
						tab += '</tr>';
						tab += '</thead>';
						tab += '<tbody>';
						for (i = 0; i < data.resultado.length; i++) {
							
							if (nivel_geo == "dis") {
								var nomeDistritox = data.resultado[i]["desc_distrito"];
								var id_dis = data.resultado[i]["distrito"];
								arrayNomeDistrito[id_dis] = {'nome': nomeDistritox};
							}
							
							var orcado = data.resultado[i]["orcado"];
							var orcadobd = data.resultado[i]["orcado"];
							var atg = data.resultado[i]["atg"];
							var venda = data.resultado[i]["venda"];
							var previsao_perc = data.resultado[i]["previsao_perc"];
							var desvio = data.resultado[i]["desvio"];
							var desviobd = data.resultado[i]["desvio"];
							var crescimento = data.resultado[i]["crescimento"];
							var previsao = data.resultado[i]["previsao"];
							var previsaobd = data.resultado[i]["previsao"];
							var estoque_valor = data.resultado[i]["estoque_valor"];
							var valor_isv = data.resultado[i]["valor_isv"];
							var perc_estoque = data.resultado[i]["perc_estoque"];
							
							orcadobd = (orcadobd) ? orcadobd : 0;
							
							if (previsao != 'N/D') {
								if (previsao == undefined || previsao == null || previsao == "") {
									previsao = '--';
								} else {
									previsao = previsao.format(0, 3, '.', ',');
								}
							}
							
							//(chave_geo != '' && nivel_geo != 'dis' && nivel_geo != 'loj') ||
							if (
									(nivel_geo == 'dis' && nivel_com == 'ger') ||
									(nivel_geo == 'dis' && nivel_com == 'dep') ||
									(nivel_geo == 'reg' && nivel_com == 'ger') ||
									(nivel_geo == 'loj' && nivel_com == 'ger')
									) {

								//gerencia sendo filtrada po regiao não tem previsao
								previsao = '--';
								previsao_perc = '--';
								desvio = '--';
								order = 2;
								sentido = "desc";
								
								if(visao == "visao_comercial"){
									$("#legenda_comercial").html(legenda);
								}else{
									$("#legenda_geografica").html(legenda);
								}
								
							} else {
								if (desvio != '--')
									desvio = desvio.format(0, 3, '.', ',');
							}
							if (tituloTab == "Gerências") {
								var variavel_data = parseInt(data.resultado[i]["id_gerencia"]);
								var nomeG = data.resultado[i]["alias_nome"];
								var nGer = nomeG;
								arrayNomeGerencia[variavel_data] = {'nome': nGer};
								var funcao = 'click_gerencia';
							} else if (tituloTab == "Regiões") {
								var variavel_data = data.resultado[i]["regiao"];
								var funcao = 'click_regiao';
							} else if (tituloTab == "Distritos") {
								var variavel_data = data.resultado[i]["distrito"];
								var funcao = 'click_distrito';
							} else if (tituloTab == "Departamentos") {
								var variavel_data = data.resultado[i]["depto"];
								var nomeD = data.resultado[i]["alias_nome"];
								var nDp = nomeD;
								arrayNomeDepartamento[variavel_data] = {'nome': nDp};
								var funcao = 'click_dep';
							} else if (tituloTab == "Lojas") {
								var variavel_data = data.resultado[i]["loja"];
								var funcao = 'click_loja';
							}
							
							if (data.resultado[i]['desvio'] == '--') {
								desviobd = 0;
							} else {
								desviobd = parseFloat(data.resultado[i]['desvio'])
							}
							if (data.resultado[i]['previsao'] === undefined || data.resultado[i]['previsao'] === 'N/D' || data.resultado[i]['previsao'] === null || data.resultado[i]['previsao'] === "") {
								previsaobd = 0;
							} else {
								previsaobd = parseFloat(data.resultado[i]['previsao'])
							}
 

							if(dt_inx < dta_atl){
								var prev_val = "--";
								var prev_percentual = "--";
								var cresc = "--";
								desviobd = (venda-orcadobd);
								desv = desviobd.format(0, 3, '.', ',');
								$("#txt_atg").html('ATINGIMENTO');
								 ///////////////////////
								valor_isv          ='--';
								valor_isv_order    ='--';
								estoque_valor      = '--';
								estoque_valor_order='--';
								perc_estoque       ='--';
								perc_estoque_order ='--';
								///////////////////////
							}else if (data_inx == '' || data_inx == data_atual) {
								//dia atual
								var prev_val = previsao;
								var prev_percentual = previsao_perc;
								var cresc = crescimento;
								var desv = (desvio == '--') ? "<font color='#000'>--</font>" : desvio;
								$("#txt_atg").html('PREVISÃO');
								 ///////////////////////
								valor_isv          = valor_isv.format(0, 3, '.', ',');
								valor_isv_order    = valor_isv
								estoque_valor      = estoque_valor.format(0, 3, '.', ',');
								estoque_valor_order= estoque_valor;
								perc_estoque       = (perc_estoque.toFixed(1)).replace(".", ",");
								perc_estoque_order = perc_estoque;
								///////////////////////
							}else{
								//dias anteriores  
								var prev_val = '-';
								var prev_percentual = '-';
								var cresc = '-';
								var desv = "<font color='#000'>-</font>";
								$("#txt_atg").html('ATINGIMENTO');
								order = 2;
								sentido = "desc";
							}

							atg = (atg > 0) ? atg.toFixed(1) : atg;
							prev_percentual = (prev_percentual > 0) ? prev_percentual.toFixed(1) : prev_percentual;
							cresc = (cresc > 0 || cresc < 0) ? cresc.toFixed(1) : cresc;
							
							orcado = (orcado) ? orcado.format(0, 3, '.', ',') : orcado;
							
							if(hora_atual < 10 && (data_inx == data_atual || data_inx == '')){
								prev_val = "--";
								prev_percentual = "--";
								desv = "--";
								cresc = "--";
								order = 2;
								sentido = "desc";
							}
					  
							tab += '<tr class="' + funcao + '" style="font-size:25px;" data="' + variavel_data + '">';
							tab += '<td style="position:fixed; background-color:#fff; width:400px;z-index:999;" id="' + variavel_data + '" >' + data.resultado[i]["alias_nome"] + '</td>';
							tab += '<td  align=right>' + atg + '</td>';
							tab += '<td  align=right data-order=' + venda + '>' + venda.format(0, 3, '.', ',') + '</td>';
							tab += '<td  align=right data-order=' + orcadobd + '>' + orcado + '</td>';
							tab += '<td  align=right data-order=' + previsaobd + '>' + prev_val + '</td>';

							if (prev_percentual >= 100) {
								tab += "<td  align=right><font color='#5cb85c'><b>" + prev_percentual + '</b></font></td>';
							} else if (prev_percentual >= 90 && prev_percentual < 100) {
								tab += "<td  align=right><font color='#f0ad4e'><b>" + prev_percentual + '</b></font></td>';
							} else if (prev_percentual >= 75 && prev_percentual < 90) {
								tab += "<td  align=right><font color='#d9534f'><b>" + prev_percentual + '</b></font></td>';
							} else if (prev_percentual < 75) {
								tab += "<td  align=right><font color='#8B0000'><b>" + prev_percentual + '</b></font></td>';
							} else {
								tab += "<td  align=right>" + prev_percentual + '</td>';
							}

							if (desviobd >= 100) {
								tab += "<td  align=right data-order=" + desviobd + "><font color='#5cb85c'><b>" + desv + '</b></font></td>';
							} else if (desviobd >= 90 && desviobd < 100) {
								tab += "<td  align=right data-order=" + desviobd + "><font color='#f0ad4e'><b>" + desv + '</b></font></td>';
							} else if (desviobd >= 75 && desviobd < 90) {
								tab += "<td  align=right data-order=" + desviobd + "><font color='#d9534f'><b>" + desv + '</b></font></td>';
							} else if (desviobd < 75) {
								tab += "<td  align=right data-order=" + desviobd + "><font color='#8B0000'><b>" + desv + '</b></font></td>';
							} else {
								tab += "<td  align=right data-order=" + desviobd + ">" + desv + '</td>';
							}

							if (cresc > 0) {
								tab += "<td  align=right><font color='#5cb85c'><b>" + cresc + '</b></font></td>';
							} else if (cresc <= 0) {
								tab += "<td  align=right><font color='#8B0000'><b>" + cresc + '</b></font></td>';
							} else {
								tab += '<td  align=right>' + cresc + '</td>';
							}
							tab += '<td  align=right data-order=' + estoque_valor_order + '>' + estoque_valor+ '</td>';
							tab += '<td  align=right data-order=' + valor_isv_order + '>' + valor_isv+ '</td>';
							tab += '<td  align=right data-order=' + perc_estoque_order + '>' + perc_estoque + '</td>';


							tab += '</tr>';


						}
						tab += '</tbody>';
						tab += '</table>';
						tab += '</div>';                        
						console.log("teste");

						$("#" + visao).html(tab);
						var tablev = "table"+visao;
						$('.'+tablev+'.display').DataTable(
						{
							"order": [[ order, sentido ]],
							 "pageLength": 15
						});                        
					});
	}


	function imagemClima(descricao){
			var imagem = "";
			if(descricao === "ceu_claro"){
			  imagem = "ceu-claro.png";
			}else if(descricao === "chuva"){
			  imagem = "chuva.png";
			}else if(descricao === "chuva_a_noite"){
			  imagem = "chuva-noite.png";
			}else if(descricao === "chuva_pela_manha"){
			  imagem = "chuva-pela-manha.png";
			}else if(descricao === "chuvas_isoladas"){
			  imagem = "chuvas-isoladas.png";
			}else if(descricao === "chuva_a_tarde"){
			  imagem = "chuva-tarde.png";
			}else if(descricao === "chuvisco"){
			  imagem = "chuvisco.png";
			}else if(descricao === "chuvoso"){
			  imagem = "chuvoso.png";
			}else if(descricao === "encoberto"){ 
			  imagem = "encoberto.png";
			}else if(descricao === "encoberto_com_chuvas_isoladas"){ 
			  imagem = "encoberto-com-chuvas-isoladas.png";
			}else if(descricao === "geada"){ 
			  imagem = "geada.png";
			}else if(descricao ==="instavel"){
			  imagem = "instavel.png";
			}else if(descricao === "neve"){
			  imagem = "neve.png";
			}else if(descricao === "nevoeiro"){ 
			  imagem = "nevoeiro.png";
			}else if(descricao === "nublado"){
			  imagem = "nublado.png";
			}else if(descricao === "nublado_com_possibilidade_de_chuva"){
			  imagem = "nublado-com-possibilidade-chuva.png";
			}else if(descricao === "nublado_e_pancadas_de_chuva"){
			  imagem = "nublado-e-pancadas-chuva.png";
			}else if(descricao === "nublado_com_pancadas_pela_manhã"){
			  imagem = "nublado-pancadas-manha.png";
			}else if(descricao === "nublado_com_pancadas_a_tarde"){
			  imagem = "nublado-pancadas-tarde.png";
			}else if(descricao === "nublado_com_pancadas_a_noite"){
			  imagem = "nublado-pancadas-noite.png";
			}else if(descricao === "nubl._c/_poss._de_chuva_pela_manhã"){
			  imagem = "nublado-possibilidade-chuva-manha.png";
			}else if(descricao === "nublado_com_poss._de_chuva_a_noite"){
			  imagem = "nublado-possibilidade-chuva-noite.png";
			}else if(descricao === "nublado_com_poss._de_chuva_a_tarde"){
			  imagem = "nublado-possibilidade-chuva-tarde.png";
			}else if(descricao === "pancadas_de_chuva_a_noite"){
			  imagem = "pancadas-chuva-noite.png";
			}else if(descricao === "pancadas_de_chuva_pela_manhã"){
			  imagem = "pancadas-chuva-manha.png";
			}else if(descricao === "pancadas_de_chuva_a_tarde"){
			  imagem = "pancadas-chuva-tarde.png";
			}else if(descricao === "pancadas_de_chuva"){
			  imagem = "pancadas-de-chuva.png";
			}else if(descricao === "parcialmente_nublado"){
			  imagem = "parcialmente-nublado.png";
			}else if(descricao === "possibilidade_de_chuva"){
			  imagem = "possibilidade-chuva.png";
			}else if(descricao === "poss._de_chuva_pela_manha"){
			  imagem = "possibilidade-chuva-manha.png";
			}else if(descricao === "poss._de_chuva_a_tarde"){
			  imagem = "possibilidade-chuva-tarde.png";
			}else if(descricao === "poss._de_chuva_a_noite"){
			  imagem = "possibilidade-chuva-noite.png";
			}else if(descricao === "poss._de_panc._de_chuva_pela_manha"){ 
			  imagem = "possibilidade-pancada-chuva-manha.png";
			}else if(descricao === "poss._de_panc._de_chuva_a_tarde"){
			  imagem = "possibilidade-pancada-chuva-tarde.png";
			}else if(descricao === "poss._de_panc._de_chuva_a_noite"){ 
			  imagem = "possibilidade-pancada-chuva-noite.png";
			}else if(descricao === "poss._de_pancadas_de_chuva"){   
			  imagem = "possibilidade-pancadas-de-chuva.png";
			}else if(descricao === "predominio_de_sol"){
			  imagem = "predominio-sol.png";
			}else if(descricao === "tempestade"){
			  imagem = "tempestade.png";
			}else if(descricao === "variacao_de_nebulosidade"){
			  imagem = "variacao-nebulosidade.png";
			}if(descricao === "nao_definido"){
			  imagem = "nao-definido.png";
			}			 
	   return imagem;
	}
	
	
	function query_dados(visao, nivel_com, nivel_geo, chave_geo, chave_com) {
			//    nivel_com    identifica qual nível comercial deve ser carregado
			//     nivel_geo     identifica qual nível geográfico deve ser carregado 
			//     chave_geo     traz a chave do nível geográfico específico
			
			var legenda = "*Não existe previsão para esse tipo de filtro!";
			var order = 6;
			var sentido = "asc";
			var flag = '0';
			var dt_inx ="";
			var dta_atl="";
			var data_inx = $("#data").val();
			var date = new Date();
			hora_atual = date.getHours();
			
			$("#legenda_comercial").html('');
			$("#legenda_geografica").html('');
			
			if(data_inx){
				dt_res = data_inx.split('/');
				dt_inx = dt_res[2]+dt_res[1]+dt_res[0];
				
				dta_res = data_atual.split('/');
				dta_atl = dta_res[2]+dta_res[1]+dta_res[0];
			}
			
			if (visao == "visao_comercial") {
				chave_com_memoria_tabela_comercial = chave_com;
				chave_geo_memoria_tabela_comercial = chave_geo;
				nivel_com_memoria_tabela_comercial = nivel_com;
				nivel_geo_memoria_tabela_comercial = nivel_geo;
				if (nivel_com == "ger") {
					var titulo = "GERENCIAS";
					var tituloTab = "Gerências";
				} else if (nivel_com == "dep") {
					var titulo = "GERENCIAS/DEPARTAMENTOS";
					var tituloTab = "Departamentos";
					var flag = '1';
				}
			} else {
				chave_com_memoria_tabela_geografica = chave_com;
				chave_geo_memoria_tabela_geografica = chave_geo;
				nivel_com_memoria_tabela_geografica = nivel_com;
				nivel_geo_memoria_tabela_geografica = nivel_geo;
				if (nivel_geo == "reg") {
					var titulo = "REGIÕES";
					var tituloTab = "Regiões";
				} else if (nivel_geo == "dis") {
					var titulo = "REGIÕES/DISTRITOS";
					var tituloTab = "Distritos";
				} else if (nivel_geo == "loj") {
					var titulo = "REGIÕES/DISTRITOS/LOJAS";
					var tituloTab = "Lojas";
				}
				if (nivel_com == "dep") {
				   
					var flag = '1';
				}
			}

			$.ajax({
				type: 'POST',
				dataType: 'json',
				//async: false,
				data:{
					nivel_geo: nivel_geo,
					nivel_com: nivel_com,
					chave_geo: chave_geo,
					chave_com: chave_com,
					visao: visao,
					flag: flag,
					data: data_inx
				},

				url: 'home/query_dados',
				beforeSend : function() {
						$('#visao_comercial').block({ 
							message: '<img src="assets/images/pageloader.gif" /><br>Carregando...' ,
							css: { 
								border: 'none', 
								padding: '15px', 
								size:'30px',
								backgroundColor: 'none', 
								'-webkit-border-radius': '10px', 
								'-moz-border-radius': '10px', 
								opacity: .5, 
								color: 'white'  
							}
						});
						$('#visao_geografica').block({ 
							message: '<img src="assets/images/pageloader.gif" /><br>Carregando...' ,
							css: { 
								border: 'none', 
								padding: '15px', 
								size:'30px',
								backgroundColor: 'none', 
								'-webkit-border-radius': '10px', 
								'-moz-border-radius': '10px', 
								opacity: .5, 
								color: 'white' 
							}
						});
				},
				success: function(data) {
				  //  console.log(data);
					var tab = '<div style="">';
						tab += '<span class="seta-direita">';
						tab += '</span>';
						tab += '<table id="scroll-tab" class="table'+visao+' table-striped table-responsive display tb" style="height: 90%; width: 134%" >';
						tab += '<thead style="font-size:30px">';
						tab += '<tr>';
						tab += '<th class="p-um" style="position:fixed; background-color:#fff; width:380px; z-index: 1;">' + tituloTab + '</th>';
						tab += '<th style="text-align: right;padding-left:300px;position: inherit;">Atg%&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Venda&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Orçado&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Prev $&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Prev %&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Desvio&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Cresc %&nbsp;</th>';
						tab += '<th style="text-align: right;position: inherit;">Est R$</th>';
						tab += '<th style="text-align: right;position: inherit;">ESV R$</th>';
						tab += '<th id="esv-total" style="text-align: right;position: inherit;">% ESV</th>';
						tab += '</tr>';
						tab += '</thead>';
						tab += '<tbody>';
						for (i = 0; i < data.resultado.length; i++) {
							
							if (nivel_geo == "dis") {
								var nomeDistritox = data.resultado[i]["desc_distrito"];
								var id_dis = data.resultado[i]["distrito"];
								arrayNomeDistrito[id_dis] = {'nome': nomeDistritox};
							}
							
							var orcado = data.resultado[i]["orcado"];
							var orcadobd = data.resultado[i]["orcado"];
							var atg = data.resultado[i]["atg"];
							var venda = data.resultado[i]["venda"];
							var previsao_perc = data.resultado[i]["previsao_perc"];
							var desvio = data.resultado[i]["desvio"];
							var desviobd = data.resultado[i]["desvio"];
							var crescimento = data.resultado[i]["crescimento"];
							var previsao = data.resultado[i]["previsao"];
							var previsaobd = data.resultado[i]["previsao"];
							var estoque_valor = data.resultado[i]["estoque_valor"];
							var valor_isv = data.resultado[i]["valor_isv"];
							var perc_estoque = data.resultado[i]["perc_estoque"];
							
							orcadobd = (orcadobd) ? orcadobd : 0;
							
							if (previsao != 'N/D') {
								if (previsao == undefined || previsao == null || previsao == "") {
									previsao = '--';
								} else {
									previsao = previsao.format(0, 3, '.', ',');
								}
							}
							
							//(chave_geo != '' && nivel_geo != 'dis' && nivel_geo != 'loj') ||
							if (
									(nivel_geo == 'dis' && nivel_com == 'ger') ||
									(nivel_geo == 'dis' && nivel_com == 'dep') ||
									(nivel_geo == 'reg' && nivel_com == 'ger') ||
									(nivel_geo == 'loj' && nivel_com == 'ger')) {

								//gerencia sendo filtrada po regiao não tem previsao
								previsao = '--';
								previsao_perc = '--';
								desvio = '--';
								order = 2;
								sentido = "desc";
								
								if(visao == "visao_comercial"){
									$("#legenda_comercial").html(legenda);
								}else{
									$("#legenda_geografica").html(legenda);
								}
								
							} else {
								previsao_perc=(parseFloat(previsao_perc).toFixed(1)).replace(".", ",");
								if (desvio != '--')
									desvio = desvio.format(0, 3, '.', ',');
							}
							
							if (tituloTab == "Gerências") {
								var variavel_data = parseInt(data.resultado[i]["id_gerencia"]);
								var nomeG = data.resultado[i]["alias_nome"];
								var nGer = nomeG;
								arrayNomeGerencia[variavel_data] = {'nome': nGer};
								var funcao = 'click_gerencia';
							} else if (tituloTab == "Regiões") {
								var variavel_data = data.resultado[i]["regiao"];
								var funcao = 'click_regiao';
							} else if (tituloTab == "Distritos") {
								var variavel_data = data.resultado[i]["distrito"];
								var funcao = 'click_distrito';
							} else if (tituloTab == "Departamentos") {
								var variavel_data = data.resultado[i]["depto"];
								var nomeD = data.resultado[i]["alias_nome"];
								var nDp = nomeD;
								arrayNomeDepartamento[variavel_data] = {'nome': nDp};
								var funcao = 'click_dep';
							} else if (tituloTab == "Lojas") {
								var variavel_data = data.resultado[i]["loja"];
								var funcao = 'click_loja';
							}
							
							if (data.resultado[i]['desvio'] == '--') {
								desviobd = 0;
							} else {
								desviobd = parseFloat(data.resultado[i]['desvio'])
							}
							if (data.resultado[i]['previsao'] === undefined || data.resultado[i]['previsao'] === 'N/D' || data.resultado[i]['previsao'] === null || data.resultado[i]['previsao'] === "") {
								previsaobd = 0;
							} else {
								previsaobd = parseFloat(data.resultado[i]['previsao'])
							}
													   
							if(dt_inx < dta_atl){
								var prev_val = "--";
								///////////////////////////////
								var prev_percentual = "--";
								var cresc = "--";
								///////////////////////////////
								desviobd = (venda-orcadobd);
								desv = desviobd.format(0, 3, '.', ',');
								///////////////////////
								valor_isv          ='--';
								valor_isv_order    ='--';
								estoque_valor      ='--';
								estoque_valor_order='--';
								perc_estoque       ='--';
								perc_estoque_order ='--';
								///////////////////////
								$("#txt_atg").html('ATINGIMENTO');
							}else if (data_inx == '' || data_inx == data_atual) {
								//dia atual
								var prev_val = previsao;                             
								///////////////////////////////
								var prev_percentual = previsao_perc;
								var cresc = (parseFloat(crescimento).toFixed(1)).replace(".", ",");;
								///////////////////////////////
								var desv = (desvio == '--') ? "<font color='#000'>--</font>" : desvio;
								///////////////////////
								valor_isv_order    = valor_isv
								valor_isv          = valor_isv.format(0, 3, '.', ',');
								
								estoque_valor_order= estoque_valor;
								estoque_valor      = estoque_valor.format(0, 3, '.', ',');
								perc_estoque_order = perc_estoque;
								perc_estoque       = (perc_estoque.toFixed(1)).replace(".", ",");
								
								///////////////////////
								$("#txt_atg").html('PREVISÃO');
							}else{
								//dias anteriores  
								var prev_val = '-';
								var prev_percentual = '-';
								var cresc = '-';
								var desv = "<font color='#000'>-</font>";
								$("#txt_atg").html('ATINGIMENTO');
								order = 2;
								sentido = "desc";
							}

							atg = (atg > 0) ? atg.toFixed(1) : atg;
							prev_percentual = (prev_percentual > 0) ? prev_percentual.toFixed(1) : prev_percentual;
							cresc = (cresc > 0 || cresc < 0) ? cresc.toFixed(1) : cresc;
							
							orcado = (orcado) ? orcado.format(0, 3, '.', ',') : orcado;
							
							if(hora_atual < 10 && (data_inx == data_atual || data_inx == '')){
								prev_val = "--";
								prev_percentual = "--";
								desv = "--";
								cresc = "--";
								order = 2;
								sentido = "desc";
							}


							tab += '<tr class="' + funcao + '" style="font-size:25px" data="' + variavel_data + '">';
							tab += '<td style="position:fixed; background-color: #fff; width:400px;z-index:999;" id="' + variavel_data + '" >' + data.resultado[i]["alias_nome"] + '</td>';
							tab += '<td  align=right>' + atg + '</td>';
							tab += '<td  align=right data-order=' + venda + '>' + venda.format(0, 3, '.', ',') + '</td>';
							tab += '<td  align=right data-order=' + orcadobd + '>' + orcado + '</td>';
							tab += '<td  align=right data-order=' + previsaobd + '>' + prev_val + '</td>';

							if (prev_percentual >= 100) {
								tab += "<td  align=right><font color='#5cb85c'><b>" + prev_percentual + '</b></font></td>';
							} else if (prev_percentual >= 90 && prev_percentual < 100) {
								tab += "<td  align=right><font color='#f0ad4e'><b>" + prev_percentual + '</b></font></td>';
							} else if (prev_percentual >= 75 && prev_percentual < 90) {
								tab += "<td  align=right><font color='#d9534f'><b>" + prev_percentual + '</b></font></td>';
							} else if (prev_percentual < 75) {
								tab += "<td  align=right><font color='#8B0000'><b>" + prev_percentual + '</b></font></td>';
							} else {
								tab += "<td  align=right>" + prev_percentual + '</td>';
							}
							

							if (desviobd >= 100) {
								tab += "<td  align=right data-order=" + desviobd + "><font color='#5cb85c'><b>" + desv + '</b></font></td>';
							} else if (desviobd >= 90 && desviobd < 100) {
								tab += "<td  align=right data-order=" + desviobd + "><font color='#f0ad4e'><b>" + desv + '</b></font></td>';
							} else if (desviobd >= 75 && desviobd < 90) {
								tab += "<td  align=right data-order=" + desviobd + "><font color='#d9534f'><b>" + desv + '</b></font></td>';
							} else if (desviobd < 75) {
								tab += "<td  align=right data-order=" + desviobd + "><font color='#8B0000'><b>" + desv + '</b></font></td>';
							} else {
								tab += "<td  align=right data-order=" + desviobd + ">" + desv + '</td>';
							}

							if (cresc > 0) {
								tab += "<td  align=right><font color='#5cb85c'><b>" + cresc + '</b></font></td>';
							} else if (cresc <= 0) {
								tab += "<td  align=right><font color='#8B0000'><b>" + cresc + '</b></font></td>';
							} else {
								tab += '<td  align=right>' + cresc + '</td>';
							}
							
							tab += '<td  align=right data-order=' + estoque_valor_order + '>' + estoque_valor+ '</td>';
							tab += '<td  align=right data-order=' + valor_isv_order + '>' + valor_isv+ '</td>';
							tab += '<td  align=right data-order=' + perc_estoque_order + '>' + perc_estoque + '</td>';

							tab += '</tr>';
						}
						tab += '</tbody>';
						tab += '</table>';
						tab += '</div>';
						$("#" + visao).html(tab);
						var tablev = "table"+visao;
						$('.'+tablev+'.display').DataTable(
						{
							"order": [[ order, sentido ]],
							 "pageLength": 15
						});
						
						if(visao === 'visao_geografica')
							$('#atualizar_pag').attr('src','<?= asset("assets/images/atualizar.jpg"); ?>');
				},
				complete: function() {
				 $('#visao_comercial').unblock();  
				 $('#visao_geografica').unblock();  
				}
			});      
	}
		
		
	function carrega_mapa_regiao(flag_clima) {
			var data_in = $("#data").val();
			var dt_inx="";
			var dta_atl="";
			clima=flag_clima;
			var date = new Date();
			hora_atual = date.getHours();         
			if(data_in){
				dt_res = data_in.split('/');
				dt_inx = dt_res[2]+dt_res[1]+dt_res[0];
				
				dta_res = data_atual.split('/');
				dta_atl = dta_res[2]+dta_res[1]+dta_res[0];
			}

			$.post("home/carrega_dados",
					{data: data_in},
					function (data) {
						console.log(data);
						var center = new google.maps.LatLng(-15.0, -54.0);
						var map = new google.maps.Map(document.getElementById('map'), {
							zoom: 5,
							center: center,
							zoomControl: false,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						});
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
						}else {
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
							$("#btnClima").show();
						} else if (data_in == '' || data_in == data_atual) {
							//dia atual
							$('#previsao_perc').html(previsao_perc);
							$('#previsao_valor').html(previsao);
							$('#crescimento').html(data.dadosCompanhia[0]['crescimento_cia']);
							$('#desvio').html(data.dadosCompanhia[0]['desvio'].format(0, 3, '.', ','));
							$("#txt_atg").html('PREVISÃO');
							$("#btnClima").show();
						} else if (dt_inx < dta_atl){
							var desvant = data.dadosCompanhia[0]['venda_atual']-data.dadosCompanhia[0]['orc'];
							desvant = (desvant) ? desvant.format(0, 3, '.', ',') : desvant;
							$('#desvio').html(desvant);
							$('#previsao_perc').html('-');
							$('#previsao_valor').html('-');
							$('#crescimento').html('-');
							$("#txt_atg").html('ATINGIMENTO');
							$("#btnClima").hide();
						} else {
							//dias anteriores  
							$('#previsao_perc').html('-');
							$('#previsao_valor').html('-');
							$('#crescimento').html('-');
							$('#desvio').html('-');
							$("#txt_atg").html('ATINGIMENTO');
							$("#btnClima").hide();
						}
                        //console.log(data.clima);
						if (flag_clima == 1) {
							////////////ADICIONADO///////////////
							verdeCont = 0;
							amareloCont = 0;
							vermelhoCont = 0;
							vermelho_escuroCont = 0;
							/////////////////////////////////////
							for (var a = 0; a < parseInt(data.numArray2); a++) {
								climax = data.clima[a];
								console.log(climax);
								var imagem_tempo = "";
								latitude=climax.latitude;
								longitude=climax.longitude;

								var descricao_clima = climax.temp_condicoes;
								imagem_tempo = '<?= asset("assets/images/"); ?>' + imagemClima(climax.temp_condicoes);
								//console.log(climax.temp_condicoes, ": "+imagemClima(descricao_clima.trim()));
								var marker2 = new google.maps.Marker({
									position: {lat: latitude, lng: longitude},
									map: map,
									icon: imagem_tempo,
									chave: climax.loja,
									condicao: climax.temp_descricao,
									temp_max: climax.temp_max,
									temp_min: climax.temp_min,
									link: imagem_tempo,
									data_hora: climax.hora_carga,
									cidade: climax.cidade,
									temperatura: climax.temperatura
								});
								google.maps.event.addListener(marker2, 'click', function () {
									$(".telaClima").removeClass("hidden");
									$("#condicao").html(this.condicao);
									$("#temp_max").html(this.temp_max);
									$("#temp_min").html(this.temp_min);
									var dataHora = this.data_hora.split(" ");
									var hora = "Atualizado às " + dataHora[1];
									var imagemClima = '<img src="' + this.link + '"    >';
									$("#imagemClima").html(imagemClima);
									$("#hora").html(hora);
									$("#temperatura").html('<h2>' + this.temperatura + '</h2>');
									$("#cidade").html(this.cidade);
								});
							}
							for (var i = 0; i < parseInt(data.numArray); i++) {
								reg = data.posicaoReg[i];
								var indicadorCorMapa;
								if (data_in == '' || data_in == data_atual) {
								    indicadorCorMapa = reg.previsao_perc;
								} else {
									indicadorCorMapa = reg.atingimento;
								}
								if (indicadorCorMapa < 75.0) {
									cor = vermelho_escuro;
									vermelho_escuroCont++;
									imagem = imagem_vermelho_escuro;
								} else if (indicadorCorMapa >= 75.0 && indicadorCorMapa < 90.0) {
									cor = vermelho;
									vermelhoCont++;
									imagem = imagem_vermelho;
								} else if (indicadorCorMapa >= 90.0 && indicadorCorMapa < 100.0) {
									cor = amarelo;
									amareloCont++;
									imagem = imagem_amarelo;
								} else if (indicadorCorMapa > 100.0) {
									cor = verde;
									verdeCont++;
									imagem = imagem_verde;
								}
								
								cor    = (hora_atual < 10 && (data_in == data_atual || data_in == '')) ? "#CCCCCC" : cor;
								imagem = (hora_atual < 10 && (data_in == data_atual || data_in == '')) ? imagem_cinza : imagem;
								
								var arrayPosicoes = regiao[reg.regiao];
								if (arrayPosicoes != undefined) {
									$.each(arrayPosicoes, function (index, valor) {
										pintaRegiao(valor, map, cor);
									});
								}
							}
						} else {
							/////////////ADICIONADO/////////////
							verdeCont = 0;
							amareloCont = 0;
							vermelhoCont = 0;
							vermelho_escuroCont = 0;
							////////////////////////////////////
							for (var i = 0; i < parseInt(data.numArray); i++) {
								reg = data.posicaoReg[i];
								var indicadorCorMapa;
								if (data_in == '' || data_in == data_atual) {
									indicadorCorMapa = reg.previsao_perc;
								} else {
									indicadorCorMapa = reg.atingimento;
								}

								if (indicadorCorMapa < 75.0) {
									cor = vermelho_escuro;
									vermelho_escuroCont++;
									imagem = imagem_vermelho_escuro;
								} else if (indicadorCorMapa >= 75.0 && indicadorCorMapa < 90.0) {
									cor = vermelho;
									vermelhoCont++;
									imagem = imagem_vermelho;
								} else if (indicadorCorMapa >= 90.0 && indicadorCorMapa < 100.0) {
									cor = amarelo;
									amareloCont++;
									imagem = imagem_amarelo;
								} else if (indicadorCorMapa > 100.0) {
									cor = verde;
									verdeCont++;
									imagem = imagem_verde;
								}
								
								cor = (hora_atual < 10 && (data_in == data_atual || data_in == '')) ? "#CCCCCC" : cor;
								imagem = (hora_atual < 10 && (data_in == data_atual || data_in == '')) ? imagem_cinza : imagem;
								corRegiao[reg.regiao] = {'cor': cor};
								var nomeRegiaox = reg.nome_regiao;
								var nomeRegiaoy = nomeRegiaox;
								arrayNomeRegiao[reg.regiao] = {'nome': nomeRegiaoy};
								if (data_in == '' || data_in == data_atual) {
									//dia atual
									var prev_val = reg.previsao.format(0, 3, '.', ',');
									var prev_per = reg.previsao_perc + "%";
									var cresc = reg.crescimento + "%";
									var desv = reg.desvio.format(0, 3, '.', ',');
									$("#txt_atg").html('PREVISÃO');
								} else {
									//dias anteriores  
									var prev_val = '-';
									var prev_per = '-';
									var cresc = '-';
									var desv = '-';
									$("#txt_atg").html('ATINGIMENTO');
								}
								if(dt_inx < dta_atl){
									desvio = (reg.venda-reg.orcado);
									desvio = desvio.format(0, 3, '.', ',');
								}else{
									desvio = reg.desvio.format(0, 3, '.', ',');
								}
								var marker = new google.maps.Marker({
									position: {lat: parseFloat(reg[2]), lng: parseFloat(reg[3])}, //o numero dentro do array significa a coluna na tabela
									map: map,
									chave: reg.regiao,
									nome: reg.nome_regiao,
									venda: reg.venda.format(0, 3, '.', ','),
									previsao: prev_val,
									previsao_perc: prev_per,
									orcado: reg.orcado.format(0, 3, '.', ','),
									atingimento: reg.atingimento,
									crescimento: cresc,
									desvio: desvio,
									cor: cor,
									icon: '<?= asset("assets/images/"); ?>' + imagem,
									label: reg.regiao
								});
								$('#vermelho_escuro').html(vermelho_escuroCont);
								$('#vermelho').html(vermelhoCont);
								$('#amarelo').html(amareloCont);
								$('#verde').html(verdeCont);
								var arrayPosicoes = regiao[reg.regiao];
								if (arrayPosicoes != undefined) {
									$.each(arrayPosicoes, function (index, valor) {
										pintaRegiao(valor, map, cor);
									});
								}
								google.maps.event.addListener(marker, 'dblclick', function () {
									nivel_mapa = "DISTRITO";
									map.setZoom(9);
									map.setCenter(marker.getPosition());
									distritos(this.chave, this.cor);
								});
								google.maps.event.addListener(marker, 'click', function () {
									var id = this.chave;
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
									$(".tb").fadeToggle(1500);
									query_dados('visao_geografica', nivel_com_memoria_tabela_geografica, 'dis', id, chave_com_memoria_tabela_geografica);
									if (nivel_com_memoria_tabela_comercial == 'dep') {
										query_dados('visao_comercial', 'dep', id, id, chave_com_memoria_tabela_comercial);
									} else {
										query_dados('visao_comercial', 'ger', 'reg', id, '');
									}
									$(".tb").fadeToggle(1500);
									
									var cresc = ((hora_atual < 10 && (data_in == data_atual || data_in == ''))) ? "--" : this.crescimento;
									var desv = ((hora_atual < 10 && (data_in == data_atual || data_in == ''))) ? "--" : this.desvio;
									var prev = ((hora_atual < 10 && (data_in == data_atual || data_in == ''))) ? "--" : this.previsao;
									var prev_perc = ((hora_atual < 10 && (data_in == data_atual || data_in == ''))) ? "--" : this.previsao_perc;

									var content = '<div id="iw-container">' +
											'<div class="iw-title"><span style="font-weight: bold;">' + this.chave + '<span> <br> ' + this.nome + '</div>' +
											'<table class="table table-striped" style="width:100%">' +
											'<tr style="background-color:#4D4D4D;color:#fff"> <td style="border-top: 1px solid #000 !important;color:#ccc !important;font-size:13px !important;">Venda</td>      <td style="border-top: 1px solid #000 !important;font-weight: bold;font-size:18px !important;text-align: right;">' + this.venda + '</td></tr>' +
											'<tr style="background-color:#4D4D4D;color:#fff" ><td style="border-top: 1px solid #000 !important;color:#ccc !important;font-size:13px !important;">Previsão $</td> <td style="border-top: 1px solid #000 !important;font-weight: bold;font-size:18px !important;text-align: right;">' + prev + '</td></tr>' +
											'<tr style="background-color:#4D4D4D;color:#fff" ><td style="border-top: 1px solid #000 !important;color:#ccc !important;font-size:13px !important;">Previsão %</td> <td style="border-top: 1px solid #000 !important;font-weight: bold;font-size:18px !important;text-align: right;">' + prev_perc + '</td></tr>' +
											'<tr style="background-color:#4D4D4D;color:#fff" ><td style="border-top: 1px solid #000 !important;color:#ccc !important;font-size:13px !important;">Orçado</th>     <td style="border-top: 1px solid #000 !important;font-weight: bold;font-size:18px !important;text-align: right;">' + this.orcado + '</td></tr>' +
											'<tr style="background-color:#4D4D4D;color:#fff" ><td style="border-top: 1px solid #000 !important;color:#ccc !important;font-size:13px !important;">Atingimento</td><td style="border-top: 1px solid #000 !important;font-weight: bold;font-size:18px !important;text-align: right;">' + this.atingimento + '</td></tr>' +
											'<tr style="background-color:#4D4D4D;color:#fff" ><td style="border-top: 1px solid #000 !important;color:#ccc !important;font-size:13px !important;">Crescimento</td><td style="border-top: 1px solid #000 !important;font-weight: bold;font-size:18px !important;text-align: right;">' + cresc + '</td></tr>' +
											'<tr style="background-color:#4D4D4D;color:#fff" ><td style="border-top: 1px solid #000 !important;color:#ccc !important;font-size:13px !important;">Desvio</td>     <td style="border-top: 1px solid #000 !important;font-weight: bold;font-size:18px !important;text-align: right;">' + desv + '</td></tr>' +
											'</table>' +
											'</div>';
									if (!this.getMap()._infoWindow) {
										this.getMap()._infoWindow = new google.maps.InfoWindow();
									}
									this.getMap()._infoWindow.close();
									this.getMap()._infoWindow.setContent(content);
									this.getMap()._infoWindow.open(this.getMap(), this);

									google.maps.event.addListener(this.getMap()._infoWindow, 'domready', function () {
										// Reference to the DIV that wraps the bottom of infowindow
										var iwOuter = $('.gm-style-iw');
										var iwBackground = iwOuter.prev();
										var x = this.getMap()._infoWindow;
										window['event_close_regiao'] = x;
										// Removes background shadow DIV
										iwBackground.children(':nth-child(2)').css({'display': 'none'});
										// Removes white background DIV
										iwBackground.children(':nth-child(4)').css({'display': 'none'});
										// Changes the desired tail shadow color.
										iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index': '1'});
										// Reference to the div that groups the close button elements.
										var iwCloseBtn = iwOuter.next();
										iwCloseBtn.attr('onclick', 'javascript:regiao_companhia()');
										// Apply the desired effect to the close button
										iwCloseBtn.css({opacity: '1', 'z-index': '10015', right: '8px', top: '0px', border: '22px solid #d43f3a', 'border-radius': '16px', 'box-shadow': '0 0 5px #3990B9', 'cursor': 'pointer'});
										// If the content of infowindow not exceed the set maximum height, then the gradient is removed.
										if ($('.iw-content').height() < 140) {
											$('.iw-bottom-gradient').css({display: 'none'});
										}
										// The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
										iwCloseBtn.mouseout(function () {
											$(this).css({opacity: '1'});
										});
									});
								});
							}

						} //fim do else
					}
			);
	}
		
		
	function pintaRegiao(gr, map, cor) {
		var latlng = [];
		$(function () {
			$.each(gr, function (i, item) {
				latlng.push(new google.maps.LatLng(item.lat, item.long));
			});
		});
		var Regiao = new google.maps.Polygon({
			paths: latlng,
			strokeColor: '#FFF',
			strokeOpacity: 0.5,
			strokeWeight: 1,
			fillColor: cor,
			fillOpacity: 0.5,
			map: map
		});
	}
		
		
	function distritos(chave, cor) {
		var data_inx = $("#data").val();
		var dt_in="";
		var dta_atl="";
		var date = new Date();
		hora_atual = date.getHours();		
		if(data_inx){
			dt_res = data_inx.split('/');
			dt_in = dt_res[2]+dt_res[1]+dt_res[0];
			
			dta_res = data_atual.split('/');
			dta_atl = dta_res[2]+dta_res[1]+dta_res[0];
		}
		$.post("home/carrega_dados",
				{data: data_inx},
				function (data) {

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

					if(hora_atual < 10 && (data_inx == data_atual || data_inx == '')){
						$('#previsao_perc').html('--');
						$('#previsao_valor').html('--');
						$('#crescimento').html('--');
						$('#desvio').html('--');
						$("#txt_atg").html('PREVISÃO');
						$("#btnClima").show();
					} else if (data_inx == '' || data_inx == data_atual) {
						//dia atual
						$('#previsao_perc').html(previsao_perc);
						$('#previsao_valor').html(previsao);
						$('#crescimento').html(data.dadosCompanhia[0]['crescimento_cia']);
						$('#desvio').html(data.dadosCompanhia[0]['desvio'].format(0, 3, '.', ','));
						$("#txt_atg").html('PREVISÃO');
						$("#btnClima").show();
					} else if (dt_in < dta_atl){
						var desvant = data.dadosCompanhia[0]['venda_atual']-data.dadosCompanhia[0]['orc'];
						desvant = (desvant) ? desvant.format(0, 3, '.', ',') : desvant;
						$('#desvio').html(desvant);
						$('#previsao_perc').html('-');
						$('#previsao_valor').html('-');
						$('#crescimento').html('-');
						$("#txt_atg").html('ATINGIMENTO');
						$("#btnClima").hide();
					} else {
						//dias anteriores  
						$('#previsao_perc').html('-');
						$('#previsao_valor').html('-');
						$('#crescimento').html('-');
						$('#desvio').html('-');
						$("#txt_atg").html('ATINGIMENTO');
						$("#btnClima").hide();
					}           
		});
		var htmlMapx = $("#navTituloGeo").html();   //pego html da parte geo direita da tela
		var arrayMapx = htmlMapx.split(' / ');
		$("#ondeEstouMap").html(arrayMapx[0] + ' / ' + arrayMapx[1] + ' / ' + "DISTRITOS");
		$.post("home/carrega_distritos",
				{chave: chave, data: data_inx},
				function (data) {
					var center = new google.maps.LatLng(-15.0, -54.0);
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 5,
						center: center,
						scaleControl: true,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					});
					var arrayPosicoes = regiao[chave];
					if (arrayPosicoes != undefined) {
						$.each(arrayPosicoes, function (index, valor) {
							pintaRegiao(valor, map, cor);
						});
					}
					var ind;
					for (j = 1; j <= 13; j++) {
						if (j < 10) {
							ind = "0" + j;
						} else {
							ind = j;
						}
						if (regiao["GR" + ind] == regiao[chave]) {
							continue;
						}
						var arrayPosicoes2 = regiao["GR" + ind];
						if (arrayPosicoes2 != undefined) {
							$.each(arrayPosicoes2, function (index, valor) {
								pintaRegiao(valor, map, "#CCCCCC");
							});
						}
					}
					var dis;
					var imagem = '';
					for (var i = 0; i < parseInt(data.numArray); i++) {
						dis = data.posicaoDis[i];
						var indicadorCorMapa;
						if (data_inx == '' || data_inx == data_atual) {
							indicadorCorMapa = dis.previsao_perc;
						} else {
							indicadorCorMapa = dis.atg;
						}
						if (indicadorCorMapa < 75.0) {
							imagem = imagem_vermelho_escuro_gd;
						} else if (indicadorCorMapa >= 75.0 && indicadorCorMapa < 90.0) {
							imagem = imagem_vermelho_gd;
						} else if (indicadorCorMapa >= 90.0 && indicadorCorMapa < 100.0) {
							imagem = imagem_amarelo_gd;
						} else if (indicadorCorMapa > 100.0) {
							imagem = imagem_verde_gd;
						}
						
						imagem = (hora_atual < 10 && (data_inx == data_atual || data_inx == '')) ? imagem_cinza_gd : imagem;
						
						if (data_inx == '' || data_inx == data_atual) {
							//dia atual
							var prev_val = dis.previsao.format(0, 3, '.', ',');
							var prev_per = dis.previsao_perc + "%";
							var cresc = dis.crescimento + "%";
							var desv = dis.desvio.format(0, 3, '.', ',');
							$("#txt_atg").html('PREVISÃO');
						} else {
							//dias anteriores  
							var prev_val = '-';
							var prev_per = '-';
							var cresc = '-';
							var desv = '-';
							$("#txt_atg").html('ATINGIMENTO');
						}
						if(dt_in < dta_atl){
							desvio = (dis.venda-dis.orcado);
							desvio = desvio.format(0, 3, '.', ',');
						}else{
							desvio = dis.desvio.format(0, 3, '.', ',');
						}						
						var venda = (dis.venda) ? dis.venda.format(0, 3, '.', ',') : dis.venda;
						var orcado = (dis.orcado) ? dis.orcado.format(0, 3, '.', ',') : dis.orcado;							
						var marker = new google.maps.Marker({
							position: {lat: parseFloat(dis.longitude), lng: parseFloat(dis.latitude)},
							map: map,
							chave: dis.distrito,
							nome: dis.desc_distrito,
							venda: venda,
							previsao: prev_val,
							previsao_perc: prev_per,
							orcado: orcado,
							atingimento: dis.atg,
							crescimento: cresc,
							desvio: desvio,
							icon: '<?= asset("assets/images/"); ?>' + imagem,
							regiao: chave,
							label: dis.desc_distrito
						});
						var nomeDistritox = dis.desc_distrito;
						var nomeDistritoy = nomeDistritox;
						arrayNomeDistrito[dis.distrito] = {'nome': nomeDistritoy};

						google.maps.event.addListener(marker, 'dblclick', function () {
							nivel_mapa = "LOJA";
							map.setZoom(9);
							map.setCenter(marker.getPosition());
							lojas(this.chave, this.regiao, cor, this.nome);
						});
						google.maps.event.addListener(marker, 'click', function () {
							var id = this.chave;
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


							$(".tb").fadeToggle(1500);
							if (nivel_com_memoria_tabela_comercial == 'dep') {
								query_dados('visao_comercial', 'dep', 'dis', this.chave, chave_com_memoria_tabela_comercial);
							} else {
								query_dados('visao_comercial', 'ger', 'dis', this.chave, '');
							}
							query_dados('visao_geografica', '', 'loj', this.chave, '');
							$(".tb").fadeToggle(1500);
							codigoDistrito = this.chave;
							
							var cresc = ((hora_atual < 10 && (data_inx == data_atual || data_inx == ''))) ? "--" : this.crescimento;
							var desv = ((hora_atual < 10 && (data_inx == data_atual || data_inx == ''))) ? "--" : this.desvio;
							var prev = ((hora_atual < 10 && (data_inx == data_atual || data_inx == ''))) ? "--" : this.previsao;
							var prev_perc = ((hora_atual < 10 && (data_inx == data_atual || data_inx == ''))) ? "--" : this.previsao_perc;

							var content = '<div id="iw-container">' +
									'<div class="iw-title"><span style="font-weight: bold;">' + this.chave + '<span> <br> ' + this.nome + '</div>' +
									'<table class="table table-striped" style="width:100%">' +
									'<tr style="background-color:#4D4D4D;color:#fff"> <td style="color:#ccc  !important; font-size:13px  !important;">Venda</td>       <td style="font-weight: bold;font-size:18px !important;text-align: right;">' + this.venda + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc  !important; font-size:13px  !important;">Previsão $</td>  <td style="font-weight: bold;font-size:18px !important;text-align: right;">' + prev + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc  !important; font-size:13px  !important;">Previsão %</td>  <td style="font-weight: bold;font-size:18px !important;text-align: right;">' + prev_perc + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc  !important; font-size:13px  !important;">Orçado</th>      <td style="font-weight: bold;font-size:18px !important;text-align: right;">' + this.orcado + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc  !important; font-size:13px  !important;">Atingimento</td ><td style="font-weight: bold;font-size:18px !important;text-align: right;">' + this.atingimento + '%</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc  !important; font-size:13px  !important;">Crescimento</td> <td style="font-weight: bold;font-size:18px !important;text-align: right;">' + cresc + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc  !important; font-size:13px  !important;">Desvio</td>      <td style="font-weight: bold;font-size:18px !important;text-align: right;">' + desv + '</td></tr>' +
									'</table>' +
									'</div>';
							if (!this.getMap()._infoWindow) {
								this.getMap()._infoWindow = new google.maps.InfoWindow();
							}
							this.getMap()._infoWindow.close();
							this.getMap()._infoWindow.setContent(content);
							this.getMap()._infoWindow.open(this.getMap(), this);
							google.maps.event.addListener(this.getMap()._infoWindow, 'domready', function () {

								// Reference to the DIV that wraps the bottom of infowindow
								var iwOuter = $('.gm-style-iw');
								var iwBackground = iwOuter.prev();

								var x = this.getMap()._infoWindow;
								window['event_close_distritos'] = x;

								// Removes background shadow DIV
								iwBackground.children(':nth-child(2)').css({'display': 'none'});
								// Removes white background DIV
								iwBackground.children(':nth-child(4)').css({'display': 'none'});
							
								iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index': '1'});
								// Reference to the div that groups the close button elements.
								var iwCloseBtn = iwOuter.next();
								iwCloseBtn.attr('onclick', 'javascript:distritos_companhia()');
								// Apply the desired effect to the close button
								iwCloseBtn.css({opacity: '1', 'z-index': '10015', right: '8px', top: '0px', border: '22px solid #d43f3a', 'border-radius': '16px', 'box-shadow': '0 0 5px #3990B9', 'cursor': 'pointer'});
								// If the content of infowindow not exceed the set maximum height, then the gradient is removed.
								if ($('.iw-content').height() < 140) {
									$('.iw-bottom-gradient').css({display: 'none'});
								}
								// The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
								iwCloseBtn.mouseout(function () {
									$(this).css({opacity: '1'});
								});
							});
						});
					}
				}
		);
	}
		
		
	function lojas(chave, chave_regiao, cor, nome_dis) {
		var data_inx = $("#data").val();
		var dt_in="";
		var dta_atl="";
		var date = new Date();
		hora_atual = date.getHours();			
		if(data_inx){
			dt_res = data_inx.split('/');
			dt_in = dt_res[2]+dt_res[1]+dt_res[0];			
			dta_res = data_atual.split('/');
			dta_atl = dta_res[2]+dta_res[1]+dta_res[0];
		}			
		$.post("home/carrega_dados",
				{data: data_inx},
				function (data) {
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

					if(hora_atual < 10 && (data_inx == data_atual || data_inx == '')){
						$('#previsao_perc').html('--');
						$('#previsao_valor').html('--');
						$('#crescimento').html('--');
						$('#desvio').html('--');
						$("#txt_atg").html('PREVISÃO');
						$("#btnClima").show();
					} else if (data_inx == '' || data_inx == data_atual) {
						//dia atual
						$('#previsao_perc').html(previsao_perc);
						$('#previsao_valor').html(previsao);
						$('#crescimento').html(data.dadosCompanhia[0]['crescimento_cia']);
						$('#desvio').html(data.dadosCompanhia[0]['desvio'].format(0, 3, '.', ','));
						$("#txt_atg").html('PREVISÃO');
						$("#btnClima").show();
					} else if (dt_in < dta_atl){
						var desvant = data.dadosCompanhia[0]['venda_atual']-data.dadosCompanhia[0]['orc'];
						desvant = (desvant) ? desvant.format(0, 3, '.', ',') : desvant;
						$('#desvio').html(desvant);
						$('#previsao_perc').html('-');
						$('#previsao_valor').html('-');
						$('#crescimento').html('-');
						$("#txt_atg").html('ATINGIMENTO');
						$("#btnClima").hide();
					} else {
						//dias anteriores  
						$('#previsao_perc').html('-');
						$('#previsao_valor').html('-');
						$('#crescimento').html('-');
						$('#desvio').html('-');
						$("#txt_atg").html('ATINGIMENTO');
						$("#btnClima").hide();
					}
		
				}
		);
		var htmlMapx = $("#navTituloGeo").html();   //pego html da parte geo direita da tela
		var arrayMapx = htmlMapx.split(' / ');
		$("#ondeEstouMap").html(arrayMapx[0] + ' / ' + arrayMapx[1] + ' / ' + '<span class="click_distrito corLink"  data="' + chave + '" >' + nome_dis + '</span>' + ' / ' + "LOJAS");
		$.post("home/carrega_lojas",
				{chave: chave, data: data_inx},
				function (data) {
					var center = new google.maps.LatLng(-15.0, -54.0);
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 5,
						center: center,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					});
					var arrayPosicoes = regiao[chave_regiao];
					if (arrayPosicoes != undefined) {
						$.each(arrayPosicoes, function (index, valor) {
							pintaRegiao(valor, map, cor);
						});
					}
					var ind;
					for (j = 1; j <= 13; j++) {
						if (j < 10) {
							ind = "0" + j;
						} else {
							ind = j;
						}
						if (regiao["GR" + ind] == regiao[chave_regiao]) {
							continue;
						}
						var arrayPosicoes2 = regiao["GR" + ind];
						if (arrayPosicoes2 != undefined) {
							$.each(arrayPosicoes2, function (index, valor) {
								pintaRegiao(valor, map, "#CCCCCC");
							});
						}
					}
					var loj;
					var imagem;
					var markers = [];

					for (var i = 0; i < parseInt(data.numArray); i++) {
						loj = data.posicaoLoj[i];
						var indicadorCorMapa;
						if (data_inx == '' || data_inx == data_atual) {
							indicadorCorMapa = loj.previsao_perc;
						} else {
							indicadorCorMapa = loj.atg;
						}
						if (indicadorCorMapa < 75.0) {
							imagem = imagem_vermelho_escuro;
						} else if (indicadorCorMapa >= 75.0 && indicadorCorMapa < 90.0) {
							imagem = imagem_vermelho;
						} else if (indicadorCorMapa >= 90.0 && indicadorCorMapa < 100.0) {
							imagem = imagem_amarelo;
						} else if (indicadorCorMapa > 100.0) {
							imagem = imagem_verde;
						}
						
						imagem = (hora_atual < 10 && (data_inx == data_atual || data_inx == '')) ? imagem_cinza : imagem;

						if (data_inx == '' || data_inx == data_atual) {
							//dia atual
							var prev_val = loj.previsao_valor.format(0, 3, '.', ',');
							var prev_per = loj.previsao_perc + "%";
							;
							var cresc = loj.cresc + "%";;
							var desv = loj.desvio.format(0, 3, '.', ',');
							$("#txt_atg").html('PREVISÃO');
						} else {
							//dias anteriores  
							var prev_val = '-';
							var prev_per = '-';
							var cresc = '-';
							var desv = '-';
							$("#txt_atg").html('ATINGIMENTO');
						}
						if(dt_in < dta_atl){
							desvio = (loj.venda-loj.orcado);
							desvio = desvio.format(0, 3, '.', ',');
						}else{
							desvio = loj.desvio.format(0, 3, '.', ',');
						}
						var marker = new google.maps.Marker({
							position: {lat: parseFloat(loj[2]), lng: parseFloat(loj[1])},
							map: map,
							chave: loj.loja,
							nome: loj.nome,
							venda: loj.venda.format(0, 3, '.', ','),
							previsao: prev_val,
							previsao_perc: prev_per,
							orcado: loj.orcado.format(0, 3, '.', ','),
							atingimento: loj.atg,
							crescimento: cresc,
							desvio: desvio,
							icon: '<?= asset("assets/images/"); ?>' + imagem,
							temperatura: loj.temperatura,
							condicao: loj.temp_descricao,
							link: loj.link,
							label: '' + loj.loja,
							latitude: parseFloat(loj[2]),
							longitude: parseFloat(loj[1])
						});
						markers.push(marker);
						  


						var nomeLojax = loj.nome;
						var nomeLojay = nomeLojax;
						arrayNomeLoja[loj.loja] = {'nome': nomeLojay};
						
						google.maps.event.addListener(marker, 'dblclick', function () {
							StreetView(this.latitude,this.longitude);
						});
						
						
						google.maps.event.addListener(marker, 'click', function () {
							var id = this.chave;
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

							$(".tb").fadeToggle(1500);
							if (nivel_com_memoria_tabela_comercial == 'dep') {
								query_dados('visao_comercial', 'dep', 'loj', this.chave, chave_com_memoria_tabela_comercial);
							} else {
								query_dados('visao_comercial', 'ger', 'loj', this.chave, '');
							}
							$(".tb").fadeToggle(1500);
							codigoLoja = this.chave;
							
							var cresc = ((hora_atual < 10 && (data_inx == data_atual || data_inx == ''))) ? "--" : this.crescimento;
							var desv = ((hora_atual < 10 && (data_inx == data_atual || data_inx == ''))) ? "--" : this.desvio;
							var prev = ((hora_atual < 10 && (data_inx == data_atual || data_inx == ''))) ? "--" : this.previsao;
							var prev_perc = ((hora_atual < 10 && (data_inx == data_atual || data_inx == ''))) ? "--" : this.previsao_perc;
								
							var content = '<div id="iw-container">' +
									'<div class="iw-title"><span style="font-weight: bold;">' + this.chave + '<span> <br> ' + this.nome + '</div>' +
									'<table class="table table-striped" style="width:100%">' +
									'<tr style="background-color:#4D4D4D;color:#fff"> <td style="color:#ccc ;font-size:13px">Venda</td><td style="font-weight: bold;font-size:18px;text-align: right;">' + this.venda + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Previsão $</td><td style="font-weight: bold;font-size:18px;text-align: right;">' + prev + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Previsão %</td><td style="font-weight: bold;font-size:18px;text-align: right;">' + prev_perc + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Orçado</th><td style="font-weight: bold;font-size:18px;text-align: right;">' + this.orcado + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Atingimento</td ><td style="font-weight: bold;font-size:18px;text-align: right;">' + this.atingimento + '%</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Crescimento</td><td style="font-weight: bold;font-size:18px;text-align: right;">' + cresc + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Desvio</td><td style="font-weight: bold;font-size:18px;text-align: right;">' + desv + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Clima</td><td style="font-weight: bold;font-size:18px;text-align: right;">' + this.condicao + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Temperatura</td><td style="font-weight: bold;font-size:18px;text-align: right;">' + this.temperatura + '</td></tr>' +
									'<tr style="background-color:#4D4D4D;color:#fff" ><td style="color:#ccc ;font-size:13px">Imagem clima</td><td style="font-weight: bold;font-size:18px;text-align: right;"><img src="' + this.link + '" class="img-responsive pull-right" </td></tr>' +
									'</table>' +
									'</div>';

							if (!this.getMap()._infoWindow) {
								this.getMap()._infoWindow = new google.maps.InfoWindow();
							}
							this.getMap()._infoWindow.close();
							this.getMap()._infoWindow.setContent(content);
							this.getMap()._infoWindow.open(this.getMap(), this);
							google.maps.event.addListener(this.getMap()._infoWindow, 'domready', function () {
								// Reference to the DIV that wraps the bottom of infowindow
								var iwOuter = $('.gm-style-iw');
								var iwBackground = iwOuter.prev();

								var x = this.getMap()._infoWindow;
								window['event_close_lojas'] = x;

								// Removes background shadow DIV
								iwBackground.children(':nth-child(2)').css({'display': 'none'});
								// Removes white background DIV
								iwBackground.children(':nth-child(4)').css({'display': 'none'});
								// Moves the infowindow 115px to the right.
                    
								// Changes the desired tail shadow color.
								iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index': '1'});
								// Reference to the div that groups the close button elements.
								var iwCloseBtn = iwOuter.next();
								iwCloseBtn.attr('onclick', 'javascript:lojas_companhia()');
								// Apply the desired effect to the close button
								iwCloseBtn.css({opacity: '1', 'z-index': '10015', right: '8px', top: '0px', border: '22px solid #d43f3a', 'border-radius': '16px', 'box-shadow': '0 0 5px #3990B9', 'cursor': 'pointer'});
								// If the content of infowindow not exceed the set maximum height, then the gradient is removed.
								if ($('.iw-content').height() < 140) {
									$('.iw-bottom-gradient').css({display: 'none'});
								}
								// The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
								iwCloseBtn.mouseout(function () {
									$(this).css({opacity: '1'});
								});
							});
						});
					}
					markerCluster = new MarkerClusterer(map, markers, {imagePath: 'https://googlemaps.github.io/js-marker-clusterer/images/m'});
					
				}
		);				
	}
		
		
	function StreetView(lat, long) {    
		var panorama = new google.maps.StreetViewPanorama(
			document.getElementById('map'), {
			  position: {lat: lat, lng: long},
			  addressControlOptions: {
				position: google.maps.ControlPosition.BOTTOM_CENTER
			  },
			  linksControl: true,
			  panControl: true,
			  enableCloseButton: true
		});
	}
		
		
	function carrega_mapa(){
		$('#atualizar_pag').attr('src','<?= asset("assets/images/atualizando.gif"); ?>');
		
		query_dados('visao_comercial', nivel_com_memoria_tabela_comercial, nivel_geo_memoria_tabela_comercial, chave_geo_memoria_tabela_comercial, chave_com_memoria_tabela_comercial);
		query_dados('visao_geografica', nivel_com_memoria_tabela_geografica, nivel_geo_memoria_tabela_geografica, chave_geo_memoria_tabela_geografica, chave_com_memoria_tabela_geografica);
		$(".tb").fadeToggle(1500);
		
		if (nivel_mapa == "LOJA") {
			lojas(codigoDistrito, codigoRegiao, corRegiao[codigoRegiao].cor, nomeDistrito);
			return false;
		}
		if (nivel_mapa == "DISTRITO") {
			distritos(codigoRegiao, corRegiao[codigoRegiao].cor);
			return false;
		}
		if (nivel_mapa == "REGIÃO") {
			carrega_mapa_regiao(clima);
			return false;
		}
	}



	//--------------------------------------------------------------------------------------------------------------------   



	$(document).ready(function () {
	   init();
	});

</script>
