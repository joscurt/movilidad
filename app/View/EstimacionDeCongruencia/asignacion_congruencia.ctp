<?php echo $this->element('Menu/menu'); ?>
<div class="progress" style="position: sticky; top:0;">
  <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-6">
      <b>Liceo: </b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-6">
      <b>Especialidad: </b>
      <p class="lead">Mecánica</p>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <div class="row margin-top">
    <div class="col-md-6">
      <h4 class="text-center"><b>Asignatura Duoc</b></h4>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Mecánica Industrial
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Mecánica Industrial (Mención)
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Construcciones mecánicas
        </li>
      </ul>
    </div>
    <div class="col-md-6">
      <h4 class="text-center"><b>Asignatura Liceo</b></h4>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Mecánica Industrial I
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Introducción a la mecánica
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Herramientas de construcción
        </li>
      </ul>
    </div>
  </div>
  <div class="row margin-top2">
    <div class="col-md-8">
      <input type="text" class="form-control" id="ejj" placeholder="Persona a asignar">
    </div>
    <div class="col-md-4">
      <button type="button" class="btn btn-primary btn-block float-right">Asignar</button>
    </div>
  </div>
</div>
<div class="container margin-top5">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'procesoCongruencia')) ?>">
    Salir de este proceso
  </a>
  <a class="btn btn-primary float-right margin-bottom2" href="<?php echo $this->Html->url(array('action'=>'mapaTransferenciaPreliminar'.'/22')) ?>">
    Siguiente proceso
  </a>
</div>