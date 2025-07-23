<?= $this->extend(theme_view('index')) ?>

<?= $this->section('content') ?>
	<div class="container mt-5">
		<div class="card shadow-sm">
			<div class="card-body text-center">
				<i class="bi bi-lock-fill text-danger" style="font-size: 3rem;"></i>
				<h5 class="card-title mt-3">Você não tem permissão para acessar esta página.</h5>
				<p class="card-text">Entre em contato com o administrador se acredita que isso é um erro.</p>
				<a href="<?= route_to('change-profile') ?>" class="btn btn-primary">
					<i class="bi bi-arrow-left me-2"></i><?= lang('Auth.user.change-profile') ?>
				</a>
				<a href="<?= route_to('logout') ?>" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#logoutModal">
					<i class="bi bi-box-arrow-left me-2"></i><?= lang('Auth.action.logout') ?>
				</a>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>

<?= $this->section('modals') ?>
  <?php // caso necessário, inserir os Modals ?>

<?= $this->endSection() ?>

<?= $this->section('CustomHeadInsertions') ?>
  <!-- Custom styles for this template-->

<?= $this->endSection() ?>

<?= $this->section('CustomFooterInsertions') ?>
  
<?= $this->endSection() ?>