<?php

	App::uses('Folder', 'Utility');
	App::uses('File', 'Utility');

  class ArchivosController extends AppController {
    public function index($id = null){
      $this->redirect(array('action'=>'Lista'));
    }

    public function lista($id = null) {

    }
    public function cargarArchivos(){

    	$this->loadModel('Liceos');
    	$liceos = $this->Liceos->getFirstLiceo();

    	// debug($liceos);exit();
    	$nombre_liceo = str_replace(" ", "_", $liceos['Liceos']['NOMBRE_ESTABLECIMIENTO']);

       	$path =	WWW_ROOT.'files' .DS. $liceos['Liceos']['RBD'] . DS . $nombre_liceo;

    	$folder = new Folder($path, true, 0755);
    	 if (!$this->request->is('post')) return;
    	 if (!empty($this->request->data)) {
    	 	if(!empty($this->request->data['Image']['submittedfile'])){
    	 		$file = $this->request->data['Image']['submittedfile'];
    	 		$ext = substr(strtolower(strrchr($file['name'],'.')), 1);
    	 		$ext2 = substr(strtolower(strrchr($file['name'],'.')), 0);
    	 		$name = preg_replace("/\.[^.]+$/", "", $file['name']);
    	 		// $name = substr(strtolower(strrchr($file['name'],'.')), 0);

    	 		// debug($name);exit();
    	 		$arr_ext = array('jpg','jpeg','xlsx','xls','docx','png','3gp','mp4','wav','pptx');
    	 		// $this->request->data['Image']['type'];
    	 		if (in_array($ext,$arr_ext)) {
    	 			$new_file = $file['name'];
    	 			move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/'.$liceos['Liceos']['RBD'] .'/'.
    	 			$nombre_liceo .'/' .DS. $name .'_'.time().$ext2);
    	 			$this->request->data['Post']['filename'] = time().$file['name'];
    	 		}

    	 	}






    	 	debug($this->request->data['Image']['submittedfile']);exit();
    	 	
    	 	
    	 	
    	 	# code...
    	 }


    }

  }
?>