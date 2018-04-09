<?php 
  class Administrativo extends AppModel {
    public  $name = 'Administrativo';
    public  $useTable = 'MOV_USUARIOS';
    
    public function getAdministrativoByUsername($username = null){
      $resultado = $this->find('all', array(
        'fields' => array(
          'NOMBRE',
          'ID_USUARIO'
        ),
        'conditions' => array(
          'USERNAME' => $username
        )
      ));
      return $resultado;
    }

    public function getDataAdministrativoById($id = null) {
      $data = $this->find('all', array(
        'fields' => array(
          'Nombre',
          'Username',
          'Email'
        ),
        'conditions' => array(
          'CODIGO' => $id
        )
      ));
      return $data;
    }

    public function getAdministrativos(){
      $resultado = $this->find('all');
      return $resultado;
    }

  }
?>