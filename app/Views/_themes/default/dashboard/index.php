<!DOCTYPE html>
<html lang="<?= request()->getDefaultLocale() ?>">
  <?= $this->include(theme_view('partials/header', true)) ?>
  <body class="d-flex flex-column min-vh-100">
    <?= $this->include(theme_view('partials/navbar', true)) ?>
    <!-- Sidebar e Conteúdo Principal -->
    <div class="container-fluid flex-grow-1">
      <div class="row">
        <?= view_cell('Dashboard/SidebarCell::render') ?>
        <!-- Conteúdo Principal -->
        <main class="col-lg-10 col-md-9 ms-sm-auto px-md-4 py-4">
          <?= view_cell('Utils/AlertMessageCell::render') ?>
          <?= view_cell('Dashboard/CardsCell::render') ?>
          <?php echo $this->renderSection('content'); ?>
        </main>
      </div>
    </div>
    <?= $this->include(theme_view('partials/footer', true)) ?>
    <?php if(auth()->loggedIn()): ?>
      <?= view_cell('Modals/LogoutCell::render') ?>
    <?php endif; ?>
    <?= $this->include(theme_view('partials/scripts', true)) ?>
  </body>
</html>