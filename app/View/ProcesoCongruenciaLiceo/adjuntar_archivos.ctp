<?php echo $this->element('Menu/menu-liceo'); ?>

<div class="container margin-top2">
  <h1>Proceso Congruencia / Archivos adjuntos</h1>
</div>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-6">
      <b>Liceo: </b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-6">
      <b>Especialidad: </b>
      <p class="lead">Mecánica automotriz</p>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal" id="nuevoArchivo">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Subida de archivos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Mostrar extensiones permitidas <i class="fa fa-caret-down" aria-hidden="true"></i>
        </button>
        <!-- Extensiones permitidas y tamaño maximo -->
        <div class="collapse margin-top" id="collapseExample">
          <h5>Extensiones permitidas y tamaño máximo: </h5>
          <div class="row">
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .docx
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .xls
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .pptx
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
              </ul>
            </div>

            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .jpg
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .jpeg
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .png
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
              </ul>
            </div>

            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .3gp
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .mp4
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  .wav
                  <span class="badge badge-primary badge-pill">20 Mb</span>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <!-- Fin Extensiones permitidas y tamaño maximo -->
        <form action="">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-group input-file" name="Fichier1">
                  <span class="input-group-btn">
                      <button class="btn btn-primary btn-choose" type="button">Seleccionar</button>
                  </span>
                  <input type="text" class="form-control" placeholder='Seleccionar un archivo...' />
                  <span class="input-group-btn">
                      <button class="btn btn-warning btn-reset" type="button">Cancelar</button>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" style="margin-top: 1.6em;">
                <select class="custom-select">
                  <optgroup label="Seleccionar categoría">
                    <option value="Option B">Archivos Complementarios</option>
                    <option value="Option A">Archivos Primarios</option>
                  </optgroup>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal -->

<div class="container margin-top2">
  <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#nuevoArchivo">
    <i class="fa fa-upload" aria-hidden="true"></i> Agregar nuevo archivo
  </button>
</div>

<div class="container margin-top2">
  <h1>Archivos Primarios</h1>

  <table class="table table-hover" id="stickyHeader">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Tamaño</th>
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

<!-- Archivos complementarios -->

<div class="container margin-top2">
  <h1>Archivos Complementarios</h1>

  <table class="table table-hover" id="stickyHeader">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Tamaño</th>
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

<script>
$('table').stickyTableHeaders();
</script>

<script>
  function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
</script>