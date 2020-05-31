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
		<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo BASE_URL; ?>"><?php echo(!empty($viewData['subtitle']))?$viewData['subtitle']:'SEAGI - GMD'; ?></a>
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
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="#">
								<span data-feather="home"></span>
								Painel Administrativo <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="btn" href="<?php echo BASE_URL; ?>">
								<span><i class="fas fa-home"></i></span>
								Home <span class="sr-only">(current)</span>
							</a>
						</li>	
						<li class="nav-item">
							<a class="btn" href="#">
								<span><i class="far fa-plus-square"></i></span>
								Adicionar
							</a>
						</li>
						<li class="nav-item">
							<a class="btn" href="#">
								<span><i class="fas fa-clipboard"></i></span>
								Relatórios
							</a>
						</li>
					</div>
				</nav>
				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      				<div class="d-flex pt-3 pb-2 mb-3">

						<!-- Início da View -->

						<?php $this->loadViewInTemplate($viewName, $viewData); ?>
						
						<!-- Final da View -->

			    	</div>
			    </main>
			</div>
		</div>
	</body>
	</html>