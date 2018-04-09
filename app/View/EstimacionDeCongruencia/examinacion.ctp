<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-3">
      <b>Liceo</b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-3">
      <b>Especialidad</b>
      <p class="lead">Mecánica</p>
    </div>
    <div class="col-md-3">
      <b>Carrera</b>
      <p class="lead">Construcción Civil</p>
    </div>
    <div class="col-md-3">
      <b>Asignatura</b>
      <p class="lead">Cálculo</p>
    </div>
  </div>
</div>

<div class="container margin-top">
  <div class="card border-dark mb-3" style="">
    <div class="card-body">
      <h4 class="card-title">Asignar examinador</h4>
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <label for="examinador" class="form-label">Examinador</label>
            <input type="text" class="form-control" id="examinador">
          </div>
        </div>
        <div class="col-md-3 margin-top2">
          <button type="button" class="btn btn-primary" style="width: 100% !important;">Asignar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'Caracter/22')) ?>">
    Volver
  </a>
</div>