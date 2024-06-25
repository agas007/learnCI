<?php

/**
 * @var CodeIgniter\View\View $this
 */
?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1 class="mt-2">Users</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>