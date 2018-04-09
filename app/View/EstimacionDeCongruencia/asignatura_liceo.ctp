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

<div class="container margin-top2">
  <h1>Asignaturas del Liceo</h1>
  <p class="lead">Seleccione una asignatura del liceo relacionada a Cálculo</p>
</div>

<div class="container margin-top2">
  <div class="table table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Asignatura Liceo</th>
          <th class="text-center">Editar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            MEDICIONES DE MAGNITUDES ELÉCTRICAS EN CORRIENTE CONTINUA          
          </td>
          <td class="text-center">
            <a href="<?php echo $this->Html->url(array('action'=>'Congruencia/22')) ?>">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td>
            ELECTRICIDAD BÁSICA
          </td>
          <td class="text-center">
            <a href="<?php echo $this->Html->url(array('action'=>'Congruencia/22')) ?>">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


