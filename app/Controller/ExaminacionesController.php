<?php
  class ExaminacionesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function agendarExaminaciones() {
      
    }

    public function resultadoExamenes($id = null) {
      $this->set(array(
				'id'=>$id
			));
    }
  }
?>