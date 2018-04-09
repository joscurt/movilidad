<?php echo $this->element('Menu/menu-examinador'); ?>

<div class="container margin-top2">
  <h1>Fecha de examenes</h1>
</div>

<!-- Procesos actuales -->
<div class="container margin-top">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Examen</th>
        <th>Establecimiento</th>
        <th class="text-center">Fecha examen</th>
        <th class="text-center">Hora examen</th>
        <th class="text-center">Cant. alumnos</th>
        <th class="text-center">Detalle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Cálculo I</td>
        <td>Antonio Varas</td>
        <td class="text-center">
          <i class="fa fa-calendar" aria-hidden="true"></i> 10-04-2018
        </td>
        <td class="text-center">
          <i class="fa fa-clock-o" aria-hidden="true"></i> 10:45
        </td>
        <td class="text-center">
          <i class="fa fa-users" aria-hidden="true"></i> 14
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'ExaminadorDuoc','action'=>'ListaAlumnos'.'/22')) ?>">
            <i class="fa fa-eye" aria-hidden="true"></i>
          </a>
        </td>
      </tr>

      <tr>
        <td>Matemáticas I</td>
        <td>Antonio Varas</td>
        <td class="text-center">
          <i class="fa fa-calendar" aria-hidden="true"></i> 12-04-2018
        </td>
        <td class="text-center">
          <i class="fa fa-clock-o" aria-hidden="true"></i> 09:20
        </td>
        <td class="text-center">
          <i class="fa fa-users" aria-hidden="true"></i> 19
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'Archivos','action'=>'Lista'.'/22')) ?>">
            <i class="fa fa-eye" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>