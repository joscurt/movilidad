<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <h1>Activación de convenios</h1>
</div>

<!-- Tabla  -->
<div class="container margin-top2">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>RBD</th>
        <th>Liceo</th>
        <th>Especialidad</th>
        <th class="text-center">Fecha modificación</th>
        <th class="text-center">Detalle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>0303456</td>
        <td>Liceo Tajamar</td>
        <td>Mecánica automotriz</td>
        <td class="text-center">08/11/2016</td>
        <td class="text-center">
          <a href="" data-toggle="modal" data-target="#modal">
            <i class="fa fa-plus"></i> Ver detalle
          </a>
        </td>
      </tr>

      <tr>
        <td>321892</td>
        <td>Liceo Bueras</td>
        <td>Mecánica industrial</td>
        <td class="text-center">08/11/2016</td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-plus"></i> Ver detalle
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="modal fade" id="modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear convenio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <b>Liceo </b>
                <p class="lead">Liceo Tajamar</p>
              </div>
              <div class="col-md-4">
                <b>Especialidad </b>
                <p class="lead">Mecánica automotriz</p>
              </div>
              <div class="col-md-4">
                <b>ID Congruencia </b>
                <p class="lead">34</p>
              </div>

              <div class="col-md-4">
                <b>Año congruencia </b>
                <p class="lead">2018</p>
              </div>
              <div class="col-md-8">
                <label for="archivo"><b>Archivos</b></label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" multiple>
                <small id="fileHelp" class="form-text text-muted">Se puede seleccionar mas de un archivo a la vez.</small>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="observaciones"><b>Observaciones</b></label>
                  <textarea class="form-control" id="observaciones" rows="1"></textarea>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card border-dark mb-3" style="">
                  <div class="card-body">
                    <h4 class="card-title">Alertas</h4>
                    <!-- Alerta Roja -->
                    <div class="card border-success mb-3" style="">
                      <div class="card-body">
                        <h4 class="text-success">Verde</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="fechaAlertaVerde"><b>Fecha</b></label>
                              <div class="input-group date">
                                <input type="text" class="form-control" id="fechaAlertaVerde" placeholder="DD/MM/YYYY">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="motivoAlertaVerde"><b>Motivo</b></label>
                              <input type="text" class="form-control" id="motivoAlertaVerde" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Alerta Amarilla -->
                    <div class="card border-warning mb-3" style="border-color: #F3DE2C !important;">
                      <div class="card-body">
                        <h4 class="">Amarilla</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="fechaAlertaAmarilla"><b>Fecha</b></label>
                              <div class="input-group date">
                                <input type="text" class="form-control" id="fechaAlertaAmarilla" placeholder="DD/MM/YYYY">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="motivoAlertaAmarilla"><b>Motivo</b></label>
                              <input type="text" class="form-control" id="motivoAlertaAmarilla" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Alerta Roja -->
                    <div class="card border-danger mb-3" style="">
                      <div class="card-body">
                        <h4 class="">Roja</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="fechaAlertaRoja"><b>Fecha</b></label>
                              <div class="input-group date">
                                <input type="text" class="form-control" id="fechaAlertaRoja" placeholder="DD/MM/YYYY">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="motivoAlertaRoja"><b>Motivo</b></label>
                              <input type="text" class="form-control" id="motivoAlertaRoja" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Crear convenio</button>
      </div>
    </div>
  </div>
</div>

<script>
$('#fechaAlertaVerde').datepicker();
$('#fechaAlertaAmarilla').datepicker();
$('#fechaAlertaRoja').datepicker();
</script>