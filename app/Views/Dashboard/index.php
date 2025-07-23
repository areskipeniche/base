<?= $this->extend(theme_view('index')) ?>

<?= $this->section('content') ?>
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 fw-bold text-primary"><?= empty($title) ?: esc($title); ?></h6>
        </div>
        <div class="card-body">
          <div class="row">
              <!-- Conteúdo da Página Principal do Painel Administrativo  -->

          </div>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection() ?>

<?= $this->section('modal') ?>

<?= $this->endSection() ?>

<?= $this->section('CustomHeadInsertions') ?>

<?= $this->endSection() ?>

<?= $this->section('CustomFooterInsertions') ?>

<?= $this->endSection() ?>
