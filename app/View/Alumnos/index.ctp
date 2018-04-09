<?php echo $this->Html->css('login'); ?>

<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-form-title" style="background-image: url(/img/duoc-antonio-varas.jpg);">
        <span class="login100-form-title-1">
          Duoc - Alumnos
        </span>
      </div>

      <form class="login100-form validate-form" action="<?php echo $this->Html->url(array('action'=>'ConvenioAlumno')) ?>" id="form-login" method="post">
        <div class="wrap-input100 validate-input m-b-26" data-validate="Ingrese su usuario">
          <span class="label-input100">RUT</span>
          <input class="input100" type="text" name="data[User][username]" id="user" placeholder="Ingrese su rut sin puntos ni guion">
          <span class="focus-input100"></span>
        </div>

        <div class="flex-sb-m w-full p-b-30">
        <div class="container-login100-form-btn">
          <button class="login100-form-btn" type="submit" id="btn-login">
            Buscar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>