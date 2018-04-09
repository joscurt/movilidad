<?php 
  class MapaLiceo extends AppModel {
    public  $name = 'MapaLiceo';
    public  $useTable = 'MOV_MAPA_LICEO';
    public $primaryKey = 'ID_MAPA_LICEO';
    
    public function getMapaLiceo() {
      $resultado = $this->find('all');
      return $resultado;
    }
    public function getMapaLiceoByIdasignatura($asignatura=null,$rbd=null,$mapa_id){
    	$options['conditions'] = array(
    		'ID_ASIGNATURA_LICEO'=> $asignatura,
    		'MOV_LICEOS_RBD' => $rbd,
    		'MOV_CONGRUENCIA_ID_CONGRUENCIA' => $mapa_id
    	);	

    	$result = $this->find('first',$options);
    	// debug($this->getLastQuery());
    	return $result;
    }
   
  }
?>