<?php 
  class Convenio extends AppModel {
    public  $name = 'Convenio';
    public  $useTable = 'MOV_CONVENIO';
    public $primaryKey = 'ID_CONVENIO';
    
    public function getConvenio() {

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

   public function getConvenioBySrb($rbd=null){
    $options['conditions'] = array(
     'Convenio.MOV_LICEOS_RBD' => $rbd,
    );
    // $options['joins'] = array(
    //   array(
    //     'table' => 'MOV_ALUMNO',
    //     'type' => 'LEFT',
    //     'alias' => 'Alumnos',
    //     'conditions' => array(
    //       'Alumnos.MOV_LICEOS_RBD = Convenio.MOV_LICEOS_RBD'
    //     )
    //   )
    // );
    // $options['fields'] = array(
    //       'DISTINCT Convenio.ID_CONVENIO',
    //       'Convenio.ESPECIALIDAD',
    //       'Convenio.FECHA_INICIO',
    //       'Convenio.FECHA_FIN',
    //       'Convenio.OBSERVACIONES_CONVENIO',
    //       'Convenio.USUARIO',
    //       'Convenio.MOV_LICEOS_RBD',
    //      );
    $result = $this->find('all',$options);
    // debug($this->getLastQuery());exit();

    
    // debug($this->getLastQuery());
    return $result;
   }
  }
?>