<?php
  class AjustesController extends AppController {
    public function index(){

    }

    public function mantenedores() {
      
    }

    public function usuarios() {
      
    }

    public function perfil() {
      $userId = $this->Session->read('User.id');

      $this->loadModel('Administrativo');
      $data = $this->Administrativo->getDataAdministrativoById($userId);

      $nombre = $data[0]['Administrativo']['NOMBRE'];
      $username = $data[0]['Administrativo']['USERNAME'];
      $correo = $data[0]['Administrativo']['EMAIL'];

      $this->set(array(
        'nombre' => $nombre,
        'username' => $username,
        'correo' => $correo
      ));
    }

    public function CerrarSesion() {
      $this->Session->destroy();
      $this->Session->setFlash('La sesión ha sido <strong>cerrada.</strong>','Flash/mensaje-info');
      $this->redirect(array('controller' => 'Login', 'action'=>'login'));
    }

  }
?>