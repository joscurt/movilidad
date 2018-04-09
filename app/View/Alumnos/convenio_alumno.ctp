<?php echo $this->element('Menu/menu-alumno'); ?>

<div class="container margin-top2">
  <div class="row">
    <div class="col-md-3">
      <b>Nro Convenio</b>
      <p class="lead">0303456</p>
    </div>
    <div class="col-md-3">
      <b>Establecimiento</b>
      <p class="lead">Liceo Providencia</p>
    </div>
    <div class="col-md-3">
      <b>Especialidad</b>
      <p class="lead">Telecomunicaciones</p>
    </div>
    <div class="col-md-3">
      <b>Año Vigencia</b>
      <p class="lead">2018</p>
    </div>
  </div>
</div>

<div class="container margin-top2">
  <button type="button" id="encuesta" class="btn btn-success btn-lg btn-block" style="margin-bottom: 1em;" data-toggle="modal" data-target="#modaltest"><i class="fa fa-list-alt" aria-hidden="true"></i> Realizar encuesta</button>
  <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 2em;"><i class="fa fa-cloud-download" aria-hidden="true"></i> Descargar ficha convalidación</button>
</div>

<div class="container margin-top">
  <div class="table table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Curriculo</th>
          <th>Nombre carrera</th>
          <th>Sigla</th>
          <th>Nombre del curso</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1444306</td>
          <td>ADMINISTRACIÓN_DE_REDE_COMPUTACIONALES</td>
          <td>FDN1501</td>
          <td>FUNDAMENTOS DE NETWORKING</td>
        </tr>
        <tr>
          <td>1446202</td>
          <td>INGENIERÍA_EN_CONECTIVIDAD_Y_REDES</td>
          <td>
            <table>
              <tr>
                <td>FDN1501</td>
              </tr>
              <tr>
                <td>ICR1501</td>
              </tr>
              <tr>
                <td>SEH1501</td>
              </tr>
              <tr>
                <td>PDE2501</td>
              </tr>
              <tr>
                <td>SES2501</td>
              </tr>
            </table>
          </td>
          <td>
            <table>
              <tr>
                <td>FUNDAMENTOS DE NETWORKING</td>
              </tr>
              <tr>
                <td>INSTALACIÓN Y CERTIFICACIÓN DE REDES</td>
              </tr>
              <tr>
                <td>SOPORTE EN HARDWARE</td>
              </tr>
              <tr>
                <td>PROTOCOLOS DE ENRUTAMIENTO</td>
              </tr>
              <tr>
                <td>SOPORTE EN SOFTWARE</td>
              </tr>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>  

<!-- Modal -->
<div class="modal" id="modaltest">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Encuesta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://goo.gl/forms/FG2D3hzYqZdfOUXj2" frameborder="0" style="min-width: 100%; min-height: 35em;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" id="closee" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>

</script>