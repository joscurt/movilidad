<?php 
  class Usuarios extends AppModel {
    public  $name = 'Usuarios';
    public  $useTable = 'MOV_USUARIOS';
    public  $primaryKey = 'ID_USUARIO';
    
    public function getUsuarioByUsername($username=null) {
    		// debug($username);exit();
    $options['conditions'] = array(
          'Usuarios.USERNAME' => $username,
    );
     $resultado = $this->find('first',$options);
      return $resultado;
    }
   
  }
?>
