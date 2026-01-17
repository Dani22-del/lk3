<?php
// Data dari PopojiCMS
// $category = info kategori
// $posts = daftar post dalam kategori

?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title><?= $category['title']; ?> - LK3 Training Center</title>
  <link rel="stylesheet" href="/po-content/themes/lk3-new/css/main.css">
</head>
<body class="bg-slate-50">

<?php include __DIR__.'/partials/header.php'; ?>

<section class="py-24 max-w-7xl mx-auto px-4">
  <div class="text-center mb-16">
    <h1 class="text-3xl font-extrabold uppercase">
      <?= $category['title']; ?>
    </h1>
    <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
      <?= $category['description']; ?>
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <?php foreach ($posts as $post): ?>
      <div class="bg-white p-6 rounded-3xl border hover:shadow-xl transition">
        <img
          src="<?= BASE_URL.'/po-content/uploads/'.$post['picture']; ?>"
          class="rounded-xl h-40 w-full object-cover mb-4"
        >

        <h3 class="font-bold text-lg mb-2">
          <?= $post['title']; ?>
        </h3>

        <p class="text-sm text-slate-500 mb-4">
          <?= substr(strip_tags($post['content']), 0, 120); ?>...
        </p>

        <a
          href="<?= BASE_URL.'/post/'.$post['seotitle']; ?>"
          class="text-blue-600 font-bold text-sm"
        >
          Lihat Detail →
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>

</body>
</html>
