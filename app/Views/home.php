<?php

/**
 * @var CodeIgniter\View\View $this
 */
?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <h1>Selamat Datang, <?= $nama; ?></h1>
</div>
<?= $this->endSection(); ?>