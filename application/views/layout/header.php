<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Controlled</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>

	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">
	<script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href=""><img width="150" style="" src="<?php echo base_url('assets/images/park.png') ?>"></a>
	<div>
		<form method="post">
			<input class="form-control form-control-dark" type="submit" name="busca" id="busca" placeholder="Buscar" aria-label="Search" value="">
		</form>
	</div>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="">Sair</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('note') ?>">
              <span data-feather="file"></span>
              Home
            </a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('note/listarUsu') ?>">
              <span data-feather="file"></span>
              Novo Usuário
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('note/novoFuncionario') ?>">
              <span data-feather="shopping-cart"></span>
              Novo Funcionário
            </a>
					</li>
					<li class="nav-item">
            <a class="nav-link" href="">
              <span data-feather="shopping-cart"></span>
              Inquilinos
            </a>
          </li>
        </ul>
      </div>
    </nav>

