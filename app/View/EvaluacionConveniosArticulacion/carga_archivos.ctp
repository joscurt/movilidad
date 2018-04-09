<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <h1 class="display-5">Carga masiva de datos RBD</h1>
</div>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-9">
      <div class="jumbotron padding2">
        <h4>Instrucciones para crear el archivo de carga en formato CSV.</h4>
        <hr class="my-4">
        <ul>
          <li>A las cabeceras se les debe agregar el nombre de la tabla. Ej</li>
          <ul>
            <li>Liceo.RBD</li>
            <li>Liceo.Nombre establecimiento</li>
            <li>Liceo.Rut</li>
            <li>Asignatura.Matematicas</li>
            <li>Asignatura.Calculo I</li>
            <li>Matriculas.Egresados 2016</li>
            <li>Matriculas.Egresados 2017</li>
          </ul>
          <li>Se pueden agregar nuevos campos siempre y cuando mantengan la estructura mencionada anteriormente.</li>
        </ul>
        <p class="lead">
          <a class="btn btn-info btn-lg" href="#" role="button">
            <i class="fa fa-cloud-download" aria-hidden="true"></i> Descargar archivo de muestra
          </a>
        </p>
      </div>
    </div>
    
    <div class="col-md-3">
      <div class="container2 margin-top2">
        <img src="/img/upload.svg" class="img-fluid width80 center-block" alt="">
        <div class="container2 margin-top2">
          <form action="">
            <fieldset>
              <div class="form-group">
                <label for="archivo">Seleccionar archivo</label>
                <input type="file" class="form-control" id="archivo" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="fileHelp" class="form-text text-muted">El archivo debe tener la estructura señalada anteriormente.</small>
              </div>
            </fieldset>
            <button type="button" class="btn btn-primary btn-lg btn-block">Subir archivo</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container margin-top2">
  
</div>