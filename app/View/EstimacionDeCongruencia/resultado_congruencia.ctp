<?php echo $this->element('Menu/menu'); ?>
<div class="progress" style="position: sticky; top:0;">
  <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
  <h1>Resultado congruencia</h1>
  <table class="table table-hover margin-top2">
    <thead>
      <tr>
        <th>Asignatura</th>
        <th class="text-center">% Congruencia</th>
        <th>Compromiso</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Laboratorio I</td>
        <td class="text-center">100%</td>
        <td>Debe mejorar infraestructura</td>
      </tr>
    </tbody>
  </table>  
</div>

<div class="container margin-top2">
  <button type="button" class="btn btn-primary btn-lg btn-block">Generar ficha de convalidación</button>
</div>

<div class="container margin-top2 margin-bottom2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'Carreras/22')) ?>">  
    Volver
  </a>
</div>