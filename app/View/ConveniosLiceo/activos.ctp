<?php echo $this->element('Menu/menu-liceo'); ?>

<div class="container margin-top2">
  <h1>Convenios Activos</h1>
  <p class="lead">Liceo Providencia</p>
</div>

<!-- Tabla  -->
<div class="container margin-top2">
  <table class="table table-hover table-fixed-header">
    <thead>
      <tr>
        <th>RBD</th>
        <th>Especialidad</th>
        <th class="text-center">Fecha inicio</th>
        <th class="text-center">Fecha fin</th>
        <th class="text-center">Ult. Año Egreso</th>
        <th class="text-center">Alumnos</th>
        <th class="text-center">Editar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($convenios as $key => $convenio) { ?>
       
      
      <tr>
        <td><?php echo $convenio['Convenio']['MOV_LICEOS_RBD']; ?></td>
        <td><?php echo $convenio['Convenio']['ESPECIALIDAD']; ?></td>
        <td class="text-center"><i class="fa fa-calendar" aria-hidden="true" style="
    margin-right: 4px;
"></i><?php 
        $date = date_create($convenio['Convenio']['FECHA_INICIO']);
        echo date_format($date,'d/m/Y');
        ?></td>
        <td class="text-center"><i class="fa fa-calendar" aria-hidden="true" style="
    margin-right: 4px;
"></i><?php 
        $date = date_create($convenio['Convenio']['FECHA_FIN']);
        echo date_format($date,'d/m/Y');
        ?></td>
        <td class="text-center"><i class="fa fa-graduation-cap" aria-hidden="true" style="
    margin-right: 4px;
"></i><?php 
        echo $alumno;
        ?></td>
        <td class="text-center">
          <i class="fa fa-users" style="margin-right:4px;"></i><?php  echo $cantidad; ?>
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'ConveniosLiceo', 'action' => 'ListaAlumnos'.'/22')) ?>">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>