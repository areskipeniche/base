<?= $this->extend(theme_view('login')) ?>

<?= $this->section('content') ?>
	<div class="col-md-4 mx-auto py-4">
		<?= view_cell('Utils/AlertMessageCell::render') ?>
		
		<form action="<?= base_url('login/authenticate') ?>" method="post">
			<?= csrf_field() ?>
			<h1><?= isset($title) ? $title : '' ?></h1>
			<div class="mb-3">
				<label for="credential" class="form-label"><?= lang('Auth.view.fields.user.login.credential') ?></label>
				<input type="text" name="credential" id="credential" class="form-control" value="<?= old('credential') ?>" required>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label"><?= lang('Auth.view.fields.user.login.password') ?></label>
				<input type="password" name="password" id="password" class="form-control" required>
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" name="remember" id="remember" class="form-check-input">
				<label for="remember" class="form-check-label"><?= lang('Auth.view.fields.user.login.remember') ?></label>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary w-25">
					<i class="bi bi-box-arrow-in-right me-2"></i><?= lang('Auth.action.signin') ?>
				</button>
			</div>
		</form>
	
		<div class="text-center mt-3">
			<?php if (setting('Auth.allowRegistration')) : ?>
				<div class="mt-3 text-center">
						<?= lang('Auth.needAccount') ?>
						<a href="<?= url_to('register') ?>">
								<?= lang('Auth.register') ?>
						</a>
				</div>
			<?php endif ?>
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