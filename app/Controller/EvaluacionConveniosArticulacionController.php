<?php
  class EvaluacionConveniosArticulacionController extends AppController {
    public function index(){
      
    }

    public function revisionConvenios() {
      $username = $this->Session->read('User.username');

      $this->LoadModel('Convenio');
      $convenios = $this->Convenio->getConvenio();
      // debug($convenios);exit();
      $this->set(array(
        'convenios'=> $convenios
      ));
       

    }

    public function formularioPreevaluacion($id = null) {
      $this->set(array(
				'id'=>$id
			));
    }

    public function cargaArchivos() {

    }

    public function agenda() {
      
    }

  }
?>