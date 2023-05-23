<?php echo $this->extend('Layout/principal'); ?>

<?php echo $this->section('titulo');  ?>
  <!-- AQUI VAI OS TÍTULO -->
  <?php echo $titulo; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('estilos');  ?>
  <!-- AQUI VAI OS ESTILOS -->
<?php echo $this->endSection(); ?>

<?php echo $this->section('conteudo');  ?>
  <!-- AQUI VAI OS CONTEUDO -->

  <h1>AQUI VAI OS CONTEUDO</h1>
<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts');  ?>
  <!-- AQUI VAI OS SCRIPTS -->
<?php echo $this->endSection(); ?>