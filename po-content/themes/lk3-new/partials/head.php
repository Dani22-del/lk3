<!-- partials/head.php -->
<?php
// Pastikan $page dan $title bisa diset oleh pages/*.php
$theme_base = '/po-content/themes/lk3-new';
?>
<head>  
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($title ?? 'LK3 Training Center') ?></title>

  <!-- vendor -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

  <!-- main stylesheet -->
  <link rel="stylesheet" href="<?= $theme_base ?>/css/main.css">

  <!-- page-specific stylesheet (if exists) -->
  <?php if (!empty($page)): ?>
    <?php $page_css = $theme_base . "/css/{$page}.css"; ?>
    <link rel="stylesheet" href="<?= $page_css ?>">
  <?php endif; ?>
</head>
