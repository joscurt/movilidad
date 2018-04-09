<?php echo $this->Html->css('login'); ?>

<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-form-title" style="background-image: url(img/duoc-antonio-varas.jpg);">
        <span class="login100-form-title-1">
          Duoc UC - Plataforma Movilidad
        </span>
        <span class="login100-form-title-2" style="color: white; text-align: justify; font-size: .8em;">
        Esta plataforma permite la gestión de los procesos de estimación de congruencias con liceos de EMTP que dan origen a convenios de articulación con dichos establecimientos. También permite la difusión de los resultados de los procesos de articulación.
        </span>
      </div>

      <form class="login100-form validate-form" action="<?php echo $this->Html->url(array('action'=>'login')) ?>" id="form-login" method="post">
       <!--  <div class="wrap-input100 validate-input m-b-26">
          <span class="label-input100">Rol</span>
          <select class="custom-select" id="rol" name="data[User][rol]">
            <option>Administrador</option>
            <option>Docente Duoc UC</option>
            <option>Escuela Duoc UC</option>
            <option>Examinador Duoc UC</option>
            <option>Liceo EMTP</option>
          </select>
          <span class="focus-input100"></span>
        </div> -->

        <div class="wrap-input100 validate-input m-b-26" data-validate="Ingrese su usuario">
          <span class="label-input100">Usuario</span>
          <input class="input100" type="text" name="data[User][username]" id="user" placeholder="">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-18" data-validate = "Ingrese su contraseña">
          <span class="label-input100">Contraseña</span>
          <input class="input100" type="password" name="data[User][password]" id="pass" placeholder="">
          <span class="focus-input100"></span>
        </div>

        <div class="flex-sb-m w-full p-b-30">
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="rememberMe" type="checkbox">
            <label class="label-checkbox100" for="rememberMe">
              Recordar usuario
            </label>
          </div>

          <div>
            <a href="#" class="txt1">
              Olvidaste tu contraseña?
            </a>
          </div>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn" type="submit" id="btn-login">
            Iniciar Sesión
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php echo $this->element('Validaciones/login'); ?>