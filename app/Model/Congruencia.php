<?php 
  class Congruencia extends AppModel {
    public  $name = 'Congruencia';
    public  $useTable = 'MOV_CONGRUENCIA';
    public $primaryKey = 'ID_CONGRUENCIA';
  
public function getCongruencia(){

  $options['joins'] = array(
    array(
      'table' => 'MOV_LICEOS',
      'type'  => 'LEFT',
      'alias' => 'Liceos',
      'conditions'=> array(
        'Liceos.RBD = Congruencia.MOV_LICEOS_RBD'
      )
    ),
     array(
        'table' => 'MOV_MAPA_CONGRUENCIA',
        'type' => 'LEFT',
        'alias' => 'MapaCongruencia',
        'conditions' => array(
          'MapaCongruencia.ID_PCONGRUENCIA = Congruencia.ID_CONGRUENCIA'
        )
    ),
     array(
            'table'   => 'MOV_ESTADO_CONGRUENCIA',
            'type'    => 'LEFT',
            'alias'   => 'EstadoCongruencia',
            'conditions' => array(
                'EstadoCongruencia.ID_ESTADO = MapaCongruencia.ESTADO'
            )
      ),
     array(
      'table' => 'MOV_USUARIOS',
      'type'  =>  'LEFT',
      'alias' =>  'Usuarios',
      'conditions' => array(
        'Usuarios.ID_USUARIO = MapaCongruencia.USUARIO_RESPONABLES'
      )
     )
  );

  $options['fields'] = array(
          'Congruencia.ID_CONGRUENCIA',
          'Congruencia.ESPECIALIDAD_LICEO',
          'Congruencia.FECHA_INICIO_CG',
          'Congruencia.MOV_USUARIO_ID_USUARIO',
          'Congruencia.ANIO_CG',
          'Congruencia.FECHA_FIN',
          'Congruencia.OBS_CG',
          'Congruencia.MOV_LICEOS_RBD',
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
          'Liceos.ID_LICEO',
          'MapaCongruencia.ID_MAPA_C',
          'MapaCongruencia.ID_PCONGRUENCIA',
          'MapaCongruencia.RBD_CONGRUENCIA',
          'MapaCongruencia.ID_MAPA_DUOC',
          'MapaCongruencia.ID_MAPA_LICEO',
          'MapaCongruencia.USUARIO_RESPONABLES',
          'MapaCongruencia.FECHA_INICIO',
          'MapaCongruencia.ESTADO',
          'MapaCongruencia.RESULTADO',
          'MapaCongruencia.OBS_MAPA_CONGRUENCIA',
          // 'MapaCongruencia.MOV_MAPA_DUOC_ID_MAPA_DUOC',
          'MapaCongruencia.MOV_CONGRUENCIA_ID_CONGRUENCIA',
          // 'MapaCongruencia.MOV_MAPA_LICEO_ID_MAPA_LICEO',
          'EstadoCongruencia.ID_ESTADO',
          'EstadoCongruencia.ESTADO_CONGRUENCIA',
          'Usuarios.ID_USUARIO',
          'Usuarios.RUT',
          'Usuarios.USERNAME',
          'Usuarios.APELLIDO',
          'Usuarios.NOMBRE',

  );
  $result = $this->find('all',$options);
  // debug($this->getLastQuery());exit();
  return $result;

}


  public function getCongruenciaById($id=null){
    $options['conditions'] = array(
        'Congruencia.ID_CONGRUENCIA' => $id,
    );
    $options['fields'] = array(
          'Congruencia.ID_CONGRUENCIA',
          'Congruencia.ESPECIALIDAD_LICEO',
          'Congruencia.FECHA_INICIO_CG',
          'Congruencia.MOV_USUARIO_ID_USUARIO',
          'Congruencia.ANIO_CG',
          'Congruencia.FECHA_FIN',
          'Congruencia.OBS_CG',
          'Congruencia.MOV_LICEOS_RBD',
          'MapaCongruencia.ID_MAPA_C',
          'MapaCongruencia.ID_PCONGRUENCIA',
          'MapaCongruencia.RBD_CONGRUENCIA',
          'MapaCongruencia.ID_MAPA_DUOC',
          'MapaCongruencia.ID_MAPA_LICEO',
          'MapaCongruencia.USUARIO_RESPONABLES',
          'MapaCongruencia.FECHA_INICIO',
          'MapaCongruencia.ESTADO',
          'MapaCongruencia.RESULTADO',
          'MapaCongruencia.OBS_MAPA_CONGRUENCIA',
          // 'MapaCongruencia.MOV_MAPA_DUOC_ID_MAPA_DUOC',
          'MapaCongruencia.MOV_CONGRUENCIA_ID_CONGRUENCIA',
          // 'MapaCongruencia.MOV_MAPA_LICEO_ID_MAPA_LICEO',

    );
    $options['joins'] = array(
     array(
        'table' => 'MOV_MAPA_CONGRUENCIA',
        'type' => 'LEFT',
        'alias' => 'MapaCongruencia',
        'conditions' => array(
          'MapaCongruencia.ID_PCONGRUENCIA = Congruencia.ID_CONGRUENCIA'
        )
    ));
    $result = $this->find('first',$options);

    return $result;
  }
   public function getCongruenciaBySrb($rbd=null){
    $options['conditions'] = array(
     'Congruencia.MOV_LICEOS_RBD' => $rbd,
    );
    $options['joins'] = array(
      array(
        'table' => 'MOV_MAPA_CONGRUENCIA',
        'type' => 'LEFT',
        'alias' => 'MapaCongruencia',
        'conditions' => array(
          'MapaCongruencia.ID_PCONGRUENCIA = Congruencia.ID_CONGRUENCIA'
        )
        ),
      array(
            'table'   => 'MOV_ESTADO_CONGRUENCIA',
            'type'    => 'LEFT',
            'alias'   => 'EstadoCongruencia',
            'conditions' => array(
                'EstadoCongruencia.ID_ESTADO = MapaCongruencia.ESTADO'
            )
      )
    );
    $options['fields'] = array(
          'Congruencia.ID_CONGRUENCIA',
          'Congruencia.ESPECIALIDAD_LICEO',
          'Congruencia.FECHA_INICIO_CG',
          'Congruencia.MOV_USUARIO_ID_USUARIO',
          'Congruencia.ANIO_CG',
          'Congruencia.FECHA_FIN',
          'Congruencia.OBS_CG',
          'Congruencia.MOV_LICEOS_RBD',
          'MapaCongruencia.ID_MAPA_C',
          'MapaCongruencia.ID_PCONGRUENCIA',
          'MapaCongruencia.RBD_CONGRUENCIA',
          'MapaCongruencia.ID_MAPA_DUOC',
          'MapaCongruencia.ID_MAPA_LICEO',
          'MapaCongruencia.USUARIO_RESPONABLES',
          'MapaCongruencia.FECHA_INICIO',
          'MapaCongruencia.ESTADO',
          'MapaCongruencia.RESULTADO',
          'MapaCongruencia.OBS_MAPA_CONGRUENCIA',
          // 'MapaCongruencia.MOV_MAPA_DUOC_ID_MAPA_DUOC',
          'MapaCongruencia.MOV_CONGRUENCIA_ID_CONGRUENCIA',
          // 'MapaCongruencia.MOV_MAPA_LICEO_ID_MAPA_LICEO',
          'EstadoCongruencia.ID_ESTADO',
          'EstadoCongruencia.ESTADO_CONGRUENCIA'
         );
    $result = $this->find('all',$options);
    // debug($this->getLastQuery());
    return $result;
   }
  }
?>