<?php
  class AjustesLiceoController extends AppController {
    public function index() {

    }

    public function perfil() {
      
    }

    public function CerrarSesion() {
      $this->Session->destroy();
      $this->Session->setFlash('La sesión ha sido <strong>cerrada.</strong>','Flash/mensaje-info');
      $this->redirect(array('controller' => 'Login', 'action'=>'login'));
    }

  }
?>