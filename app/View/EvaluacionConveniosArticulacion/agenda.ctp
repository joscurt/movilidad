<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-3">
      <b>Fundación / Corporación</b>
      <p class="lead">Fundación Belén educa</p>
    </div>
    <div class="col-md-3">
      <b>Liceo </b>
      <p class="lead">A-71</p>
    </div>
    <div class="col-md-3">
      <b>Especialidad </b>
      <p class="lead">Gastronomia</p>
    </div>
    <div class="col-md-3">
      <b>Nro. Convenio </b>
      <p class="lead">1</p>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <h1>Agenda</h1>
  <form action="">
    <div id="cards">
      <div class="card border-dark mb-3">
        <div class="card-body">
          <h4 class="card-title"><b>Nuevo evento</b></h4>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="tarea">Tarea</label>
                <input type="text" class="form-control" id="tarea" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="destinatarios">Destinatarios</label>
                <input type="text" class="form-control" id="destinatarios" placeholder="">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="control-label">Fecha inicio</label>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="DD/MM/YYYY" id="fechaInicio">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="control-label">Fecha fin</label>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="DD/MM/YYYY" id="fechaFin">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <a class="btn btn-success btn-block float-right" href="">Agregar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'RevisionConvenios')) ?>">
    Volver
  </a>
</div>

<script>
$('#fechaInicio').datepicker();
$('#fechaFin').datepicker();
</script>