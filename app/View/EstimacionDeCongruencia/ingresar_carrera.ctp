<?php echo $this->element('Menu/menu'); ?>
<div class="progress" style="position: sticky; top:0;">
  <div class="progress-bar bg-success" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-4">
      <b>Liceo </b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-4">
      <b>Especialidad </b>
      <p class="lead">Mecánica</p>
    </div>
    <div class="col-md-4">
      <b>Carrera Duoc UC </b>
      <p class="lead">Mecánica</p>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <form action="">
    <div id="cards">
      <div class="card border-dark mb-3">
        <div class="card-body">
          <h4 class="card-title"><b>Carrera</b></h4>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="asignarDocente">ID Carrera</label>
                <input type="text" class="form-control" id="asignarDocente" placeholder="">
                <small id="" class="form-text text-muted">Seleccione el ID de la carrera que será analizada. El ID es el número de curriculum vigente de la carrera.</small>
              </div>
            </div>
            <div class="col-md-3 margin-top2">
              <a class="btn btn-secondary btn-block float-right" href="<?php echo $this->Html->url(array('action'=>'CargaMapaAcademico'.'/22')) ?>">Aceptar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'procesoCongruencia')) ?>">
    Salir de este proceso
  </a>
</div>