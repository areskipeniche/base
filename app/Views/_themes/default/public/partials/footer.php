<footer class="bg-dark text-white py-2 mt-0">
  <div class="container">
    <hr class="my-4 bg-light">
    <div class="text-center">
      <p class="mb-0">&copy; <?= date('Y') ?> - <?= setting('app.shortName') ?>. <?= lang('Auth.view.theme.footer.all_rights_reserved') ?></p>
    </div>
  </div>
</footer>
<?php // if exists 'Modals' // ?>
<?= $this->renderSection('modals', true) ?>
<?php // if exists 'Custom Footer Insertions' // ?>
<?= $this->renderSection('CustomFooterInsertions', true) ?>