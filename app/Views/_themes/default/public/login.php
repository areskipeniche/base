<!DOCTYPE html>
<html lang="<?= request()->getDefaultLocale() ?>">
  <?= $this->include(theme_view('partials/header')) ?>
  <body>
    <?= $this->include(theme_view('partials/navbar')) ?>
    <main>
      <?php echo $this->renderSection('content'); ?>
    </main>
    <?= $this->include(theme_view('partials/footer')) ?>
    <?php if(auth()->loggedIn()): ?>
  		<?= view_cell('Modals/LogoutCell::render') ?>
    <?php endif; ?>
    <?= $this->include(theme_view('partials/scripts')) ?>
  </body>
</html>