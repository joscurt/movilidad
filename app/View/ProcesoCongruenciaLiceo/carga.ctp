<?php echo $this->element('Menu/menu-liceo'); ?>

<div class="container margin-top2">
  <h1>Proceso Congruencia / Carga</h1>
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
  <div class="jumbotron padding2">
    <h1 class="display-5">Carga datos Mapa Liceo</h1>
    <h3 class="lead">Instrucciones para crear el archivo de carga en formato CSV.</h3>
    <hr class="my-4">
    <ul>
      <li>No debe contener campos vacíos</li>
      <li>La cabecera debe tener los siguientes campos <b>obligatorios</b>:
        <ul>
          <li>Asignatura</li>
          <li>Horas de la asignatura</li>
          <li>Competencias del Perfil de Egreso del liceo (Objetivo de aprendizaje)</li>
          <li>Aprendizaje esperado</li>
          <li>Estrategia Pedagógica</li>
          <li>Descripción de la evaluación de la asignatura</li>
          <li>Perfil docente</li>
          <li>Infraestructura disponible</li>
        </ul>
      </li>
    </ul>
    <p class="lead">
      <a class="btn btn-info btn-lg" href="#" role="button">
        <i class="fa fa-cloud-download" aria-hidden="true"></i> Descargar archivo de muestra
      </a>
    </p>
  </div>
</div>
<div class="container margin-top2">
  <form action="<?php echo $this->Html->url(array('action'=>'cargaMapaLiceo',$congruencia['Congruencia']['ID_CONGRUENCIA'])) ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    <div id="cards">
      <div class="card border-dark mb-3">
        <div class="card-body">
          <h4 class="card-title"><b>Carga datos mapa liceo</b></h4>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="liceo">Seleccionar archivo</label>
                <input type="file" name="file" class="form-control" id="testfile">
              </div>
            </div>
            <!-- <div class="col-md-3">
              <label for="liceo">ID Carrera</label>
              <input type="text" class="form-control" id="id-carrera-1" placeholder="">
            </div> -->
            <div class="col-md-3 margin-top2">
              <button type="submit" class="btn btn-secondary btn-block float-right">Subir archivo</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div style="font-size: 2em;" class="float-right">
      <a id="nuevaCarga"><i class="fa fa-plus-circle" style="color: black; cursor: copy;"></i></a>
    </div> -->
  </form>
</div>