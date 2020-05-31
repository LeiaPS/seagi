<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Wellington Luiz Benedito Ostemberg, Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.0.1">
	<title><?php echo(!empty($viewData['title']))?$viewData['title']:'SEAGI - Sistema Eletrônico de Análise e Gerenciamento de Informações'; ?></title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

	<!-- Icone Favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo IMG_URL.'brasao.png'; ?>">

	<!-- Jquery, Popper e JMask -->
	<script defer src="<?php echo JS_URL; ?>jquery.js"></script>
	<script defer src="<?php echo JS_URL; ?>popper.js"></script>
	<script defer src="<?php echo JS_URL; ?>jquery.mask.min.js"></script>


	<!-- Icones Personalizados -->
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>fontawesome.min.css">
	<script defer src="<?php echo JS_URL; ?>fontawesome.min.js"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>bootstrap.css">
	<script defer src="<?php echo JS_URL; ?>bootstrap.js"></script>
	<script defer src="<?php echo JS_URL; ?>bootstrap.bundle.js"></script>


	<!-- CSS Personalizado -->
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>style.css">

	<!-- CSS DashBoard -->
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>dashboard.css">

	<!-- JS Personalizado -->
	<script defer src="<?php echo JS_URL; ?>script.js"></script>

	<script defer src="<?php echo JS_URL; ?>dashboard.js"></script>

</head>
<body>
	<nav class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow" style="background: #2e3192">
		<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo BASE_URL; ?>">SEAGI - GMD</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button><input type="text" alt="lista-clientes" class="form-control input-search" placeholder="Buscar em todos os campos" style="text-align: center;">
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">				
				<?php if (!empty($_SESSION['logged'])): ?>
					<a class="nav-link" href="<?php echo BASE_URL; ?>usuarios/loggout">Sair (Loggout)</a>
				<?php endif ?>
			</li>
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background: #fef200">
				<div class="sidebar-sticky pt-3">					
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>Painel Administrativo</span>
						<a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
							<span data-feather="plus-circle"></span>
						</a>
					</h6>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="btn" href="<?php echo BASE_URL; ?>">
								<span><i class="fas fa-home"></i></span>
								Home <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="btn" href="<?php echo BASE_URL; ?>boletins">
								<span><i class="fas fa-bold"></i></span>
								Boletins
							</a>
						</li>
						<li class="nav-item">
							<a class="btn" href="<?php echo BASE_URL; ?>guarnicoes">
								<span><i class="fas fa-user-shield"></i></span>
								Guarnições
							</a>
						</li>
						<li class="nav-item">
							<a class="btn" href="<?php echo BASE_URL; ?>viaturas">
								<span><i class="fas fa-car"></i></span>
								Viaturas
							</a>
						</li>
						<li class="nav-item">
							<a class="btn" href="<?php echo BASE_URL; ?>pessoas">
								<span><i class="fas fa-users-cog"></i></span>
								Pessoal
							</a>
						</li>
						<li class="nav-item">
							<a class="btn" href="<?php echo BASE_URL; ?>postos">
								<span><i class="fas fa-car"></i></span>
								Postos
							</a>
						</li>
						<li class="nav-item">
							<a class="btn" href="<?php echo BASE_URL; ?>partes">
								<span><i class="far fa-file-powerpoint"></i></span>
								Partes
							</a>								
						</li>
					</ul>				
				</div>
			</nav>

			<!-- Início da View -->

						<?php $this->loadViewInTemplate($viewName, $viewData); ?>
						
						<!-- Final da View -->

		</div>
	</div>
</body>
</html>