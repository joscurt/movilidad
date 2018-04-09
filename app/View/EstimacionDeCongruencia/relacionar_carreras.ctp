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
      <b>Carrera </b>
      <p class="lead">Mecánica</p>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <h1>Relación asignatura / carrera</h1>
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

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-6">
      <h2>Asignaturas disponibles para convalidar</h2>
      <h3><b>Mecánica</b></h3>
      <ul>
        <li>Calculo I <i>[Estimación]</i></li>
        <li>Álgebra lineal <i>[Estimación]</i></li>
        <li>Dibujo mecánico <i>[Examinación]</i></li>
      </ul>
    </div>
    <div class="col-md-6">
      <h2><b>Ingeniería civil mecánica [0312]</b></h2>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
        <label class="custom-control-label" for="customCheck1">INTRODUCCIÓN AL CÁLCULO</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
        <label class="custom-control-label" for="customCheck2">INTRODUCCIÓN AL ÁLGEBRA</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck3">
        <label class="custom-control-label" for="customCheck3">INTRODUCCIÓN A LA FÍSICA NEWTONIANA	</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck4">
        <label class="custom-control-label" for="customCheck4">SISTEMAS NEWTONIANOS</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck5">
        <label class="custom-control-label" for="customCheck5">ECONOMÍA</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck6" checked>
        <label class="custom-control-label" for="customCheck6">ÁLGEBRA LINEAL	</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck7">
        <label class="custom-control-label" for="customCheck7">ELECTROMAGNETISMO</label>
      </div>
    </div>
  </div>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-warning float-left" href="<?php echo $this->Html->url(array('action'=>'Carreras/22')) ?>">
    Volver
  </a>
  <a class="btn btn-primary float-right" href="<?php echo $this->Html->url(array('action'=>'')) ?>">
    Guardar
  </a>
</div>