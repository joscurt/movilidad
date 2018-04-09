<?php 
  class Custom extends AppModel {
    public  $name = 'Custom';
    public  $useTable = '';

    public function crearTablaTemporal($table = null) {
      $qry = "CREATE TABLE MY_TEMP_TABLE_$table AS SELECT * FROM $table";
      $result = $this->query($qry);
      return is_array($result);
    }

    public function agregarCampo($table = null, $column = null) {
      $qry = "ALTER TABLE $table ADD ($column VARCHAR2(80))";
      $result = $this->query($qry);
      return is_array($result);
    }

    public function cargarDatosPorTabla($table = null, $data = array()) {
      $date = date('Y-m-d H:i:s');
      if ( $data ) {
        $data['FECHA_CREACION'] = $date;
      }

      $columns = implode(", ", array_keys($data));
      $values  = implode("', '", array_values($data));
      $values = "'".$values."'";

      $qry = "INSERT INTO {$table} ({$columns}) VALUES({$values})";
      $result = $this->query($qry);

      return is_array($result);
    }

    public function modificarDatosPorTabla($table = null, $data = array()) {
      $date = date('Y-m-d H:i:s');
      if ( $data ) {
        $data['FECHA_MODIFICACION'] = $date;
      }

      $strUpdate = null;
      end($data);
      $last_key = key($data);
      $rbd = null;

      foreach ( $data as $key => $value ) {
        if ( $key == 'RBD' ) {
          $rbd = $value;
        }

        if ( $key != $last_key ) {
          $strUpdate .= $key." = '".$value."', "; 
        } else {
          $strUpdate .= $key." = '".$value."'"; 
        }
      }

      $qry = "UPDATE {$table} SET {$strUpdate} WHERE RBD = {$rbd}";
      $result = $this->query($qry);

      return is_array($result);
    }

    public function existeRbd($table = null, $rbd = null) {
      $qry = "SELECT RBD FROM {$table} WHERE RBD = {$rbd}";
      $result = $this->query($qry);

      return !empty($result);
    }

  }
?>