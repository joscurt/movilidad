<?php
  class LoginController extends AppController {
    public function index(){

    }

    private function _loginAdministrador( $user ) {
      $this->loadModel('Administrativo');
      $usuario = $this->Administrativo->getAdministrativoByUsername($user);
      // $this->loadModel('LdapAdministrativo');
      // debug($this->LdapAdministrativo->connect('bherrera', '123'));
      // Descomentar

      if ( $usuario ) {
        $nombre = $usuario[0]['Administrativo']['NOMBRE'];
        $id = $usuario[0]['Administrativo']['CODIGO'];

        $this->Session->write('User.username', $user);
        $this->Session->write('User.id', $id);
        /*
        $this->Session->write('User.username', 'czavaleta');
        $this->Session->write('User.id', 54);
        */
        $this->Session->setFlash('Bienvenido <b>'.$nombre.'</b>','Flash/mensaje-info');
        $this->redirect(array('controller' => 'EvaluacionConveniosArticulacion', 'action'=>'RevisionConvenios'));
      } else {
        $this->Session->setFlash('El usuario ingresado es <b>incorrecto.</b>','Flash/mensaje-error');
      }
    }

    private function _loginLiceo( $user ) {
      // http://localhost:9000/EvaluacionConveniosArticulacion/RevisionConvenios
      $this->Session->write('Liceo.username', $user);
      // $this->Session->write('User.id', $id);
      $this->Session->setFlash('Bienvenido <b>'.$user.'</b>','Flash/mensaje-info');
      $this->redirect(array('controller' => 'ConveniosLiceo', 'action'=>'Activos'));
    }

    private function _loginDocenteDuoc( $user ) {
      // http://localhost:9000/EvaluacionConveniosArticulacion/RevisionConvenios
      $this->Session->write('DocenteDuoc.username', $user);
      // $this->Session->write('User.id', $id);
      $this->Session->setFlash('Bienvenido <b>'.$user.'</b>','Flash/mensaje-info');
      $this->redirect(array('controller' => 'DocenteDuoc'));
    }

    private function _loginExaminadorDuoc( $user ) {
      // http://localhost:9000/EvaluacionConveniosArticulacion/RevisionConvenios
      $this->Session->write('ExaminadorDuoc.username', $user);
      // $this->Session->write('User.id', $id);
      $this->Session->setFlash('Bienvenido <b>'.$user.'</b>','Flash/mensaje-info');
      $this->redirect(array('controller' => 'ExaminadorDuoc'));
    }

    public function Login(){
      // $this->Session->setFlash('Para ver la pagina solicitada <strong>debe iniciar sesion.</strong>','Flash/mensaje-error');
      if( isset($this->request->data['User']) ) {
        $user = $this->request->data['User']['username'];
        $pass = $this->request->data['User']['password'];
        // $rol = $this->request->data['User']['rol'];

        $this->LoadModel('Usuarios');
        $usuarios = $this->Usuarios->getUsuarioByUsername($user);

        $this->Session->write('User',$usuarios);

        if($usuarios){
            if ($usuarios['Usuarios']['ROL_USUARIO'] == 1  ) {
              $this->_loginAdministrador($user);
            }elseif ($usuarios['Usuarios']['ROL_USUARIO'] == 2 ) {
              $this->_loginDocenteDuoc($usuarios['Usuarios']['NOMBRE']);
            }elseif ($usuarios['Usuarios']['ROL_USUARIO'] == 4) {
              $this->_loginExaminadorDuoc($usuarios['Usuarios']['NOMBRE']);
            }elseif ($usuarios['Usuarios']['ROL_USUARIO'] == 5) {
              $this->_loginLiceo($usuarios['Usuarios']['NOMBRE']);
            }
        }
        else{
          $this->Session->setFlash('El usuario ingresado es <b>incorrecto.</b>','Flash/mensaje-error');
        }

        // if ( $rol == 'Administrador' ) {
        //   $this->_loginAdministrador($user);
        // }

        // if ( $rol == 'Liceo EMTP' ) {
        //   $this->_loginLiceo('Liceo Providencia');
        // }

        // if ( $rol == 'Docente Duoc UC' ) {
        //   $this->_loginDocenteDuoc('Felipe Camaggi');
        // }

        // if ( $rol == 'Examinador Duoc UC' ) {
        //   $this->_loginExaminadorDuoc('Felipe Camaggi Examinador');
        // }
      }
    }

    public function CerrarSesion() {
      $this->Session->destroy();
      $this->Session->setFlash('La sesión ha sido <strong>cerrada.</strong>','Flash/mensaje-info');
      $this->redirect(array('controller' => 'Login', 'action'=>'login'));
    }
  }
?>