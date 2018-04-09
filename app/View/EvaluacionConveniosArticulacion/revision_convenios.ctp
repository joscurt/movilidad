<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <h1>Revisión convenios existentes</h1>
</div>

<!-- Filtro busqueda -->
<div class="container">
  <div class="card card-default margin-top2" style="border-radius: 0;">
    <div class="card-header">Filtros de busqueda</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="filtro-busqueda">Filtro: </label>
            <select class="custom-select" id="filtro-busqueda">
              <option value="RBD">RBD</option>
              <option value="">Fundación / Corporación</option>
              <option>Liceo</option>
              <option>Especialidad</option>
              <option>Convenio</option>
              <option>Comuna</option>
            </select>
          </div>
        </div>

        <div class="col-md-7">
          <div class="form-group">
            <label for="busqueda">Buscar: </label>
            <input type="text" class="form-control" id="busqueda" placeholder="">
          </div>
        </div>

        <div class="col-md-2">
          <button type="button" class="btn btn-primary btn-block margin-top2">Buscar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tabla  -->
<div class="container">
  <table class="table table-hover" style="padding: 0px;font-size: 12px;" id="stickyHeader">
    <thead>
      <tr>
        <th>RBD</th>
        <th>Fundación / Corporación</th>
        <th>Liceo</th>
        <th>Especialidad</th>
        <th class="col-sm-1">Escuela Duoc UC</th>
        <th>Región</th>
        <th>Comuna</th>
        <th class="text-center">Nº Convenio</th>
        <th class="text-center">Fecha Inicio</th>
        <th class="text-center">Detalle</th>
        <th class="text-center">Agenda</th>
        <th class="text-center">Archivos</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($convenios as $key => $convenio) {
        // debug($convenio);exit();
        ?>
        <tr>
          <td><?php echo $convenio['Convenio']['MOV_LICEOS_RBD']; ?></td>
          <td><?php echo $convenio['Liceos']['NOM_FUNDA_CORPORACION']; ?></td>
          <td><?php echo $convenio['Liceos']['NOMBRE_ESTABLECIMEINTO']; ?></td>
          <td><?php echo $convenio['Convenio']['ESPECIALIDAD']; ?></td>
          <td><?php echo $convenio['Convenio']['ESPECIALIDAD']; ?></td>
          <td><?php echo $convenio['Liceos']['REGION']; ?></td>
          <td><?php echo $convenio['Liceos']['COMUNA']; ?></td>
          <td><?php echo $convenio['Convenio']['ID_CONVENIO']; ?></td>
          <td><?php echo $convenio['Convenio']['FECHA_INICIO']; ?></td>
<!--           <td><?php echo $convenio['Convenio']['OBSERVACIONES_CONVENIO']; ?></td> -->
<td class="text-center"><i class="fa fa-eye" aria-hidden="true"></i></td>
<td class="text-center">
          <a href="<?php echo $this->Html->url( array('action' => 'Agenda'.'/22') )?>">
            <i class="fa fa-calendar-o" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url( array('controller' => 'Archivos', 'action' => 'Lista'.'/22') )?>">
            <i class="fa fa-files-o" aria-hidden="true"></i> 6
          </a>
        </td>
        </tr>
    <?php  } ?>

      <tr class="table-warning">
        <td>01231</td>
        <td>Fundación Belén educa</td>
        <td>Liceo Aplicaciones</td>
        <td>Informática</td>
        <td>Informática</td>
        <td>RM</td>
        <td>Providencia</td>
        <td class="text-center">2</td>
        <td class="text-center"><i class="fa fa-calendar" aria-hidden="true"></i> 08/11/2018</td>
        <td class="text-center"><i class="fa fa-eye" aria-hidden="true"></i></td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-calendar-o" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url( array('controller' => 'Archivos', 'action' => 'Lista'.'/22') )?>">
            <i class="fa fa-files-o" aria-hidden="true"></i> 8
          </a>
        </td>
      </tr>

      <tr>
        <td>01232</td>
        <td>Fundación Santa María</td>
        <td>SOFOFA</td>
        <td>Mecanica</td>
        <td>Mecanica</td>
        <td>RM</td>
        <td>Providencia</td>
        <td class="text-center">3</td>
        <td class="text-center"><i class="fa fa-calendar" aria-hidden="true"></i> 08/11/2018</td>
        <td class="text-center"><i class="fa fa-eye" aria-hidden="true"></i></td>
        <td class="text-center">
          <a href="">
            <i class="fa fa-calendar-o" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url( array('controller' => 'Archivos', 'action' => 'Lista'.'/22') )?>">
            <i class="fa fa-files-o" aria-hidden="true"></i> 11
          </a>
        </td>
      </tr>

    </tbody>
  </table>

  <button type="button" class="btn btn-success pull-right"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Descargar Excel</button>
</div>

<script>
$('table').stickyTableHeaders();
</script>