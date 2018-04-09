<?php echo $this->element('Menu/menu-alumno'); ?>

<div class="container margin-top2">
  <h1>Información sobre mis examinaciones</h1>
</div>

<div class="container margin-top">
  <div class="card border-dark mb-3" style="">
    <div class="card-body">
      <h4 class="card-title">MAT100. NIVELACIÓN MATEMÁTICA</h4>
      <div class="row">
        <div class="col-md-3">
          <b>Fecha</b> <br>
          <i class="fa fa-calendar-o" aria-hidden="true"></i> 12/03/2018
        </div>
        <div class="col-md-3">
          <b>Horario</b> <br>
          <i class="fa fa-clock-o" aria-hidden="true"></i> 10:15
        </div>
        <div class="col-md-3">
          <b>Lugar</b> <br>
          <i class="fa fa-map-marker" aria-hidden="true"></i> Sede Antonio Varas
        </div>
        <div class="col-md-3">
          <b>Docente</b> <br>
          <i class="fa fa-user" aria-hidden="true"></i> Juan Pablo Venegas
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container margin-top">
  <div class="card border-dark mb-3" style="">
    <div class="card-body">
      <h4 class="card-title">PLC010.	COMUNICACIÓN ESCRITA</h4>
      <div class="row">
        <div class="col-md-3">
          <b>Fecha</b> <br>
          <i class="fa fa-calendar-o" aria-hidden="true"></i> 18/03/2018
        </div>
        <div class="col-md-3">
          <b>Horario</b> <br>
          <i class="fa fa-clock-o" aria-hidden="true"></i> 09:15
        </div>
        <div class="col-md-3">
          <b>Lugar</b> <br>
          <i class="fa fa-map-marker" aria-hidden="true"></i> Sede Antonio Varas
        </div>
        <div class="col-md-3">
          <b>Docente</b> <br>
          <i class="fa fa-user" aria-hidden="true"></i> Teodoro Camaggi
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <h1>Mis resultados</h1>
  <div class="table table-responsive margin-top">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Sigla Asignatura</th>
          <th>Nombre</th>
          <th class="text-center">Créditos</th>
          <th class="text-center">Nota</th>
          <th class="text-center">Porcentaje Mínimo de Aprobación</th>
          <th class="text-center">Porcentaje Obtenido</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-success">
          <td>MAT100</td>
          <td>NIVELACIÓN MATEMÁTICA</td>
          <td class="text-center">12</td>
          <td class="text-center">5,1</td>
          <td class="text-center">70%</ class="text-center">
          <td class="text-center">74%</td>
          <td>Convalidada</td>
        </tr>
        <tr class="table-success">
          <td>PLC010</td>
          <td>COMUNICACIÓN ESCRITA</td>
          <td class="text-center">4</td>
          <td class="text-center">5,0</td>
          <td class="text-center">70%</td>
          <td class="text-center">70%</td>
          <td>Convalidada</td>
        </tr>
        <tr class="table-danger">
          <td>MAT200</td>
          <td>ÁLGEBRA</td>
          <td class="text-center">10</td>
          <td class="text-center">4,6</td>
          <td class="text-center">70%</td>
          <td class="text-center">64%</td>
          <td>No Convalidada</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>