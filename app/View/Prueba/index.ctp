<div class="container margin-top2">
  <h1>Prueba archivo</h1>
  <form action="<?php echo $this->Html->url(array('action'=>'index')) ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="user">Usuario</label>
      <input type="file" name="file" class="form-control" id="testfile">
    </div>
    <button type="submit" id="btn-test-file" class="btn btn-primary">Cargar archivo</button>
  </form>
</div>

<?php if ( isset($carga) ): ?>
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log de carga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Datos generales -->
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <b>Cargados</b>
              <p class="lead"><?php echo $carga['Cargados'] ?></p>
            </div>

            <div class="col-md-3">
              <b>Erroneos</b>
              <p class="lead"><?php echo ($carga['Erroneos'] + count($carga['Errores'])) ?></p>
            </div>

            <div class="col-md-3">
              <b>Existentes</b>
              <p class="lead"><?php echo $carga['Existentes'] ?></p>
            </div>

            <div class="col-md-3">
              <b>Actualizados</b>
              <p class="lead"><?php echo count($carga['Actualizados']) ?></p>
            </div>
          </div>
        </div>
        <!-- Fin datos generales -->

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="errores-tab" data-toggle="tab" href="#errores" role="tab" aria-controls="errores" aria-selected="true">
              Errores <span class="badge badge-primary badge-pill"><?php echo ($carga['Erroneos'] + count($carga['Errores'])) ?></span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="actualizados-tab" data-toggle="tab" href="#actualizados" role="tab" aria-controls="actualizados" aria-selected="false">
              Actualizados <span class="badge badge-primary badge-pill"><?php echo count($carga['Actualizados']) ?></span>
            </a>
          </li>
        </ul>
        <!-- Fin Tabs-->

        <!-- Contenido Tabs -->
        <div class="tab-content" id="myTabContent">
            <!-- Log errores -->
            <div class="tab-pane fade show active" id="errores" role="tabpanel" aria-labelledby="errores-tab">
              <div class="container margin-top">
              <?php if(isset($carga['Errores'])): ?>
                <h1>Error Log</h1>
                <?php foreach ( $carga['Errores'] as $error): ?>
                  <div class="card border-dark mb-3" style="">
                    <div class="card-body">
                      <b>RBD: </b>
                      <p class="lead"><?php echo $error['RBD'] ?></p>
                      <b>Tipo Error: </b>
                      <p class="lead"><?php echo $error['Tipo'] ?></p>
                      <b>Nombre Columna: </b>
                      <p class="lead"><?php echo $error['Columna'] ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
            </div>
            <!-- Fin Log errores -->

            <!-- Log actualizados -->
            <div class="tab-pane fade" id="actualizados" role="tabpanel" aria-labelledby="actualizados-tab">
              <div class="container margin-top">
              <?php if(isset($carga['Actualizados'])): ?>
                <h1>Log de datos actualizados</h1>
                <?php foreach ( $carga['Actualizados'] as $actualizados): ?>
                  <div class="card border-dark mb-3" style="">
                    <div class="card-body">
                      <b>RBD:</b>
                      <p class="lead"><?php echo $actualizados['RBD'] ?></p>

                      <b>Tabla:</b>
                      <p class="lead"><?php echo $actualizados['Tabla'] ?></p>

                      <b>Columna:</b>
                      <p class="lead"><?php echo $actualizados['Columna'] ?></p>

                      <b>Valor:</b>
                      <p class="lead"><?php echo $actualizados['Valor'] ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
            </div>
            <!-- Fin Log actualizados -->
          </div>
        </div>
        <!-- Fin Contenido Tabs -->
        
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