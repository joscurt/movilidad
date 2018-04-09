<?php echo $this->element('Menu/menu'); ?>
<div class="progress" style="position: sticky; top:0; z-index: 999;">
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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

<!-- Mapa Académico DUOC -->
<!-- Tabla -->
<div class="container margin-top2">
  <h1>Mapa Académico DUOC</h1>
  <div class="table table-responsive">
    <table class="table table-hover">
      <thead>
        <tr class="">
          <th>Asignatura</th>
          <th>Sigla Asignatura</th>
          <th>Semestre</th>
          <th>Nro de horas</th>
          <th>Nro de horas prácticas</th>
          <th class="text-danger">Pre requisito de asignatura</th>
          <th>Unidad de competencia Duoc UC</th>
          <th>Aprendizajes esperados Duoc</th>
          <th>Indicadores de logro Duoc</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-light">
          <th>Texto</th>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
        </tr>

        <tr class="table-light">
          <th>Texto</th>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<!-- Mapa Liceo -->
<div class="container margin-top2">
  <h1>Mapa Liceo</h1>
  <div class="table table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Asignatura</th>
          <th scope="col">Horas asignatura</th>
          <th scope="col">Competencias perfil egreso</th>
          <th scope="col">Aprendizaje esperado</th>
          <th scope="col">Estrategia pedagógica</th>
          <th scope="col">Descripción evaluación asignatura</th>
          <th scope="col">Perfil docente</th>
          <th scope="col">Infraestructura disponible</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-light">
          <th>Texto</th>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
        </tr>

        <tr class="table-light">
          <th>Texto</th>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
          <td>Texto</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!--
<div class="container margin-top5">
  <h1>Mapa Liceo</h1>
  <div class="margin-top2">
    <div class="card border-secondary mb-3" style="">
      <div class="card-body">
        <h4 class="card-title">Nombre asignatura</h4>
        <div class="row">
          <div class="col-md-4">
            <b>Horas de la asignatura:</b>
            <p class="lead">30</p>
          </div>
          <div class="col-md-4">
            <b>Competencias perfil egreso: </b>
            <p class="lead">Texto</p>
          </div>
          <div class="col-md-4">
            <b>Aprendizaje esperado: </b>
            <p class="lead">Texto</p>
          </div>

          <div class="col-md-4">
            <b>Estrategia pedagógica: </b>
            <p class="lead">Texto</p>
          </div>
          <div class="col-md-4">
            <b>Descripción evaluación asignatura: </b>
            <p class="lead">Texto</p>
          </div>
          <div class="col-md-4">
            <b>Perfil docente: </b>
            <p class="lead">Texto</p>
          </div>

          <div class="col-md-6">
            <b>Infraestructura disponible: </b>
            <p class="lead">Texto</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="margin-top2">
    <div class="card border-secondary mb-3" style="">
      <div class="card-body">
        <h4 class="card-title">Nombre asignatura</h4>
        <div class="row">
          <div class="col-md-4">
            <b>Horas de la asignatura:</b>
            <p class="lead">42</p>
          </div>
          <div class="col-md-4">
            <b>Competencias perfil egreso: </b>
            <p class="lead">Texto</p>
          </div>
          <div class="col-md-4">
            <b>Aprendizaje esperado: </b>
            <p class="lead">Texto</p>
          </div>

          <div class="col-md-4">
            <b>Estrategia pedagógica: </b>
            <p class="lead">Texto</p>
          </div>
          <div class="col-md-4">
            <b>Descripción evaluación asignatura: </b>
            <p class="lead">Texto</p>
          </div>
          <div class="col-md-4">
            <b>Perfil docente: </b>
            <p class="lead">Texto</p>
          </div>

          <div class="col-md-6">
            <b>Infraestructura disponible: </b>
            <p class="lead">Texto</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->

<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'AsignarDocente/22')) ?>">
    Volver
  </a>
  <a class="btn btn-primary float-right margin-bottom2" href="<?php echo $this->Html->url(array('action'=>'Carreras'.'/22')) ?>">
    Siguiente proceso
  </a>
</div>