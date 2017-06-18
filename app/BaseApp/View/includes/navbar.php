<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= asset("/home"); ?>">Home</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="<?= asset("/projeto"); ?>">Projetos <span class="sr-only">(current)</span></a></li>
				<li><a href="<?= asset("/atividades"); ?>">Atividades</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recursos <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= asset("/recurso"); ?>">Recursos</a></li>
						<li><a href="<?= asset("/alocacao"); ?>">Alocação</a></li>
						<li><a href="<?= asset("/ferias");   ?>">Férias</a></li>
						<li><a href="<?= asset("/folgas");   ?>">Folgas</a></li>
						<li><a href="<?= asset("/plantao");  ?>">Plantão</a></li>
						<li><a href="<?= asset("/faltas");   ?>">Faltas</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrativo <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= asset("/area"); ?>">Áreas</a></li>
						<li><a href="<?= asset("/list/tecnologias"); ?>">Especialidades / Tecnologias</a></li>
						<li><a href="<?= asset("/list/diretorias"); ?>">Diretorias</a></li>
						<li><a href="<?= asset("/list/beneficios"); ?>">Benefícios</a></li>
						<li><a href="<?= asset("/list/origem_demanda"); ?>">Origem de demandas</a></li>
						<li><a href="<?= asset("/list/status_projeto"); ?>">Status de projeto</a></li>
						<li><a href="<?= asset("/list/programa"); ?>">Programa (Tasker)</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?= asset("/empresa"); ?>">Empresas</a></li>
						<li><a href="<?= asset("/list/nivel_cargo"); ?>">Nível de cargos</a></li>
					</ul>  
				</li>
				<li><a href="<?= asset("/mar"); ?>">MAR</a></li>
				<li><a href="<?= asset("/dashboard"); ?>">Dashboard</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$user->nome?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Meu perfil</a></li>
						<li><a href="#">Modificar minha senha</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?= asset("/logout"); ?>">Sair</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
