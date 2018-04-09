<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-3">
      <b>Liceo</b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-3">
      <b>Especialidad</b>
      <p class="lead">Mecánica</p>
    </div>
    <div class="col-md-3">
      <b>Carrera</b>
      <p class="lead">Construcción Civil</p>
    </div>
    <div class="col-md-3">
      <b>Asignatura</b>
      <p class="lead">Cálculo</p>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <h1>Congruencia Aprendizaje</h1>
  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modal-mapa"> 
    <i class="fa fa-window-restore" aria-hidden="true"></i> Ver Mapa Transferencia Preliminar
  </button>
  <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#modal-archivos"> 
    <i class="fa fa-files-o" aria-hidden="true"></i> Ver Archivos
  </button>
  <div class="table table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Aprendizaje Duoc</th>
          <th class="text-center">Estado</th>
          <th scope="col" class="text-center">Congruencia</th>
          <th scope="col" class="text-center">Última modificación</th>
          <th scope="col" class="text-center">Estado de elaboración</th>
          <th scope="col" class="text-center">Congruencia</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <!-- Aprendizaje Duoc -->
          <td>
            <p class="lead">
              Aprendizaje Duoc <i class="fa fa-info-circle" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laboriosam doloremque soluta impedit ut est distinctio earum necessitatibus quibusdam perferendis perspiciatis tenetur non consectetur quisquam adipisci, in corrupti voluptatum quasi!"></i>
            </p>
          </td>
          <!-- Aprendizaje Liceo -->
          <!-- Congruencia -->
          <td class="text-center">
            Pendiente
          </td>
          <td class="text-center">
            -
          </td>
          <!-- Fecha modificación -->
          <td class="text-center">
            ---
          </td>
          <!-- Observaciones -->
          <td class="text-center">
            Sin observaciones
          </td>
          <!-- Ver detalle -->
          <td class="text-center">
            <!-- <a href="" data-toggle="modal" data-target="#modal-mapa">
              <i class="fa fa-eye"></i>
            </a> -->
            <a href="<?php echo $this->Html->url(array('action'=>'AsignaturasLiceo/22')) ?>">
              <i class="fa fa-exchange" aria-hidden="true"></i>
            </a>
          </td>
        </tr>

        <tr class="table-success">
          <!-- Aprendizaje Duoc -->
          <td>
            <p class="lead">
              Aprendizaje Duoc <i class="fa fa-info-circle" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laboriosam doloremque soluta impedit ut est distinctio earum necessitatibus quibusdam perferendis perspiciatis tenetur non consectetur quisquam adipisci, in corrupti voluptatum quasi!"></i>
            </p>
          </td>
          <!-- Congruencia -->
          <td class="text-center">
            Completado
          </td>
          <td class="text-center">
            Medio
          </td>
          <!-- Fecha modificación -->
          <td class="text-center">
            22-02-2018 13:26
          </td>
          <!-- Observaciones -->
          <td class="text-center">
            Con observaciones
          </td>
          <!-- Ver detalle -->
          <td class="text-center">
            <a href="">
              <i class="fa fa-exchange" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="container">
  <div class="margin-top">
    <p class="lead">Total: 54%</p>
  </div>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'Asignaturas/22')) ?>">
    Volver
  </a>
  <a class="btn btn-primary float-right margin-bottom2" href="<?php echo $this->Html->url(array('action'=>'Congruencia'.'/22')) ?>">
    Guardar
  </a>
</div>

<!-- Modal -->
<div class="modal" id="modal-mapa">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mapa transferencia #0303456</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container margin-top2">
          <div class="card border-dark mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <label>Nombre asignatura Duoc UC</label>
                  <p class="lead">Ejemplo</p>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Semestre</label>
                    <p class="lead">I</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <label>Cantidad de aprendizajes esperados</label>
                  <p class="lead">11</p>
                </div>
                <div class="col-md-4">
                  <label>Número de horas</label>
                  <p class="lead">40</p>
                </div>
                <div class="col-md-4">
                  <label>Número de horas prácticas</label>
                  <p class="lead">40</p>
                </div>
                <div class="col-md-4">
                  <label>Prerequisíto Asignatura</label>
                  <p class="lead">40</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Nombre asignatura Duoc UC -->
        <div class="container margin-top2">
          <div class="card border-primary mb-3">
            <div class="card-body">
              <h4 class="card-title text-primary"><b>Nombre asignatura Duoc UC</b></h4>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Unidad de competencia</label>
                    <p class="lead text-justify">Lorem ipsum, dolor sit amet lorem consectetur adipisicing elit. Neque nesciunt quam nulla illum quod eveniet deleniti praesentium eligendi pariatur, dolores aperiam facilis similique, dolorem enim earum! Quidem enim ab ex!</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Aprendizaje esperado</label>
                    <p class="lead text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui necessitatibus, perferendis non, voluptatem, facere natus ad odit minus ea sint cum? In laudantium fugit asperiores, labore accusantium nobis numquam ex!</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <label>Indicadores de logro</label>
                  <p class="lead text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perferendis, quas debitis ipsa molestias tempora deserunt laborum tenetur, asperiores sequi hic? Ducimus, veritatis ad. Debitis cupiditate reprehenderit nostrum officiis eveniet?</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container margin-top2">
          <div class="card border-warning mb-3">
            <div class="card-body">
              <h4 class="card-title text-warning">Información Planes y Programas Liceo</h4>

              <!-- Card Análisis Curricular  -->
              <div class="card border-yellow mb-3">
                <div class="card-body">
                  <h4 class="card-title text-yellow">Análisis Curricular</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Contenidos</label>
                        <p class="lead text-justify">
                          Indicar posibles contenidos del plan de estudio de la institución contraparte con los cuales se desarrolla la unidad de competencia DuocUC declarada.  Por cada contenido señalado, se debe indicar a qué asignatura pertenece. 
                        </p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Habilidades</label>
                        <p class="lead text-justify">
                          Indicar posibles habilidades del plan de estudio de la institución contraparte con los cuales se desarrolla la unidad de competencia DuocUC declarada.  Por cada contenido señalado, se debe indicar a qué asignatura pertenece. 
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Card Aprendizajes esperados -->
                  <div class="card border-pink mb-3">
                    <div class="card-body">
                      <h4 class="card-title text-pink">Aprendizajes esperados</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Aprendizaje</label>
                            <p class="lead text-justify">
                              Indicar posibles aprendizajes esperados del plan de estudio de la especialidad del liceo con los cuales se desarrolla la unidad de competencia DuocUC declarada.  Por cada aprendizaje esperado señalado, se debe indicar a qué asignatura pertenece. 
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Asignatura</label>
                            <p class="lead text-justify">
                              Asignatura
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card Análisis Estrategia Pedagógica  -->
              <div class="card border-lightblue mb-3">
                <div class="card-body">
                  <h4 class="card-title text-lightblue">Análisis Estrategia Pedagógica</h4>
                  <!-- ¿Cómo son enseñados estos aprendizajes en el establecimiento?  -->
                  <div class="card border-primary mb-3">
                    <div class="card-body">
                      <h4 class="card-title text-primary">¿Cómo son enseñados estos aprendizajes en el establecimiento?</h4>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Descripción de la metodología y actividades de aprendizaje</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" style="">Indicar las metodologías de enseñanza, ambientes de aprendizaje, actividades y recursos didácticos utilizados por la institución contraparte para lograr los aprendizajes esperados consignados en cada unidad de competencia.</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ¿Cómo son evaluados?  -->
                  <div class="card border-primary mb-3">
                    <div class="card-body">
                      <h4 class="card-title text-primary">¿Cómo son evaluados?</h4>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Tipo de Evaluación</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" style="">Indicar el tipo de evaluación, tales como: Evaluación escrita (selección múltiple, VF, Términos pareados,preguntas abiertas), Rúbrica, Escala de apreciación, Lista de Cotejo, que son utilizadas para evaluar el aprendizaje.</textarea>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Indicadores de Logro</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" style="">Indicar los indicadores de logro que son efectivamente medidos en la evaluación para dar cuenta de la consecución del aprendizaje.</textarea>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Descripción Metodológica de Evaluación</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" style="">Indicar aspectos tales como actividades realizadas, materiales, cantidad de alumnos, modo de toma de resultados, sistema de calificación, entre otros.</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Análisis Ambientes de Aprendizaje -->
              <div class="card border-warning mb-3">
                <div class="card-body">
                  <h4 class="card-title text-warning">Análisis Ambientes de Aprendizaje</h4>
                  <div class="card border-warning mb-3">
                    <div class="card-body">
                      <h4 class="card-title text-warning">¿Cómo son los ambientes de aprendizaje en que se realizan las clases?</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Nombre Ambiente</label>
                            <p class="lead text-justify">
                              Indicar nombre de ambiente, tales como. Sala de Clases, Taller de Autotrónica, Laboratorio químico, entre otros.
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Descripción del ambiente</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" style="">Describir detalladamente aspectos físicos (infraestructura), funcionales (usos), relacional (control de actividades del docente), y temporal (horas, agrupación en actividades) de los ambientes de aprendizaje.</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Nivel de congruencia -->
        <div class="container margin-top2">
          <div class="card border-success mb-3">
            <div class="card-body">
              <h4 class="card-title text-success">Nivel de congruencia</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nivel de congruencia</label>
                    <select class="custom-select" id="rol" name="data[User][rol]">
                      <option>Inexistente</option>
                      <option selected>Bajo</option>
                      <option>Medio</option>
                      <option>Alto</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <label class="">Nivel numérico de congruencia</label>
                  <p class="lead">1</p>
                </div>
                <div class="col-md-12">
                  <blockquote class="blockquote">
                    <footer class="blockquote-footer">
                      <b>Alto:</b> El liceo cubre el aprendizaje esperado mediante el desarrollo de diversas actividades prácticas que requieren un rol activo del alumno. Igualmente, los docentes generan espacios que simulan un ambiente real de trabajo, donde el estudiante aplica conocimientos del plan de estudios y despliega habilidades en un contexto caracterizado por la actitud profesional de sus actos.
                    </footer>
                    <footer class="blockquote-footer">
                      <b>Medio:</b> El liceo cubre el aprendizaje esperado mediante el desarrollo de actividades prácticas que requieren un rol activo del alumno. Igualmente, los docentes generan espacios que simulan un ambiente de trabajo, donde el estudiante aplica conocimientos del plan de estudios y despliega habilidades.
                    </footer>
                    <footer class="blockquote-footer">
                      <b>Bajo: </b>El liceo cubre parcialmente el aprendizaje esperado mediante el desarrollo de actividades prácticas que requieren un rol activo del alumno. Igualmente, los docentes generan espacios que simulan un ambiente de trabajo, donde el estudiante aplica ciertos conocimientos del plan de estudio.
                    </footer>
                    <footer class="blockquote-footer">
                      <b>Inexistente: </b>El liceo no desarrolla el aprendizaje esperado y centra el proceso de enseñanza-aprendizaje en la transmisión de conocimientos, donde no se realizan actividades prácticas. 
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container margin-top2">
          <button type="button" class="btn btn-primary float-right" data-dismiss="modal" id="aceptar">Aceptar</button>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- MTP -->

<!-- Modal archivos -->
<div class="modal" id="modal-archivos">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Archivos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-inline">
          <h1>Archivos Primarios </h1> 
          <h3 style="margin-left: .5em;"> <i class="fa fa-info-circle" aria-hidden="true"></i> </h3>
        </div>

        <table class="table table-hover" id="stickyHeader">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Tipo</th>
              <th>Tamaño</th>
              <th>Usuario</th>
              <th class="text-center">Fecha creación</th>
              <th class="text-center">Detalle</th>
              <th class="text-center">Descargar</th>
              <th class="text-center">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Matemáticas II</td>
              <td>
              <i class="fa fa-file-word-o" aria-hidden="true"></i> .docx
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 1.3 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Cocina y Gastronomía I</td>
              <td>
              <i class="fa fa-file-word-o" aria-hidden="true"></i> .docx
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 2.5 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Enología y bebidas I</td>
              <td>
              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> .pdf
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 1.9 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Administración de recursos humanos</td>
              <td>
              <i class="fa fa-file-word-o" aria-hidden="true"></i> .docx
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Idioma extranjero I</td>
              <td>
              <i class="fa fa-file-word-o" aria-hidden="true"></i> .docx
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 2.1 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i> 
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- Complementarios -->
        <div class="form-inline">
          <h1>Archivos Complementarios </h1> 
          <h3 style="margin-left: .5em;"> <i class="fa fa-info-circle" aria-hidden="true"></i> </h3>
        </div>
        <table class="table table-hover" id="stickyHeader">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Tipo</th>
              <th>Tamaño</th>
              <th>Usuario</th>
              <th class="text-center">Fecha creación</th>
              <th class="text-center">Detalle</th>
              <th class="text-center">Descargar</th>
              <th class="text-center">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Salón de cocina</td>
              <td>
              <i class="fa fa-file-image-o" aria-hidden="true"></i> .jpg
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 1.3 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Presentaciones platos primer semestre 2017</td>
              <td>
              <i class="fa fa-file-powerpoint-o" aria-hidden="true"></i> .pptx
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 2.5 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Instrumentos usados en cocina</td>
              <td>
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> .pdf
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 1.9 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Fotos articulos usados en cocina II</td>
              <td>
                <i class="fa fa-file-archive-o" aria-hidden="true"></i> .zip
              </td>
              <td>
                <i class="fa fa-archive" aria-hidden="true"></i> 3.8 Mb
              </td>
              <td>
                <i class="fa fa-user-circle" aria-hidden="true"></i> Acollao
              </td>
              <td class="text-center">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> 13/03/2018
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true" style="color: #8542a7;"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-download" aria-hidden="true"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="">
                  <i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i>
                </a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Modal archivos -->

<script>
$('table').stickyTableHeaders();
</script>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $('#aceptar').on('click', e => {
    swal({
      title: "Generar informe",
      text: "¿Generar informe avance proyecto?",
      icon: "info",
      buttons: ['Cancelar', 'Aceptar'],
      dangerMode: false,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Se generó informe avance proyecto", {
          icon: "success"
        })
      } 
    })
  })
</script>