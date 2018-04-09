<?php echo $this->element('Menu/menu-liceo'); ?>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-12">
      <p class="lead"><b>Liceo:</b> <br> Liceo Providencia</p>
    </div>
    <div class="col-md-4">
      <p class="lead"><b>Correo: </b> <br>
        contacto@liceoprovidencia.cl
      </p>
    </div>
    <div class="col-md-4">
      <p class="lead"><b>Nombre contacto: </b> <br>
        Juan Francisco Valdez
      </p>
    </div>
    <div class="col-md-4">
      <p class="lead"><b>Teléfono contacto: </b> <br>
        +56 9 81234567
      </p>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <form action="">
    <div class="card border-dark mb-3">
      <div class="card-body">
        <h4 class="card-title">Cambio de contraseña</h4>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="pass">Contraseña actual</label>
              <input type="text" class="form-control" id="pass" placeholder="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="new-pass">Nueva contraseña</label>
              <input type="password" class="form-control" id="new-pass" placeholder="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="new-pass-confirm">Repetir nueva contraseña</label>
              <input type="password" class="form-control" id="new-pass-confirm" placeholder="">
            </div>
          </div>
          <div class="col-md-12">
            <button type="button" class="btn btn-danger float-right">Cambiar contraseña</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>