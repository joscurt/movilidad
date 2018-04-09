<?php 
  class MapaCongruencia extends AppModel {
    public  $name = 'MapaCongruencia';
    public  $useTable = 'MOV_MAPA_CONGRUENCIA';
    public $primaryKey = 'ID_MAPA_C';
    
    public function getMapaCongruencia() {

      $options['joins'] = array(
        array(
          'table'=> 'MOV_LICEOS',
          'type' => 'INNER',
          'alias' => 'Liceos',
          'conditions' => array(
            'Liceos.RBD = Convenio.MOV_LICEOS_RBD'
          )
        )
      );
      $options['fields'] = array(
          'Convenio.ID_CONVENIO',
          'Convenio.ESPECIALIDAD',
          'Convenio.FECHA_INICIO',
          'Convenio.FECHA_FIN',
          'Convenio.OBSERVACIONES_CONVENIO',
          'Convenio.USUARIO',
          'Convenio.MOV_LICEOS_RBD',
          'Liceos.RBD',
          'Liceos.NOM_FUNDA_CORPORACION',
          'Liceos.NOMBRE_ESTABLECIMEINTO',
          'Liceos.RUT_SOST',
          'Liceos.NOMBRE_SOST',
          'Liceos.DIRECCION',
          'Liceos.COMUNA',
          'Liceos.REGION',
          'Liceos.FECHA_CREACION',
          'Liceos.FECHA_MODIFICACION',
             );

      $result = $this->find('all',$options);

      // debug($this->getLastQuery());
      // debug($result);exit();
      return $result;
    }

   public function getMapaCongruenciaBySrb($rbd=null){
    $options['conditions'] = array(
     'MapaCongruencia.RBD_CONGRUENCIA' => $rbd,
    );
    $result = $this->find('first',$options);
    return $result;
   }
  }
?>