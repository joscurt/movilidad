<?php
  class ProbandoController extends AppController {
    public $components = array('RequestHandler');

    public function index(){
      $this->loadModel('Liceos');
      $liceos = $this->Liceos->getLiceos();
      $this->set(array(
          'liceos' => $liceos,
          '_serialize' => array('liceos')
      ));
    }

    public function view($id) {
      $this->loadModel('Liceos');
      $liceos = $this->Liceos->getLiceoById($id);
      $this->set(array(
        'liceos' => $liceos,
        '_serialize' => array('liceos')
      ));
    }

    public function add() {
      $this->loadModel('Liceos');
      if ( $this->Liceos->agregarLiceo($this->request->data) ) {
        $message = 'Saved';
      } else {
        $message = 'Error';
      }
      $this->set(array(
        'message' => $message,
        '_serialize' => array('message')
      ));
    }

    /*
    public function add() {
      $asd = array(
        'LICEOS' => array(
          'RBD' => 999,
          'NOMBRE_ESTABLECIMIENTO' => 'pruebaa'
        )
      );
      $this->loadModel('Liceos');
      $this->Liceos->create(true);
      if ( $this->Liceos->save($asd) ) {
        $message = 'Saved';
      } else {
        $message = 'Error';
      }
      // if( !$this->Liceos->save($asd) ){
      //   debug($this->Liceos->validationErrors); 
      //   debug($this->Liceos->invalidFields()); die();
      // }
      $this->set(array(
        'message' => $message,
        '_serialize' => array('message')
      ));
    }
    */
  }
?>