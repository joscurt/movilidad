<?php
  $controller = $this->params['controller'];
  $action = $this->params['action'];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-custom ">
  <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'EvaluacionConveniosArticulacion', 'action'=>'RevisionConvenios')) ?>"><img src="../img/logo-duoc.png" alt="" class="img-logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown <?php echo ($controller == "EvaluacionConveniosArticulacion")?'active':'inactive' ?>">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Evaluación Convenios Articulación</a>
        <div class="dropdown-menu">
          <a class="dropdown-item <?php echo ($controller == "EvaluacionConveniosArticulacion" && $action=='RevisionConvenios')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'EvaluacionConveniosArticulacion', 'action'=>'RevisionConvenios')) ?>">Revisión convenios existentes</a>
          <a class="dropdown-item <?php echo ($controller == "EvaluacionConveniosArticulacion" && $action=='CargaArchivos')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'EvaluacionConveniosArticulacion', 'action'=>'CargaArchivos')) ?>">RBD carga archivos</a>
          <a class="dropdown-item <?php echo ($controller == "EvaluacionConveniosArticulacion" && $action=='FormularioPreevaluacion')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'EvaluacionConveniosArticulacion', 'action'=>'FormularioPreevaluacion')) ?>">Formulario preevaluación</a>
          <a class="dropdown-item" href="#">Publicar resultado de proceso</a>
        </div>
      </li>

      <li class="nav-item dropdown <?php echo ($controller == "EstimacionDeCongruencia")?'active':'inactive' ?>">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Estimación de Congruencia</a>
        <div class="dropdown-menu">
          <a class="dropdown-item <?php echo ($controller == "EstimacionDeCongruencia" && strtoupper($action)=='PROCESOCONGRUENCIA')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'EstimacionDeCongruencia', 'action'=>'procesoCongruencia')) ?>">
            Proceso de Estimación de Congruencia
          </a>

          <a class="dropdown-item <?php echo ($controller == "EstimacionDeCongruencia" && $action=='ValidacionMapaTransferencia')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'EstimacionDeCongruencia', 'action'=>'ValidacionMapaTransferencia')) ?>">
            Validación mapa transferencia
          </a>
        </div>
      </li>

      <li class="nav-item dropdown <?php echo ($controller == "ActivacionDeConvenios")?'active':'inactive' ?>">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Activación de Convenios</a>
        <div class="dropdown-menu">
          <a class="dropdown-item <?php echo ($controller == "ActivacionDeConvenios" && $action=='CrearConvenio')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'ActivacionDeConvenios', 'action'=>'CrearConvenio')) ?>">Nuevo Convenio</a>
        </div>
      </li>

      <li class="nav-item dropdown <?php echo ($controller == "Examinaciones")?'active':'inactive' ?>">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Examinaciones</a>
        <div class="dropdown-menu">
          <a class="dropdown-item <?php echo ($controller == "Examinaciones" && $action=='AgendarExaminaciones')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'Examinaciones', 'action'=>'AgendarExaminaciones')) ?>">
            Agendar examinaciones
          </a>
          <a class="dropdown-item <?php echo ($controller == "Examinaciones" && $action=='ResultadoExamenes')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'Examinaciones', 'action'=>'ResultadoExamenes')) ?>">
            Resultado exámenes
          </a>
        </div>
      </li>

    </ul>

    <ul class="navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link active">
          <i class="fa fa-user-o" aria-hidden="true"></i> Perfil <b>Administrador</b>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-cogs" aria-hidden="true" style="color: white;"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item <?php echo ($controller == "Ajustes" && $action=='Perfil')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'Ajustes', 'action'=>'Perfil')) ?>">
            <i class="fa fa-user" aria-hidden="true"></i> Perfil
          </a>
          <a class="dropdown-item <?php echo ($controller == "Ajustes" && $action=='Mantenedores')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'Ajustes', 'action'=>'Mantenedores')) ?>">
            <i class="fa fa-wrench" aria-hidden="true"></i> Mantenedores
          </a>
          <a class="dropdown-item <?php echo ($controller == "Ajustes" && $action=='Usuarios')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'Ajustes', 'action'=>'Usuarios')) ?>">
            <i class="fa fa-users" aria-hidden="true"></i> Usuarios
          </a>
          <a class="dropdown-item <?php echo ($controller == "Ajustes" && $action=='CerrarSesion')?'active':'inactive' ?>" href="<?php echo $this->Html->url(array('controller' => 'Ajustes', 'action'=>'CerrarSesion')) ?>">
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