<?php
// Halaman index yang memanggil partials tanpa merubah isi asli.
// Pastikan webserver root menyajikan /po-content sebagai public path
$page = 'home';
$title = 'LK3 Training Center - Dashboard Utama';
?>
<!DOCTYPE html>
<html lang="id">
<?php include __DIR__ . '/../partials/head.php'; ?>
<body class="bg-slate-50">
<?php include __DIR__ . '/../partials/header.php'; ?>

<?php include __DIR__ . '/../partials/content.php'; ?>

<?php include __DIR__ . '/../partials/footer.php'; ?>
