<?= $this->extend('layouts/header'); ?>

<?= $this->section('contenido'); ?>

<br>
<form method="post" action="<?php echo base_url() ?>/envioPost" style="margin: 20px auto; max-width: 500px; display: flex; flex-direction: column; align-items: center;">
  <input type="text" name="valor1" placeholder="Enviar valor 1" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 10px; width: 100%;">
  <input type="text" name="valor2" placeholder="Enviar valor 2" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 10px; width: 100%;">
  <button style="padding: 10px 20px; background-color: #4CAF50; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Enviar</button>
</form>

<?= $this->endSection(); ?>

<?= $this->include('layouts/footer'); ?>