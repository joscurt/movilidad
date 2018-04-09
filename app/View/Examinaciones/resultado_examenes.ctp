<?php echo $this->element('Menu/menu'); ?>

<?php if ( is_null($id) ): ?>
<div class="container">
  <div class="margin-top2">
    <h1>Resultado examinaciones</h1>
  </div>

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
          <a href="<?php echo $this->Html->url(array('controller' => 'Examinaciones','action'=>'ResultadoExamenes'.'/22')) ?>">
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
<?php endif; ?>

<?php if( !is_null($id) ): ?>
<div class="container">
  <div class="margin-top2">
    <div class="row">
      <div class="col-md-3">
        <b>Examen </b>
        <p class="lead">Cálculo I</p>
      </div>

      <div class="col-md-3">
        <b>Establecimiento </b>
        <p class="lead">Antonio Varas</p>
      </div>

      <div class="col-md-3">
        <b>Fecha examen </b>
        <p class="lead">
          <i class="fa fa-calendar" aria-hidden="true"></i> 10-04-2018
        </p>
      </div>

      <div class="col-md-3">
        <b>Hora examen </b>
        <p class="lead">
          <i class="fa fa-clock-o" aria-hidden="true"></i> 10:45
        </p>
      </div>
    </div>
  </div>

  <div class="margin-top2">
    <table class="table table-hover table-fixed-header">
      <thead>
        <tr>
          <th>Rut</th>
          <th>Nombre</th>
          <th>Email</th>
          <th class="text-center">Presente</th>
          <th class="text-center">Nota obtenida</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>18418177-0</td>
          <td>CIFUENTES PEREZ GAMALIEL DAVID</td>
          <td>cperezgamiel@gmail.com</td>
          <td class="text-center">
            <i class="fa fa-check" aria-hidden="true" style="color: green;"></i>
          </td>
          <td class="text-center">
            5.4
          </td>
        </tr>
        <tr>
          <td>17867694-6</td>
          <td>CARVAJAL RAMOS FRANCISCA JAVIERA</td>
          <td>francarvajal@hotmail.com</td>
          <td class="text-center">
            <i class="fa fa-check" aria-hidden="true" style="color: green;"></i>
          </td>
          <td class="text-center">
            6.1
          </td>
        </tr>
        <tr>
          <td>16199028-0</td>
          <td>ACEVEDO TOBAR JORGE PATRICIO</td>
          <td>jorgeacevedo03@gmail.com</td>
          <td class="text-center">
            <i class="fa fa-times" aria-hidden="true" style="color: red;"></i>
          </td>
          <td class="text-center">
            -
          </td>
        </tr>
        <tr>
          <td>17056383-2</td>
          <td>ALVARADO OYARZO JORGE LUIS</td>
          <td>joseluisalvarado.o@gmail.com</td>
          <td class="text-center">
            <i class="fa fa-check" aria-hidden="true" style="color: green;"></i>
          </td>
          <td class="text-center">
            4.4
          </td>
        </tr>
        
      </tbody>
    </table>
    <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-download" aria-hidden="true"></i> Descargar</button>
  </div>
</div>
<?php endif; ?>