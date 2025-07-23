<?= $this->extend(theme_view('index')) ?>

<?= $this->section('content') ?>
  <div class="row">
    <div class="col-xl-8 col-lg-7">
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
    <!-- begin::Últimas Atividades -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 fw-bold text-primary">Últimas Atividades</h6>
        </div>
        <div class="card-body">
          <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Novo usuário registrado</h6>
                <small class="text-muted">15 min atrás</small>
              </div>
              <p class="mb-1">João Silva criou uma conta</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Novo pedido recebido</h6>
                <small class="text-muted">1 hora atrás</small>
              </div>
              <p class="mb-1">Pedido #12345</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Pagamento aprovado</h6>
                <small class="text-muted">3 horas atrás</small>
              </div>
              <p class="mb-1">R$ 1.200,00</p>
            </a>
          </div>
        </div>
      </div>
    </div><!-- end::Últimas Atividades -->
  </div>

<?= $this->endSection() ?>

<?= $this->section('modal') ?>

<?= $this->endSection() ?>

<?= $this->section('CustomHeadInsertions') ?>

<?= $this->endSection() ?>

<?= $this->section('CustomFooterInsertions') ?>

<?= $this->endSection() ?>
