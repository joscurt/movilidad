<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
  var $rutas_publicas = array('login'=>array('*'), 'alumnos' => array('*'), 'prueba' => array('*'), 'probando' => array('*'));

  public function isPublic($controller=null,$action=null) {
		$response = false;
		if ( isset($this->rutas_publicas[$controller]) ) {
			if (in_array('*', $this->rutas_publicas[$controller])) {
				$response = true;
			} else {
				if (in_array($action, $this->rutas_publicas[$controller])) {
					$response = true;
				}
			}
		}
		return $response;
	}
	
	private function _authError() {
		$this->Session->destroy();
		$this->Session->setFlash('Para ver la pagina solicitada debe iniciar sesion.','Flash/mensaje-error');
		$this->redirect(array('controller' => 'Login', 'action'=>'login'));
	}

	private function _sessionAuth($session, $controllers = array()) {
		$permission = false;
		if ( !empty($session) ) {
			$controller = $this->request->params['controller'];

			foreach ($controllers as $value) {
				if ( $value == $controller ) {
					$permission = true;
				}
			}

			if ( !$permission ) {
				$this->_authError();
			}
		}
	}
  
  public function beforeFilter()
	{
		if (!$this->isPublic(strtolower($this->params['controller']), strtolower($this->params['action']))) {
			$admin = $this->Session->read('User.username');
			$liceo = $this->Session->read('Liceo.username');
			$docenteDuoc = $this->Session->read('DocenteDuoc.username');
			$examinadorDuoc = $this->Session->read('ExaminadorDuoc.username');
			
			if ( empty($admin) && empty($liceo) && empty($docenteDuoc) && empty($examinadorDuoc) ) {
				$this->_authError();
			}

			$adminPermission = array('Administrador', 'EstimacionDeCongruencia', 'EvaluacionConveniosArticulacion', 'Ajustes', 'ActivacionDeConvenios', 'Archivos', 'Examinaciones');
			$liceoPermission = array('ConveniosLiceo', 'ProcesoCongruenciaLiceo', 'AjustesLiceo');
			$docenteDuocPermission = array('DocenteDuoc', 'EstimacionDeCongruencia', 'Archivos');
			$examinadorDuocPermission = array('ExaminadorDuoc');

			$this->_sessionAuth($admin, $adminPermission);
			$this->_sessionAuth($liceo, $liceoPermission);
			$this->_sessionAuth($docenteDuoc, $docenteDuocPermission);
			$this->_sessionAuth($examinadorDuoc, $examinadorDuocPermission);
		}
	}
}
