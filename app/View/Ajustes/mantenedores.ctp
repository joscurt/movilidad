<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="exclusion-tab" data-toggle="tab" href="#exclusion" role="tab" aria-controls="exclusion" aria-selected="true">Criterios de exclusión</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="evaluacion-tab" data-toggle="tab" href="#evaluacion" role="tab" aria-controls="evaluacion" aria-selected="false">Criterios de evaluación / selección</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="calculo-indicadores-tab" data-toggle="tab" href="#calculo-indicadores" role="tab" aria-controls="calculo-indicadores" aria-selected="false">Regla de calculo Indicadores</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="posibles-criterios-tab" data-toggle="tab" href="#posibles-criterios" role="tab" aria-controls="posibles-criterios" aria-selected="false">Posibles criterios de evaluación a integrar en etapas futuras</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <!-- Exclusión -->
    <div class="tab-pane fade show active" id="exclusion" role="tabpanel" aria-labelledby="exclusion-tab">
      <div class="container margin-top2">
        <table class="table table-hover margin-top2">
          <thead>
            <tr>
              <th>Criterios de exclusión</th>
              <th>Descripción</th>
              <th class="text-center">Editar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Convenio de colaboración exigente</td>
              <td>Tenencia de convenio de colaboración</td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Especialidad factible de articular de acuerdo a la estrategia de articulación</td>
              <td>Plantilla de carreras estrategicas</td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Proyecto estrategico para la institución</td>
              <td>De obtener SI clasifica directamente</td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="container margin-top2">
        <form action="">
          <div class="card border-dark mb-3">
            <div class="card-body">
              <h4 class="card-title">Agregar un nuevo criterio de <b>exclusión</b></h4>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="new-exclusion">Criterios de exclusión</label>
                    <input type="text" class="form-control" id="new-exclusion" placeholder="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="new-descripcion">Descripción</label>
                    <input type="text" class="form-control" id="new-descripcion" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="clasifica-directamente">
                    <label class="custom-control-label" for="clasifica-directamente">De obtener SI clasifica directamente</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <button type="button" class="btn btn-secondary float-right">Agregar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Fin Exclusión -->
    
    <!-- Evaluación -->
    <div class="tab-pane fade" id="evaluacion" role="tabpanel" aria-labelledby="evaluacion-tab">
      <div class="container margin-top2">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Criterios de evaluación/selección</th>
              <th>Descripción</th>
              <th class="text-center">Editar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Porcentaje de aporte de matrícula Liceo a Duoc</td>
              <td>Porcentaje de egresador el año que se matriculan en Duoc UC. Egresados matriculados en Duoc UC.</td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Matrícula potencial del liceo en la especialidad</td>
              <td>Diferencia de los estudiantes de liceos que no se matricuaron en Duoc.</td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Acceso a redes de apoyo o sponsor</td>
              <td>Cuenta con un apoyo externo</td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Deserción de estudiantes provenientes del liceo en Duoc UC</td>
              <td>Tasa de deserción de estudiantes posterior a la postulación o el primer año cursado.</td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Rendimiento de estudiantes del liceo en Duoc UC comparado al de su ingreso en asignaturas de primer año de carreras.</td>
              <td>Rendimiento promedio que obtienen en evaluación anterior a la postulación</td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="container margin-top2">
        <form action="">
          <div class="card border-dark mb-3">
            <div class="card-body">
              <h4 class="card-title">Agregar un nuevo criterio de <b>evaluación / selección</b></h4>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="new-exclusion">Criterios de evaluación / selección</label>
                    <input type="text" class="form-control" id="new-exclusion" placeholder="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="new-descripcion">Descripción</label>
                    <input type="text" class="form-control" id="new-descripcion" placeholder="">
                  </div>
                </div>
                <!-- Margen Mínimo / Máximo -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label">Porcentaje mínimo esperado</label>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-9 margin-top2">
                  <button type="button" class="btn btn-secondary float-right">Agregar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Fin Evaluación -->
    
    <!-- Posibles criterios -->
    <div class="tab-pane fade" id="posibles-criterios" role="tabpanel" aria-labelledby="posibles-criterios-tab">
      Posibles criterios
    </div>
    <!-- Fin Posibles criterios -->

    <!-- Regla de calculo Indicadores -->
    <div class="tab-pane fade" id="calculo-indicadores" role="tabpanel" aria-labelledby="calculo-indicadores-tab">
      <div class="container margin-top2">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Regla de calculo Indicadores</th>
              <th>Detalle</th>
              <th class="text-center">Editar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Acceso a redes de apoyo o esponsor (interno o externo)</td>
              <td>
                <table class="table table-hover">
                  <tr>
                    <td>Bajo</td>
                    <td>No cuenta con apoyo</td>
                  </tr>
                  <tr>
                    <td>Alto</td>
                    <td>Sí cuenta con apoyo</td>
                  </tr>
                </table>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Porcentaje de matrícula de la especialidad del establecimiento en Duoc UC</td>
              <td>
                <table class="table table-hover">
                  <tr>
                    <td>Bajo</td>
                    <td>0%-25% de potenciales estudiantes Duoc UC</td>
                  </tr>
                  <tr>
                    <td>Medio</td>
                    <td>26%-50% de potenciales estudiantes Duoc UC</td>
                  </tr>
                  <tr>
                    <td>Alto</td>
                    <td>51%-100% de potenciales estudiantes Duoc UC</td>
                  </tr>
                </table>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Matrícula de la especialidad del establecimiento en Duoc UC</td>
              <td>
                <table class="table table-hover">
                  <tr>
                    <td>Bajo</td>
                    <td>0%-25% de estudiantes matrículados</td>
                  </tr>
                  <tr>
                    <td>Medio</td>
                    <td>26%-50% de estudiantes matrículados</td>
                  </tr>
                  <tr>
                    <td>Alto</td>
                    <td>51%-100% de estudiantes matrículados</td>
                  </tr>
                </table>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Deserción de estudiantes provenientes del liceo en Duoc UC</td>
              <td>
                <table class="table table-hover">
                  <tr>
                    <td>Bajo</td>
                    <td>Deserción superior o igual a un 5% promedio en la carrera afín en Duoc UC </td>
                  </tr>
                  <tr>
                    <td>Medio</td>
                    <td>Deserción cercana al promedio de las carreras afín (4%>=PROM=>4%) </td>
                  </tr>
                  <tr>
                    <td>Alto</td>
                    <td>Deserción inferior al menos en un 5% promedio en la carrera afín en Duoc UC </td>
                  </tr>
                </table>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <div class="container margin-top2">
        <div class="container margin-top2">
          <form action="">
            <div class="card border-dark mb-3">
              <div class="card-body">
                <h4 class="card-title">Agregar una nueva <b>Regla de calculo Indicadores</b></h4>
                <div class="row">
                  <div class="col-8">
                    <div class="form-group">
                      <label for="new-exclusion">Regla de calculo Indicadores</label>
                      <input type="text" class="form-control" id="new-exclusion" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="new-exclusion">Indicador nivel bajo</label>
                      <input type="text" class="form-control" id="new-exclusion" placeholder="Dejar en blanco si se omite">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="new-exclusion">Indicador nivel medio</label>
                      <input type="text" class="form-control" id="new-exclusion" placeholder="Dejar en blanco si se omite">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="new-exclusion">Indicador nivel alto</label>
                      <input type="text" class="form-control" id="new-exclusion" placeholder="Dejar en blanco si se omite">
                    </div>
                  </div>

                  <!-- Boton -->
                  <div class="col-md-12 margin-top">
                    <button type="button" class="btn btn-secondary float-right">Agregar</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Fin Regla de calculo Indicadores -->
  </div>
</div>