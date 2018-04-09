<div class="container margin-top2">
  <h1>Prueba archivo</h1>
  <form action="<?php echo $this->Html->url(array('action'=>'Prueba')) ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="user">Usuario</label>
      <input type="file" name="file" class="form-control" id="testfile">
    </div>
    <button type="submit" id="btn-test-file" class="btn btn-primary">Cargar archivo</button>
  </form>
</div>

<?php if ( isset($errorLog) ): ?>
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log de errores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="lead"><b>Cantidad de errores:</b> <?php echo count($errorLog) ?></p>
        <?php foreach( $errorLog as $error): ?>
          <?php 
            if ( $error['TIPO_ERROR'] == 'Error al agregar') {
              $cardColor = 'danger';
            } else {
              $cardColor = 'info';
            }
          ?>
          <!-- <b>Columnas cargadas: </b><?php //echo count($logCarga) ?> -->
          <!-- Card -->
          <div class="card text-white bg-<?php echo $cardColor ?> mb-3" style="">
            <div class="card-body">
              <h5 class="card-title"><?php echo $error['TIPO_ERROR'] ?></h5>
              <div class="row">
                <div class="col-md-3">
                  <p><b>RBD:</b></p>
                  <p class=""><?php echo $error['RBD'] ?></p>
                </div>
                <div class="col-md-9">
                  <p><b>Establecimiento: </b></p>
                  <p class=""><?php echo $error['NOMBRE_ESTABLECIMIENTO'] ?></p>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin Card -->
          <p></p>
        <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('#myModal').modal('show')
</script>
<?php endif; ?>