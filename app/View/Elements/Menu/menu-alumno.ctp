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
      <li class="nav-item <?php echo ($controller == "Alumnos" && $action == 'ConvenioAlumno')?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'Alumnos', 'action'=>'ConvenioAlumno')) ?>">
          Datos Convenio
        </a>
      </li>
      <li class="nav-item <?php echo ($controller == "Alumnos" && $action == 'MiArticulacion')?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'Alumnos', 'action'=>'MiArticulacion')) ?>">
          Mi Articulación
        </a>
      </li>
      <li class="nav-item <?php echo ($controller == "Alumnos" && $action == 'MisExaminaciones')?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'Alumnos', 'action'=>'MisExaminaciones')) ?>">Examinaciones</a>
      </li>
      <li class="nav-item <?php echo ($controller == "Alumnos" && $action == 'Calendario')?'active':'inactive' ?>">
        <a class="nav-link"href="<?php echo $this->Html->url(array('controller' => 'Alumnos', 'action'=>'Calendario')) ?>">Calendario</a>
      </li>
    </ul>

    <ul class="navbar-nav navbar-right">
      <li class="nav-item dropdown <?php echo ($controller == "ProcesoCongruenciaLiceo")?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'ProcesoCongruenciaLiceo', 'action'=>'Estados')) ?>">Instructivos de admisión</a>
      </li>

      <li class="nav-item dropdown <?php echo ($controller == "ProcesoCongruenciaLiceo")?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'ProcesoCongruenciaLiceo', 'action'=>'Estados')) ?>">Preguntas frecuentes</a>
      </li>

      <li class="nav-item dropdown <?php echo ($controller == "ProcesoCongruenciaLiceo")?'active':'inactive' ?>">
        <a class="nav-link" href="<?php echo $this->Html->url(array('controller' => 'ProcesoCongruenciaLiceo', 'action'=>'Estados')) ?>">Contacto</a>
      </li>
    </ul>
    
  </div>
</nav>