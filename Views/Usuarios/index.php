<?php echo $this->extend('Layout/principal'); ?>

<?php echo $this->section('titulo');  ?>
<!-- AQUI VAI OS TÍTULO -->
<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('estilos');  ?>
<!-- AQUI VAI OS ESTILOS -->
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?php echo $this->endSection(); ?>

<?php echo $this->section('conteudo');  ?>
<!-- AQUI VAI OS CONTEUDO -->

 <table id="ajaxTable" class="table table-sm" style="width:100%">
    <thead>
      <tr>
        <th>Avatar</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ativo</th>
      </tr>
    </thead>
  </table>


<?php echo $this->endSection(); ?>

<?php echo $this->section('scripts');  ?>
<!-- AQUI VAI OS SCRIPTS -->
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(document).ready(function () {
    $('#ajaxTable').DataTable({
        ajax: '<?php echo site_url('usuarios/recuperaUsuarios'); ?>',
        columns: [
            { data: 'avatar' },
            { data: 'nome' },
            { data: 'email' },
            { data: 'ativo' },
        ]
    });
  });
</script>
<?php echo $this->endSection(); ?>