<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= setting('app.description') ?? '' ?>">
  <meta name="author" content="<?= setting('app.author') ?? '' ?>">
  <title><?= setting('app.shortName') ?> | <?= isset($title) ? esc($title) : '' ?></title>
  <!-- Bootstrap 5 CSS -->
  <?= link_tag(bootstrap_asset('css/bootstrap.min.css')) ?>  
  <!-- Bootstrap Icons -->
  <?= link_tag(bootstrap_icons('bootstrap-icons.min.css')) ?>  
  <!-- CSS Customizado -->
  <?= link_tag(custom_asset('css/custom.css')) ?>
  <?php // if exists 'Custom Head Insertions' // ?>
  <?= $this->renderSection('CustomHeadInsertions', true) ?>
</head>