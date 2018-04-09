<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-12">
      <p class="lead"><b>Perfil:</b> <br> Administrativo</p>
    </div>
    <div class="col-md-4">
      <p class="lead"><b>Nombre: </b> <br>
        <?php echo $nombre ?>
      </p>
    </div>
    <div class="col-md-4">
      <p class="lead"><b>Usuario: </b> <br>
        <?php echo $username ?>
      </p>
    </div>
    <div class="col-md-4">
      <p class="lead"><b>Email: </b> <br>
        <?php echo $correo ?>
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