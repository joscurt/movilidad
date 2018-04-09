<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <h1>Validación mapa transferencia</h1>
</div>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>RBD</th>
        <th>Fundación / Corporación</th>
        <th>Liceo</th>
        <th>Especialidad</th>
        <th>Carrera Duoc UC</th>
        <th>Responsable</th>
        <th>Estado</th>
        <th class="text-center">Fecha modificación</th>
        <th class="text-center">Ver mapa</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01230</td>
        <td>Fundación Belén educa</td>
        <td>Liceo providencia</td>
        <td>Mecánica</td>
        <td>Mecánica</td>
        <td>Juan Valdez</td>
        <td>Pendiente</td>
        <td class="text-center">20-02-2018</td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('action'=>'IngresarCarrera'.'/22')) ?>">
            <i class="fa fa-eye"></i>
          </a>
        </td>
      </tr>

      <tr>
        <td>01231</td>
        <td>Fundación Belén educa</td>
        <td>Liceo providencia</td>
        <td>Informatica</td>
        <td>Informatica</td>
        <td>Sin asignar</td>
        <td>Pendiente</td>
        <td class="text-center">20-02-2018</td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('action'=>'IngresarCarrera'.'/22')) ?>">
            <i class="fa fa-eye"></i>
          </a>
        </td>
      </tr>

      <tr>
        <td>01232</td>
        <td>Fundación Santa María</td>
        <td>Liceo Aplicaciones</td>
        <td>Informática</td>
        <td>Informática</td>
        <td>Francisca Ramos</td>
        <td>Pendiente</td>
        <td class="text-center">20-02-2018</td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('action'=>'IngresarCarrera'.'/22')) ?>">
            <i class="fa fa-eye"></i>
          </a>
        </td>
      </tr>

    </tbody>
  </table>
</div>