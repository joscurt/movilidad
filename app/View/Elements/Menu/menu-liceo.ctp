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
      <li class="nav-item dropdown <?php echo ($controller == "ConveniosLiceo")?'active':'inactive' ?>">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Convenios</a>
        <div class="dropdown-menu">
          <a class="dropdown-item <?php echo ($action=='Activos')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'ConveniosLiceo', 'action'=>'Activos')) ?>">Activos</a>
          <a class="dropdown-item <?php echo ($controller == "ConveniosLiceo" && $action == 'Historial')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'ConveniosLiceo', 'action'=>'Historial')) ?>">Historial</a>
          <a class="dropdown-item" href="#">Solicitar</a>
        </div>
      </li>

      <li class="nav-item dropdown <?php echo ($controller == "ProcesoCongruenciaLiceo")?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'ProcesoCongruenciaLiceo', 'action'=>'Estados')) ?>">Proceso de Congruencia</a>
      </li>

    </ul>

    <ul class="navbar-nav navbar-right">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-cogs" aria-hidden="true" style="color: white;"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item <?php echo ($controller == "AjustesLiceo" && $action=='Perfil')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'AjustesLiceo', 'action'=>'Perfil')) ?>">
            <i class="fa fa-user" aria-hidden="true"></i> Perfil
          </a>
          <a class="dropdown-item" href="<?php echo $this->Html->url(array('controller' => 'AjustesLiceo', 'action'=>'CerrarSesion')) ?>">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesión
          </a>
        </div>
      </li>
    </ul>
    
  </div>
</nav>

<?php
  // debug($this->params);
?>