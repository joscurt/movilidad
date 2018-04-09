<?php
  $controller = $this->params['controller'];
  $action = $this->params['action'];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-custom ">
  <a class="navbar-brand" href="#"><img src="/img/logo-duoc.png" alt="" class="img-logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown <?php echo ($controller == "ExaminadorDuoc" && $action == 'index')?'active':'inactive' ?>">
        <a class="nav-link" data-toggle="dropdown" href="#">Dashboard</a>
      </li>
    </ul>

    <ul class="navbar-nav navbar-right">
      <li class="nav-item dropdown <?php echo ($controller == "ProcesoCongruenciaLiceo")?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'ProcesoCongruenciaLiceo', 'action'=>'Estados')) ?>">Preguntas frecuentes</a>
      </li>

      <li class="nav-item dropdown <?php echo ($controller == "ProcesoCongruenciaLiceo")?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'ProcesoCongruenciaLiceo', 'action'=>'Estados')) ?>">Contacto</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'DocenteDuoc', 'action'=>'CerrarSesion')) ?>">
          <i class="fa fa-sign-out" aria-hidden="true" style=""></i> Cerrar Sesión
        </a>
      </li>
    </ul>
    
  </div>
</nav>