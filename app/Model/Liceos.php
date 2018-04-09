<?php 
  class Liceos extends AppModel {
    public  $name = 'Liceos';
    public  $useTable = 'LICEOS';
    public  $primaryKey = 'ID';
    
    public function getLiceos() {
      $resultado = $this->find('all', array(
        'fields' => array(
          'RBD',
          'NOMBRE_ESTABLECIMIENTO',
          'RUT_SOST',
          'NOMBRE_SOST',
          'COMUNA',
          'REGION'
        )
      ));
      return $resultado;
    }

    public function getFirstLiceo() {
      $resultado = $this->find('first', array(
        'fields' => array(
          'RBD',
          'NOMBRE_ESTABLECIMIENTO',
          'RUT_SOST',
          'NOMBRE_SOST',
          'COMUNA',
          'REGION'
        )
      ));
      return $resultado;
    }

    public function getLiceoById($id) {
      $resultado = $this->find('all', array(
        'fields' => array(
          'ID',
          'RBD',
          'NOMBRE_ESTABLECIMIENTO',
          'RUT_SOST',
          'NOMBRE_SOST',
          'COMUNA'
        ),
        'conditions' => array(
          'ID' => $id
        )
      ));
      return $resultado;
    }

    public function agregarLiceo($data = array()) {
      // $this->create();
      // $result = $this->save($data);
      $columns = implode(", ", array_keys($data));
      $values  = implode("', '", array_values($data));
      $values = "'".$values."'";

      // return $result;
      $qry = "INSERT INTO LICEOS ({$columns}) VALUES({$values})";
      // $qry = "INSERT INTO LICEOS (RBD, NOMBRE_ESTABLECIMIENTO) VALUES(88, 'olz')";
      $result = $this->query($qry);

      return is_array($result);
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

    public function existeRbd($rbd = null) {
      $conditions = array(
        'RBD' => $rbd
      );
      return $this->hasAny($conditions);
    }
  }
?>