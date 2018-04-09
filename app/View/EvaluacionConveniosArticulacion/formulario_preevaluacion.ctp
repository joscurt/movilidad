<?php echo $this->element('Menu/menu'); ?>
<?php if( !is_null($id) ): ?>
<div class="container margin-top2">
  <h1>Formulario Pre-evaluación</h1>
  <p class="lead">
    El objetivo del formulario de pre-evaluación es recopilar la información del liceo que permita tomar la decisión de generar un proceso de estimación de congruencias entre la especialidad del liceo y Duoc UC.
  </p>
</div>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-4">
      <b>Liceo: </b>
      <p class="lead">Liceo A-71</p>
    </div>
    <div class="col-md-4">
      <b>Especialidad: </b>
      <p class="lead">Gastronomia</p>
    </div>
    <div class="col-md-4">
      <b>Nombre genérico carrera Duoc UC: </b>
      <div class="form-group">
        <div class="input-group">
          <input class="form-control form-control-sm" type="text" placeholder="Ej. Técnico en gastronomía" id="inputSmall">
          <span class="input-group-btn">
            <button class="btn btn-success" type="button" style="line-height: 1.5 !important; padding: 0.25rem 0.5rem !important;"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Criterios de exclusión</th>
        <th>Desición</th>
        <th>Descripción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Especialidad factible de articular de acuerdo a la estrategia de articulación</td>
        <td>
          <input type="checkbox" id="toggle-event" data-on="SI" data-off="NO" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </td>
        <td>Plantilla de carreras estratégicas para articulación</td>
      </tr>

      <tr>
        <td>Programa PACE</td>
        <td>
          <input type="checkbox" id="toggle-event" data-on="SI" data-off="NO" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </td>
        <td>De obtener SI, clasifica directamente sin pasar por evaluación</td>
      </tr>

      <tr>
        <td>Proyecto estratégico para institución</td>
        <td>
          <input type="checkbox" id="toggle-event" data-on="SI" data-off="NO" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </td>
        <td>De obtener SI, clasifica directamente sin pasar por evaluación</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container margin-top2">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Criterios de evaluación/selección</th>
        <th class="text-center">Ponderación</th>
        <th>Descripción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Porcentaje de aporte de matrícula Liceo a Duoc</td>
        <td class="text-center">
          <input class="form-control form-control-sm text-center" type="number" placeholder="%" id="inputSmall" min="0" max="100">
        </td>
        <td>Porcentaje de egresador el año que se matriculan en Duoc UC. Egresados matriculados en Duoc UC.</td>
      </tr>

      <tr>
        <td>Matrícula potencial del liceo en la especialidad</td>
        <td class="text-center">
          <input class="form-control form-control-sm text-center" type="number" placeholder="%" id="inputSmall" min="0" max="100">
        </td>
        <td>Diferencia de los estudiantes de liceos que no se matricuaron en Duoc.</td>
      </tr>

      <tr>
        <td>Acceso a redes de apoyo o sponsor</td>
        <td class="text-center">
          <input class="form-control form-control-sm text-center" type="number" placeholder="%" id="inputSmall" min="0" max="100">
        </td>
        <td>Cuenta con un apoyo externo</td>
      </tr>

      <tr>
        <td>Deserción de estudiantes provenientes del liceo en Duoc UC</td>
        <td class="text-center">
          <input class="form-control form-control-sm text-center" type="number" placeholder="%" id="inputSmall" min="0" max="100">
        </td>
        <td>Tasa de deserción de estudiantes posterior a la postulación o el primer año cursado.</td>
      </tr>

      <tr>
        <td>Rendimiento de estudiantes del liceo en Duoc UC comparado al de su ingreso en asignaturas de primer año de carreras.</td>
        <td class="text-center">
          <input class="form-control form-control-sm text-center" type="number" placeholder="%" id="inputSmall" min="0" max="100">
        </td>
        <td>Rendimiento promedio que obtienen en evaluación anterior a la postulación</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container margin-top2">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Regla de calculo Indicadores</th>
        <th>Detalle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Acceso a redes de apoyo o esponsor (interno o externo)</td>
        <td>
          <table class="table table-hover">
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt1-0" name="opt1" class="custom-control-input">
                  <label class="custom-control-label" for="opt1-0">No aplica</label>
                </div>
              </td>
              <td>No aplica</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt1-1" name="opt1" class="custom-control-input">
                  <label class="custom-control-label" for="opt1-1">Bajo</label>
                </div>
              </td>
              <td>No cuenta con apoyo</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt1-2" name="opt1" class="custom-control-input">
                  <label class="custom-control-label" for="opt1-2">Alto</label>
                </div>
              </td>
              <td>Sí cuenta con apoyo</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>Porcentaje de matrícula de la especialidad del establecimiento en Duoc UC</td>
        <td>
          <table class="table table-hover">
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt2-0" name="opt2" class="custom-control-input">
                  <label class="custom-control-label" for="opt2-0">No aplica</label>
                </div>
              </td>
              <td>No aplica</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt2-1" name="opt2" class="custom-control-input">
                  <label class="custom-control-label" for="opt2-1">Bajo</label>
                </div>
              </td>
              <td>0%-25% de potenciales estudiantes Duoc UC</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt2-2" name="opt2" class="custom-control-input">
                  <label class="custom-control-label" for="opt2-2">Medio</label>
                </div>
              </td>
              <td>26%-50% de potenciales estudiantes Duoc UC</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt2-3" name="opt2" class="custom-control-input">
                  <label class="custom-control-label" for="opt2-3">Alto</label>
                </div>
              </td>
              <td>51%-100% de potenciales estudiantes Duoc UC</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>Matrícula de la especialidad del establecimiento en Duoc UC</td>
        <td>
          <table class="table table-hover">
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt3-0" name="opt3" class="custom-control-input">
                  <label class="custom-control-label" for="opt3-0">No aplica</label>
                </div>
              </td>
              <td>No aplica</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt3-1" name="opt3" class="custom-control-input">
                  <label class="custom-control-label" for="opt3-1">Bajo</label>
                </div>
              </td>
              <td>0%-25% de estudiantes matrículados</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt3-2" name="opt3" class="custom-control-input">
                  <label class="custom-control-label" for="opt3-2">Medio</label>
                </div>
              </td>
              <td>26%-50% de estudiantes matrículados</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt3-3" name="opt3" class="custom-control-input">
                  <label class="custom-control-label" for="opt3-3">Alto</label>
                </div>
              </td>
              <td>51%-100% de estudiantes matrículados</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>Deserción de estudiantes provenientes del liceo en Duoc UC</td>
        <td>
          <table class="table table-hover">
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt4-0" name="opt4" class="custom-control-input">
                  <label class="custom-control-label" for="opt4-0">No aplica</label>
                </div>
              </td>
              <td>No aplica</td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt4-1" name="opt4" class="custom-control-input">
                  <label class="custom-control-label" for="opt4-1">Bajo</label>
                </div>
              </td>
              <td>Deserción superior o igual a un 5% promedio en la carrera afín en Duoc UC </td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt4-2" name="opt4" class="custom-control-input">
                  <label class="custom-control-label" for="opt4-2">Medio</label>
                </div>
              </td>
              <td>Deserción cercana al promedio de las carreras afín (4%>=PROM=>4%) </td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-radio">
                  <input type="radio" id="opt4-3" name="opt4" class="custom-control-input">
                  <label class="custom-control-label" for="opt4-3">Alto</label>
                </div>
              </td>
              <td>Deserción inferior al menos en un 5% promedio en la carrera afín en Duoc UC </td>
            </tr>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container margin-top2 margin-bottom2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'FormularioPreevaluacion')) ?>">  
    Volver
  </a>
  <button type="button" class="btn btn-success float-right margin-bottom2" id="guardar-resultados">Guardar resultado</button>
</div>

<?php endif; ?>


<?php if( is_null($id) ): ?>

<div class="container margin-top2">
  <h1>Formulario Pre-evaluación</h1>
</div>

<!-- Filtro busqueda -->
<div class="container">
  <div class="card card-default margin-top2" style="border-radius: 0;">
    <div class="card-header">Filtros de busqueda</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="filtro-busqueda">Filtro: </label>
            <select class="custom-select" id="filtro-busqueda">
              <option>RBD</option>
              <option>Fundación / Corporación</option>
              <option>Liceo</option>
              <option>Comuna</option>
              <option>Especialidad</option>
            </select>
          </div>
        </div>

        <div class="col-md-7">
          <div class="form-group">
            <label for="busqueda">Buscar: </label>
            <input type="text" class="form-control" id="busqueda" placeholder="">
          </div>
        </div>

        <div class="col-md-2">
          <button type="button" class="btn btn-primary btn-block margin-top2">Buscar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Filtro Estado -->
<div class="container" style="margin-top: .5em;">
  <div class="row">
    <div class="col-md-9">
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <select class="custom-select" id="filtro-busqueda">
          <option>- Estado -</option>
          <option>Completado</option>
          <option>Pendiente</option>
        </select>
      </div>
    </div>
  </div>
</div>

<!-- Tabla  -->
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>RBD</th>
        <th>Fundación / Corporación</th>
        <th>Liceo</th>
        <th>Comuna</th>
        <th>Especialidad</th>
        <th class="text-center">Ranking</th>
        <th class="text-center">Estado</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Validar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Fundación Belén educa</td>
        <td>A-71</td>
        <td>Providencia</td>
        <td>Gastronomía</td>
        <td class="text-center">84%</td>
        <td class="text-center">En proceso</td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'EvaluacionConveniosArticulacion', 'action'=>'FormularioPreevaluacion')) ?>/22">
            <i class="fa fa-pencil-square-o" style="color: #1c6e8c" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-check" style="color: #1c6e8c" aria-hidden="true"></i>
          </a>
        </td>
      </tr>

      <tr>
        <td>2</td>
        <td>Fundación Belén educa</td>        
        <td>Liceo Aplicaciones</td>
        <td>Providencia</td>
        <td>Informática</td>
        <td class="text-center">78%</td>
        <td class="text-center">Pendiente</td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'EvaluacionConveniosArticulacion', 'action'=>'FormularioPreevaluacion')) ?>/22">
            <i class="fa fa-pencil-square-o" style="color: #1c6e8c" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-check" style="color: #1c6e8c" aria-hidden="true"></i>
          </a>
        </td>
      </tr>

      <tr>
        <td>3</td>
        <td>Fundación Santa María</td>
        <td>SOFOFA</td>
        <td>Providencia</td>
        <td>Mecanica</td>
        <td class="text-center">72%</td>
        <td class="text-center">Completado</td>
        <td class="text-center"><i class="fa fa-check" style="color: #046231" aria-hidden="true"></i></td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-check" style="color: #1c6e8c" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container">
  <button type="button" class="btn btn-success pull-right"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Descargar Excel</button>
</div>

<?php endif; ?>

<script>
  $('#guardar-resultados').on('click', e => { 
    swal({
      title: "El resultado obtenido fue: 68% !",
      text: "Validar radio button",
      icon: "info",
      buttons: ['Cancelar', 'Guardar'],
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("A-71 / Gastronomia se ha guardado exitosamente.", {
          icon: "success"
        })
      } 
    })
  })
</script>