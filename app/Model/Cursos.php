<?php 
  class Cursos extends AppModel {
    public  $name = 'Cursos';
    public  $useTable = 'CURSOS';
    public $primaryKey = 'ID';
    
    public function getLiceos() {
      $resultado = $this->find('all');
      return $resultado;
    }

    public function agregarCurso($data = array()) {
      $columns = implode(", ", array_keys($data));
      $values  = implode("', '", array_values($data));
      $values = "'".$values."'";

      $qry = "INSERT INTO CURSOS ({$columns}) VALUES({$values})";
      $result = $this->query($qry);

      return is_array($result);
    }

  }
?>