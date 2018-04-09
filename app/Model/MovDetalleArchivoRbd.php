<?php 
  class MovDetalleArchivoRbd extends AppModel {
    public  $name = 'MovDetalleArchivoRbd';
    public  $useTable = 'MOV_DETALLE_ARCHIVO_RBD';
    public  $primaryKey = 'ID';
    
    public function getRbd() {
      $resultado = $this->find('all');
      return $resultado;
    }

    public function addLiceo($data = array()) {
      $res = false;
      $this->create();
      debug($data);
      if ( $this->save($data) ) {
        $res = true;
      }
      return $res;
    }
  }
?>