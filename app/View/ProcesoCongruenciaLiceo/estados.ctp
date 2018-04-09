<?php echo $this->element('Menu/menu-liceo'); ?>

<div class="container margin-top2">
  <h1>Proceso Congruencia / Estado</h1>
  <p class="lead">Liceo Providencia</p>
</div>

<div class="container margin-top2">
  <table class="table table-hover table-fixed-header">
    <thead>
      <tr>
        <th>ID</th>
        <th>Especialidad</th>
        <th class="text-center">Fecha límite</th>
        <th>Estado</th>
        <th class="text-center">Detalle</th>
        <th class="text-center">Adjuntos</th>
      </tr>
    </thead>
    <?php   foreach ($congruencias as $key => $congruencia) {
     ?>
      <tr>
        <td><?php echo $congruencia['Congruencia']['ID_CONGRUENCIA']; ?></td>
        <td><?php   echo $congruencia['Congruencia']['ESPECIALIDAD_LICEO']; ?></td>
        <td class="text-center"><i class="fa fa-calendar" aria-hidden="true"></i><?php $date = date_create($congruencia['Congruencia']['FECHA_INICIO_CG']);
          echo date_format($date, 'd/m/Y');
         ?>
       </td>
        <td><?php   echo $congruencia['EstadoCongruencia']['ESTADO_CONGRUENCIA']; ?></td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url( array('controller' => 'ProcesoCongruenciaLiceo', 'action' => 'Carga',$congruencia['Congruencia']['ID_CONGRUENCIA']) ) ?>">
            <?php if($congruencia['EstadoCongruencia']['ID_ESTADO'] == 3){ ?>
            <i class="fa fa-clock-o" aria-hidden="true" style="color: green;"></i>
            <?php }else{ ?>
            <i class="fa fa-upload" aria-hidden="true" style="color: red;"></i>
            <?php } ?>
          </a>
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url( array('controller' => 'ProcesoCongruenciaLiceo', 'action' => 'AdjuntarArchivos') ) ?>">
            <i class="fa fa-files-o" aria-hidden="true"></i> 0
          </a>
        </td>
      </tr>
      <?php } ?>
    <tbody>
    </tbody>
  </table>
</div>