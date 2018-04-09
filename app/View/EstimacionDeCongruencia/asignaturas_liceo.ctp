<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-3">
      <b>Liceo</b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-3">
      <b>Especialidad</b>
      <p class="lead">Mecánica</p>
    </div>
    <div class="col-md-3">
      <b>Carrera</b>
      <p class="lead">Construcción Civil</p>
    </div>
    <div class="col-md-3">
      <b>Asignatura</b>
      <p class="lead">Cálculo</p>
    </div>
  </div>
</div>

<div class="container">
  <h1>Aprendizaje Duoc</h1>
</div>

<div class="container margin-top">
  <div class="row">
    <div class="col-md-4">
      <div class="form-group list-group-item list-group-item-action active">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="aprendizajeLiceo1" checked="">
          <label class="custom-control-label" for="aprendizajeLiceo1">Aprendizaje Liceo I</label>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group list-group-item list-group-item-action">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="aprendizajeLiceo2" >
          <label class="custom-control-label" for="aprendizajeLiceo2">Aprendizaje Liceo II</label>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group list-group-item list-group-item-action">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="aprendizajeLiceo3" >
          <label class="custom-control-label" for="aprendizajeLiceo3">Aprendizaje Liceo III</label>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group list-group-item list-group-item-action">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="aprendizajeLiceo4" >
          <label class="custom-control-label" for="aprendizajeLiceo4">Aprendizaje Liceo IV</label>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group list-group-item list-group-item-action active">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="aprendizajeLiceo5" checked>
          <label class="custom-control-label" for="aprendizajeLiceo5">Aprendizaje Liceo V</label>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group list-group-item list-group-item-action">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="aprendizajeLiceo6" >
          <label class="custom-control-label" for="aprendizajeLiceo6">Aprendizaje Liceo VI</label>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group list-group-item list-group-item-action">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="aprendizajeLiceo7" >
          <label class="custom-control-label" for="aprendizajeLiceo7">Aprendizaje Liceo VII</label>
        </div>
      </div>
    </div>
  </div>

  <div class="row margin-top2">
    <div class="col-md-3">
      <div class="form-group">
        <label for="nivelCongruencia">Congruencia</label>
        <select class="custom-select" id="nivelCongruencia">
          <option selected>Inexistente</option>
          <option value="1">Bajo</option>
          <option value="2">Medio</option>
          <option value="3">Alto</option>
        </select>
      </div>
    </div>
    <div class="col-md-9">
      <div class="form-group">
        <label for="observaciones">Observaciones</label>
        <textarea class="form-control" id="observaciones" rows="3" placeholder="Observaciones..."></textarea>
      </div>
    </div>
  </div>
</div>

<!-- Navegación -->
<div class="container margin-top2">
  <a class="btn btn-danger float-left" href="<?php echo $this->Html->url(array('action'=>'Congruencia/22')) ?>">
    Volver
  </a>
  <a class="btn btn-primary float-right margin-bottom2" href="">
    Guardar
  </a>
</div>

<script>
  $('input:checkbox').change(function(){
    if($(this).is(":checked")) {
      $(this).parent().parent().addClass("active");
    } else {
      $(this).parent().parent().removeClass("active");
    }
  });
</script>
