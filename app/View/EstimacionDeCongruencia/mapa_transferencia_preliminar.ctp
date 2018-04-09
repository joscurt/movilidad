<?php echo $this->element('Menu/menu'); ?>
<div class="progress" style="position: sticky; top:0; z-index:999;">
  <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="container margin-top2">
  <h2>Mapa de transferencia preliminar para la estimación de congruencias EMTP</h2>
</div>

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
    </div>
  </div>
</div>

<!-- Nivel de congruencia -->
<div class="container margin-top2">
  <div class="card border-success mb-3">
    <div class="card-body">
      <h4 class="card-title text-success">Nivel preliminar de congruencia</h4>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nivel preliminar de congruencia</label>
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
  <button class="btn btn-primary btn-block">Guardar</button>
</div>

<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'procesoCongruencia')) ?>">
    Salir de este proceso
  </a>
  <a class="btn btn-primary float-right margin-bottom2" href="<?php echo $this->Html->url(array('action'=>'MapaTransferencia'.'/22')) ?>">
    Siguiente proceso
  </a>
</div>
