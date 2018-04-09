<?php echo $this->element('Menu/menu'); ?>
<div class="progress" style="position: sticky; top:0;">
  <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
  <h1>Carreras</h1>
  <div class="table table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th class="text-center">Nro currículo vigente</th>
          <th scope="col">Carrera</th>
          <th scope="col">Estado</th>
          <th scope="col" class="text-center">Última modificación</th>
          <th scope="col" class="text-center">Detalle</th>
          <th scope="col" class="text-center">Asociar</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-success">
          <td class="text-center">01013</td>
          <td>Mecánica</td>
          <td>Revisado</td>
          <td class="text-center">22-02-2018 10:24</td>
          <td class="text-center">
            <a href="<?php echo $this->Html->url(array('action'=>'Asignaturas'.'/22')) ?>">
              <i class="fa fa-clock-o" style="color: #fcb839;"></i>
            </a>
            <!-- <a href=""><i class="fa fa-check" style="color: green;"></i></a> -->
          </td>
          <td class="text-center">
            <a href="<?php echo $this->Html->url( array('action' => 'RelacionarCarreras'.'/22') ) ?>">
              <i class="fa fa-exchange" aria-hidden="true" title="Con las asignaturas convalidadas de esta carrera puedes convalidar las de otras carreras."></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'Mapas/22')) ?>">
    Volver
  </a>
  <a class="btn btn-success float-right margin-bottom2" href="<?php echo $this->Html->url(array('action'=>'ResultadoCongruencia'.'/22')) ?>">
    Resultados
  </a>
</div>