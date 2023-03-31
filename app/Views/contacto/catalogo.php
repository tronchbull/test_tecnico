<?= $this->extend('layouts/header'); ?>

<?= $this->section('contenido'); ?>

<div class="card" style="width: 18rem;">
  <?php
      if( $numero == 0){
  ?>
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">catalogo 0</h5>
    <p class="card-text">catalogo 0</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
  <?php
  } elseif( $numero == 1){
  ?>  
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">catalogo 1</h5>
    <p class="card-text">catalogo 1</p>
    <a href="#" class="btn btn-danger">Go somewhere</a>
  </div>

  <?php
  }
  ?>
</div>

<?= $this->endSection(); ?>

<?= $this->include('layouts/footer'); ?>
