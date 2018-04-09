<?php 
  class UserTabColumns extends AppModel {
    public  $name = 'UserTabColumns';
    public  $useTable = 'USER_TAB_COLUMNS';
    
    public function getColumnsByTable($table = null) {
      $data = $this->find('all', array(
        'fields' => array(
          'table_name',
          'column_name',
          'data_type',
          'data_length'
        ),
        'conditions' => array(
          'table_name' => $table
        )
      ));
      return $data;
    }

  }
?>