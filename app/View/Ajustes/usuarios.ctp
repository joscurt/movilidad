<?php echo $this->element('Menu/menu'); ?>

<div class="container margin-top2">
  <form action="">
    <div class="card border-dark mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>Agregar nuevo usuario</b></h4>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" id="nombre" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="apellido">Apellidos</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" id="apellido" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="rol">Rol</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" id="rol" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="correo">Correo</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                </div>
                <input type="email" class="form-control" id="correo" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <button type="button" class="btn btn-primary btn pull-right">Agregar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<div class="container margin-top2">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="docentes-tab" data-toggle="tab" href="#docentes" role="tab" aria-controls="docentes" aria-selected="true">Docentes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="liceos-tab" data-toggle="tab" href="#liceos" role="tab" aria-controls="liceos" aria-selected="false">Liceos</a>
    </li>
  </ul>
</div>

<div class="container margin-top2">
  <div class="tab-content" id="myTabContent">
    <!-- Docentes -->
    <div class="tab-pane fade show active" id="docentes" role="tabpanel" aria-labelledby="docentes-tab">
      <h1>Docentes</h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th class="text-center">Fecha creación</th>
            <th class="text-center">Editar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Juan Fernando</td>
            <td>Valdez Camaggi</td>
            <td><i class="fa fa-envelope-o" aria-hidden="true"></i> jf.valdez@duoc.cl</td>
            <td class="text-center">
              <i class="fa fa-calendar-o" aria-hidden="true"></i> 15/03/2018
            </td>
            <td class="text-center">
              <a href="">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Fin Docentes -->

    <!-- Liceos -->
    <div class="tab-pane fade show" id="liceos" role="tabpanel" aria-labelledby="liceos-tab">
      <h1>Liceos</h1>
    </div>    
    <!-- Fin Liceos -->
  </div>  
</div>