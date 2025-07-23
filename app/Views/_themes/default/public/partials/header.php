<head>
  <meta charset="<?= config('MyApp')->webCharset ?>">
  <meta name="viewport" content="<?= config('MyApp')->webViewport ?>">
  <meta name="description" content="<?= config('MyApp')->webDescription ?>">
  <meta name="author" content="<?= config('MyApp')->webAuthor ?>">
  <title><?= config('MyApp')->shortName ?> | <?= isset($title) ? esc($title) : '' ?></title>
  <!-- Bootstrap 5 CSS -->
  <?= link_tag(bootstrap_asset('css/bootstrap.min.css')) ?>  
  <!-- Bootstrap Icons -->
  <?= link_tag(bootstrap_icons('bootstrap-icons.min.css')) ?>  
  <!-- CSS Customizado -->
  <?= link_tag(custom_asset('css/custom.css')) ?>
  <?php // if exists 'Custom Head Insertions' // ?>
  <?= $this->renderSection('CustomHeadInsertions', true) ?>
</head>