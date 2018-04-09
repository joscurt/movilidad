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
  <h1>Construcción Civil - Asignaturas</h1>
  <div class="table table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Asignatura</th>
          <th scope="col">Carácter</th>
          <th scope="col">Estado</th>
          <th scope="col">Responsable</th>
          <th scope="col" class="text-center">Última modificación</th>
          <th scope="col" class="text-center">Detalle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Cálculo</td>
          <td>
            Sin asignar
          </td>
          <td>Pendiente</td>
          <td>Juan Valdez</td>
          <td class="text-center">---</td>
          <td class="text-center">
            <a href="<?php echo $this->Html->url(array('action'=>'Caracter'.'/22')) ?>">
              <i class="fa fa-clock-o" style="color: #fcb839;"></i>
            </a>
          </td>
        </tr>

        <tr>
          <td>Geometría</td>
          <td>
            Sin asignar
          </td>
          <td>Pendiente</td>
          <td>Juan Valdez</td>
          <td class="text-center">---</td>
          <td class="text-center">
            <a href="<?php echo $this->Html->url(array('action'=>'Congruencia'.'/22')) ?>">
              <i class="fa fa-clock-o" style="color: #fcb839;"></i>
            </a>
          </td>
        </tr>

        <tr>
          <td>Topografía</td>
          <td>
            Examinación
          </td>
          <td>Pendiente</td>
          <td>Juan Valdez</td>
          <td class="text-center">---</td>
          <td class="text-center">
            <a href="<?php echo $this->Html->url(array('action'=>'Asignaturas'.'/22')) ?>">
              <i class="fa fa-clock-o" style="color: #fcb839;"></i>
            </a>
          </td>
        </tr>

        <tr>
          <td>Física</td>
          <td>
            Estimación
          </td>
          <td>Completado</td>
          <td>Juan Valdez</td>
          <td class="text-center">26-03-2018 11:32</td>
          <td class="text-center">
            <a href="<?php echo $this->Html->url(array('action'=>'Asignaturas'.'/22')) ?>">
              <i class="fa fa-clock-o" style="color: #fcb839;"></i>
            </a>
          </td>
        </tr>

        <tr class="table-success">
          <td>Construcción</td>
          <td>
            Estimación
          </td>
          <td>Revisado</td>
          <td>Juan Valdez</td>
          <td class="text-center">22-02-2018 11:21</td>
          <td class="text-center">
            <a href=""><i class="fa fa-check" style="color: green;"></i></a>
          </td>
        </tr>

        <tr class="table-success">
          <td>Introducción a la Construcción</td>
          <td>
            Examinación
          </td>
          <td>Revisado</td>
          <td>Juan Valdez</td>
          <td class="text-center">22-02-2018 11:08</td>
          <td class="text-center">
            <a href=""><i class="fa fa-check" style="color: green;"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'Carreras/22')) ?>">
    Volver
  </a>
  <a class="btn btn-primary float-right margin-bottom2" href="<?php echo $this->Html->url(array('action'=>'Asignaturas'.'/22')) ?>">
    Siguiente proceso
  </a>
</div>