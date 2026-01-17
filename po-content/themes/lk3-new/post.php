<?php
// Data dari PopojiCMS
// $post = detail post
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title><?= $post['title']; ?> - LK3 Training Center</title>
  <link rel="stylesheet" href="/po-content/themes/lk3-new/css/main.css">
</head>
<body class="bg-slate-50">

<?php include __DIR__.'/partials/header.php'; ?>

<main class="max-w-7xl mx-auto px-4 py-16">

  <h1 class="text-4xl font-extrabold text-blue-900 mb-4">
    <?= $post['title']; ?>
  </h1>

  <p class="text-slate-500 mb-8">
    <?= date('d M Y', strtotime($post['date'])); ?>
  </p>

  <img
    src="<?= BASE_URL.'/po-content/uploads/'.$post['picture']; ?>"
    class="rounded-3xl mb-12 w-full h-96 object-cover"
  >

  <article class="prose max-w-none">
    <?= $post['content']; ?>
  </article>

</main>

<?php include __DIR__.'/partials/footer.php'; ?>

</body>
</html>
