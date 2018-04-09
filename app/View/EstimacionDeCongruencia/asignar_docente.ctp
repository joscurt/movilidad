<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <h1>Asignar equipo</h1>
</div>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-4">
      <b>Liceo </b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-4">
      <b>Especialidad </b>
      <p class="lead">Mecánica</p>
    </div>
    <div class="col-md-4">
      <b>Carrera Duoc UC </b>
      <p class="lead">Mecánica</p>
    </div>
  </div>
</div>

<!-- Asignar Docente -->
<div class="container margin-top2">
  <form action="">
    <div id="cards">
      <div class="card border-dark mb-3">
        <div class="card-body">
          <h4 class="card-title"><b>Asignaciones</b></h4>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="asignarDocenteDuoc">Docente Duoc UC</label>
                <input type="text" class="form-control" id="asignarDocenteDuoc" placeholder="">
              </div>
            </div>
            <div class="col-md-3 margin-top2">
              <button type="button" class="btn btn-secondary btn-block float-right">Asignar docente Duoc UC</button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="asignarEscuelaDuoc">Encargado Escuela Duoc UC</label>
                <input type="text" class="form-control" id="asignarEscuelaDuoc" placeholder="">
              </div>
            </div>
            <div class="col-md-3 margin-top2">
              <button type="button" class="btn btn-secondary btn-block float-right">Asignar Escuela Duoc UC</button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="asignarAdministrador">Administrador encargado del proceso</label>
                <input type="text" class="form-control" id="asignarAdministrador" placeholder="">
              </div>
            </div>
            <div class="col-md-3 margin-top2">
              <button type="button" class="btn btn-secondary btn-block float-right">Asignar administrador</button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="asignarLiceo">Asignar Liceo</label>
                <input type="text" class="form-control" id="asignarLiceo" placeholder="">
              </div>
            </div>
            <div class="col-md-3 margin-top2">
              <button type="button" class="btn btn-secondary btn-block float-right">Asignar liceo</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'CargaMapaAcademico/22')) ?>">
    Volver
  </a>
  <a class="btn btn-primary float-right margin-bottom2" href="<?php echo $this->Html->url(array('action'=>'Mapas'.'/22')) ?>">
    Siguiente proceso
  </a>
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

var states = ['Pedro Ramirez', 'Francisca Ramos', 'Alicia Venegas', 'Nicolas Morchio', 'Mauricio Allende', 
  'Teodoro Camaggi'];

$('#asignarDocente').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});
</script>