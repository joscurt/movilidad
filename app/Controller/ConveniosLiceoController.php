<?php
  class ConveniosLiceoController extends AppController {
    public function index(){
      $this->redirect(array('action'=>'Activos'));
    }

    public function activos() {
      $user = $this->Session->read('User');

      $this->LoadModel('Convenio');
      $rbd = $user['Usuarios']['MOV_LICEOS_RBD'];
      $convenios = $this->Convenio->getConvenioBySrb($rbd);

      $this->LoadModel('Alumno');
      $alumno = $this->Alumno->getAnioByRb($rbd);

        if(!empty($alumno)){
          $alumno = date_create($alumno['Alumno']['ANIO_EGRESO']);
          $alumno = date_format($alumno,'Y');
        }else{
          $alumno = 0;
        }

      $cantidad_alumno = $this->Alumno->getAlumnoByRbd($rbd);
      $count = count($cantidad_alumno);

      // debug($count);exit();

      $this->set(array(
          'convenios' =>  $convenios,
          'alumno' => $alumno,
          'cantidad' => $count
      ));


    }

    public function listaAlumnos() {

    }

    public function historial() {
      
    }

    public function cerrarSesion() {
      $this->Session->destroy();
      $this->Session->setFlash('La sesión ha sido <strong>cerrada.</strong>','Flash/mensaje-info');
      $this->redirect(array('controller' => 'Login', 'action'=>'login'));
    }

  }
?>