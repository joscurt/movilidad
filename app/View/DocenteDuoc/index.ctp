<?php echo $this->element('Menu/menu-docente-duoc'); ?>

<div class="container margin-top2">
  <h1>Proceso de estimación de congruencias</h1>
  <p class="text-muted">
    <b>Instrucciones: </b>
    De este listado, seleccione el liceo y la especialidad con los cuales se realizará el proceso de estimación.
  </p>
</div>

<!-- Procesos actuales -->
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>RBD</th>
        <th>Fundación / Corporación</th>
        <th>Liceo</th>
        <th>Especialidad</th>
        <th>Carrera Duoc UC</th>
        <th>Etapa</th>
        <th>Responsable</th>
        <th>Estado</th>
        <th class="text-center">Fecha modificación</th>
        <th class="text-center">Detalle</th>
        <th class="text-center">Archivos</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01230</td>
        <td>Fundación Belén educa</td>
        <td>Liceo providencia</td>
        <td>Mecánica</td>
        <td>Mecánica</td>
        <td>Carga mapa duoc</td>
        <td>Juan Valdez</td>
        <td>Pendiente</td>
        <td class="text-center">20-02-2018</td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'EstimacionDeCongruencia', 'action'=>'Mapas'.'/22')) ?>">
            <i class="fa fa-edit"></i>
          </a>
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'Archivos','action'=>'Lista'.'/22')) ?>">
            <i class="fa fa-files-o" aria-hidden="true"></i> 16
          </a>
        </td>
      </tr>

      <tr>
        <td>01231</td>
        <td>Fundación Belén educa</td>
        <td>Liceo providencia</td>
        <td>Informatica</td>
        <td>Informatica</td>
        <td>En espera de carga mapa liceo</td>
        <td>Sin asignar</td>
        <td>En espera</td>
        <td class="text-center">20-02-2018</td>
        <td class="text-center">
          <i class="fa fa-clock-o" style="color: #fcb839;"></i>
        </td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'Archivos','action'=>'Lista'.'/22')) ?>">
            <i class="fa fa-files-o" aria-hidden="true"></i> 12
          </a>
        </td>
      </tr>

      <tr>
        <td>01232</td>
        <td>Fundación Santa María</td>
        <td>Liceo Aplicaciones</td>
        <td>Informática</td>
        <td>Informática</td>
        <td>Mapa de transferencia</td>
        <td>Francisca Ramos</td>
        <td>Pendiente</td>
        <td class="text-center">20-02-2018</td>
        <td class="text-center"><i class="fa fa-edit"></i></td>
        <td class="text-center">
          <a href="<?php echo $this->Html->url(array('controller' => 'Archivos','action'=>'Lista'.'/22')) ?>">
            <i class="fa fa-files-o" aria-hidden="true"></i> 23
          </a>
        </td>
      </tr>

    </tbody>
  </table>
</div>

<script>
var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

$('#especialidad').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});

$('#ejj').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});
</script>

