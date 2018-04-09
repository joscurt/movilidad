<?php echo $this->element('Menu/menu'); ?>

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
  <h1><b>Asignatura: </b> Cálculo</h1>
  <p class="lead">Seleccione el carácter de la asignatura</p>
</div>

<div class="container margin-top2">
  <div class="row">
    <div class="col">
      <a href="<?php echo $this->Html->url(array('action'=>'Examinacion'.'/22')) ?>" class="btn btn-primary btn-lg btn-block">
        <i class="fa fa-file-text-o" aria-hidden="true"></i> Examinación
      </a>
    </div>
    <div class="col">
      <a href="<?php echo $this->Html->url(array('action'=>'UnidadDeCompetencia'.'/22')) ?>" class="btn btn-primary btn-lg btn-block">
        <i class="fa fa-search" aria-hidden="true"></i> Estimación
      </a>
    </div>
  </div>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'Asignaturas/22')) ?>">
    Volver
  </a>
</div>