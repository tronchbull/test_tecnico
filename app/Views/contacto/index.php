<?= $this->extend('layouts/header'); ?>

<?= $this->section('contenido'); ?>
    <main>
        <h1>Bienvenido a nuestra página</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ligula nec nisi ullamcorper ullamcorper. Sed euismod sem at turpis hendrerit, quis efficitur sapien tristique.</p>
        <button class="btn">Ver más</button>
    </main>

<?= $this->endSection(); ?>

<?= $this->include('layouts/footer'); ?>