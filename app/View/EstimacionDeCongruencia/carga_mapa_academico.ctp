<?php echo $this->element('Menu/menu'); ?>
<div class="progress" style="position: sticky; top:0;">
  <div class="progress-bar bg-success" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
  <div class="jumbotron padding2">
    <h1 class="display-5">Carga datos Mapa Académico Duoc</h1>
    <h3 class="lead">Instrucciones para crear el archivo de carga en formato CSV.</h3>
    <hr class="my-4">
    <ul>
      <li>El archivo debe contener la primera fila en blanco</li>
      <li>No debe contener campos vacíos</li>
      <li>La cabecera debe tener los siguientes campos <b>obligatorios</b>:
        <ul>
          <li>Nombre de asignatura</li>
          <li>Sigla de asignatura</li>
          <li>Semestre</li>
          <li>Número de horas</li>
          <li>Número de horas prácticas</li>
          <li style="color: red">Pre requisito de asignatura</li>
          <li>Unidad de competencia Duoc UC</li>
          <li>Aprendizajes esperados Duoc UC</li>
          <li>Indicadores de logro Duoc UC</li>
          <li>Infraestructura y equipamiento</li>
          <li>Metodología</li>
          <li>Criterios de evaluación</li>
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
  <form action="">
    <div id="cards">
      <div class="card border-dark mb-3">
        <div class="card-body">
          <h4 class="card-title"><b>Carga datos mapa academico Duoc</b></h4>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="liceo">Seleccionar archivo</label>
                <input type="file" class="form-control" id="archivo-1" placeholder="">
              </div>
            </div>
            <div class="col-md-3">
              <label for="liceo">ID Carrera</label>
              <input type="text" class="form-control" id="id-carrera-1" placeholder="">
            </div>
            <div class="col-md-3 margin-top2">
              <button type="button" class="btn btn-secondary btn-block float-right">Subir archivo</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="font-size: 2em;" class="float-right">
      <a id="nuevaCarga"><i class="fa fa-plus-circle" style="color: black; cursor: copy;"></i></a>
    </div>
  </form>
</div>

<!-- Navegación -->
<div class="container margin-top5">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'IngresarCarrera/22')) ?>">
    Volver
  </a>
  <a class="btn btn-primary float-right margin-bottom2" href="<?php echo $this->Html->url(array('action'=>'AsignarDocente'.'/22')) ?>">
    Siguiente proceso
  </a>
</div>

<script>
$('#nuevaCarga').on('click', e => {
  e.preventDefault()
  var idCarrera = ($("[id^='id-carrera-']").length + 1)
  var idArchivoCarga = ($("[id^='archivo-']").length + 1)
  
  // var element = $("<h1 id='id-carrera-" + idCarrera + "'>" + idCarrera + "</h1>")
  var element = $('<div class="card border-dark mb-3"><div class="card-body"><h4 class="card-title"><b>Carga datos mapa academico Duoc</b></h4><div class="row"><div class="col-md-4"><div class="form-group"><label for="liceo">Seleccionar archivo</label><input type="file" class="form-control" id="archivo-'+idArchivoCarga+'" placeholder=""></div></div><div class="col-md-3"><label for="liceo">ID Carrera</label><input type="text" class="form-control" id="id-carrera-'+idCarrera+'" placeholder=""></div><div class="col-md-3 margin-top2"><button type="button" class="btn btn-secondary btn-block float-right">Subir archivo</button></div></div></div></div>')

  $("#cards").append(element)
})
</script>