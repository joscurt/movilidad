<?php
  class DocenteDuocController extends AppController {
    public function index(){
    }

    public function cerrarSesion() {
      $this->Session->destroy();
      $this->Session->setFlash('La sesión ha sido <strong>cerrada.</strong>','Flash/mensaje-info');
      $this->redirect(array('controller' => 'Login', 'action'=>'login'));
    }

  }
?>