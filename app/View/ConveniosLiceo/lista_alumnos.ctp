<?php echo $this->element('Menu/menu-liceo'); ?>

<div class="container margin-top2">
  <h1><i class="fa fa-users"></i> Lista alumnos</h1>
</div>

<div class="container margin-top">
  <div class="row">
    <div class="col-md-4">
      <b>Liceo: </b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-5">
      <b>Especialidad: </b>
      <p class="lead">Mecánica automotriz</p>
    </div>
    <div class="col-md-3">
      <b>Año Egreso: </b>
      <p class="lead">2017</p>
    </div>
  </div>
</div>

<div class="container">
  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#actualizarAlumnos">
    <i class="fa fa-refresh" aria-hidden="true"></i> Actualizar lista alumnos
  </button>
</div>

<!-- Tabla Alumnos -->
<div class="container">
  <table class="table table-hover table-fixed-header">
    <thead>
      <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Email</th>
        <th class="text-center">Ficha</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>18418177-0</td>
        <td>CIFUENTES PEREZ GAMALIEL DAVID</td>
        <td>cperezgamiel@gmail.com</td>
        <td class="text-center">
          <a href="" data-toggle="modal" data-target="#modal-mapa">
            <i class="fa fa-id-card-o" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
      <tr>
        <td>17867694-6</td>
        <td>CARVAJAL RAMOS FRANCISCA JAVIERA</td>
        <td>francarvajal@hotmail.com</td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-id-card-o" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
      <tr>
        <td>16199028-0</td>
        <td>ACEVEDO TOBAR JORGE PATRICIO</td>
        <td>jorgeacevedo03@gmail.com</td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-id-card-o" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
      <tr>
        <td>17056383-2</td>
        <td>ALVARADO OYARZO JORGE LUIS</td>
        <td>joseluisalvarado.o@gmail.com</td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-id-card-o" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="actualizarAlumnos" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Lista Alumnos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario -->
        <form action="">
          <div class="form-group">
            <label for="archivoListaAlumnos">Archivo carga</label>
            <input type="file" class="form-control" id="archivoListaAlumnos" placeholder="">
          </div>
        </form>
        <!-- Fin formulario -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal" id="modal-mapa">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mapa transferencia #0303456</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container margin-top2">
          <div class="container">
            <table class="table table-hover table-fixed-header">
              <thead>
                <tr>
                  <th>Curriculo</th>
                  <th>Nombre Carrera</th>
                  <th>Sigla</th>
                  <th>Nombre curso</th>
                  <th>Cred.</th>
                  <th>Mot. Inscripción</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>441805</td>
                  <td>TÉCNICO_EN_MECÁNICA_AUTOMOTRIZ_Y_AUTOTRÓNICA</td>
                  <td>IMS1401	</td>
                  <td>INTERPRETACIÓN DE MANUALES TÉCNICOS	</td>
                  <td>4</td>
                  <td></td>
                </tr>
                <tr>
                  <td>446302</td>
                  <td>INGENIERÍA_EN_MECÁNICA_AUTOMOTRIZ_Y_AUTOTRÓNICA	</td>
                  <td>HTS1401	</td>
                  <td>HERRAMIENTAS Y TÉCNICAS	</td>
                  <td>10</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <button type="button" class="btn btn-primary float-right" data-dismiss="modal" id="aceptar">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container margin-top2 margin-bottom2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'Activos')) ?>">  
    Volver
  </a>
</div>