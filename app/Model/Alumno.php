<?php 
  class Alumno extends AppModel {
    public  $name = 'Alumno';
    public  $useTable = 'MOV_ALUMNO';
    public  $primaryKey = 'ID_ALUMNO';
    
    public function getAnioByRb($rbd=null) {
    		// debug($username);exit();
    $options['conditions'] = array(
          'Alumno.MOV_LICEOS_RBD' => $rbd,
    );
     $resultado = $this->find('first',$options);
      return $resultado;
    }
    public function getAlumnoByRbd($rbd=null){
      $options['conditions'] = array(
          'Alumno.MOV_LICEOS_RBD' => $rbd,
      );
      $resultado = $this->find('all',$options);
        // debug($this->getLastQuery());exit();
      return $resultado;
    }
   
  }
?>
