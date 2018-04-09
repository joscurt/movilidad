<?php echo $this->element('Menu/menu-examinador'); ?>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-3">
      <b>Examen </b>
      <p class="lead">Cálculo I</p>
    </div>

    <div class="col-md-3">
      <b>Establecimiento </b>
      <p class="lead">Antonio Varas</p>
    </div>

    <div class="col-md-3">
      <b>Fecha examen </b>
      <p class="lead">
        <i class="fa fa-calendar" aria-hidden="true"></i> 10-04-2018
      </p>
    </div>

    <div class="col-md-3">
      <b>Hora examen </b>
      <p class="lead">
        <i class="fa fa-clock-o" aria-hidden="true"></i> 10:45
      </p>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <h1>Lista Alumnos</h1>
</div>

<div class="container">
  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#actualizarAlumnos">
    <i class="fa fa-upload" aria-hidden="true"></i> Subir notas
  </button>
</div>

<!-- Tabla Alumnos -->
<div class="container margin-top">
  <table class="table table-hover table-fixed-header">
    <thead>
      <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Email</th>
        <th class="text-center">Presente</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>18418177-0</td>
        <td>CIFUENTES PEREZ GAMALIEL DAVID</td>
        <td>cperezgamiel@gmail.com</td>
        <td class="text-center">
          <input type="checkbox" id="toggle-event" data-on="SI" data-off="NO" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </td>
      </tr>
      <tr>
        <td>17867694-6</td>
        <td>CARVAJAL RAMOS FRANCISCA JAVIERA</td>
        <td>francarvajal@hotmail.com</td>
        <td class="text-center">
          <input type="checkbox" id="toggle-event" data-on="SI" data-off="NO" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </td>
      </tr>
      <tr>
        <td>16199028-0</td>
        <td>ACEVEDO TOBAR JORGE PATRICIO</td>
        <td>jorgeacevedo03@gmail.com</td>
        <td class="text-center">
          <input type="checkbox" id="toggle-event" data-on="SI" data-off="NO" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </td>
      </tr>
      <tr>
        <td>17056383-2</td>
        <td>ALVARADO OYARZO JORGE LUIS</td>
        <td>joseluisalvarado.o@gmail.com</td>
        <td class="text-center">
          <input type="checkbox" id="toggle-event" data-on="SI" data-off="NO" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </td>
      </tr>
      
    </tbody>
  </table>
</div>

<div class="container margin-top2 margin-bottom2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'index')) ?>">  
    Volver
  </a>
  <button type="button" class="btn btn-primary float-right margin-bottom2" id="guardar">Guardar</button>
</div>