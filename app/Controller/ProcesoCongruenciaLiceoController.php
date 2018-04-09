<?php
header('Content-Type: text/html; charset=UTF-8');

  class ProcesoCongruenciaLiceoController extends AppController {
    public function index(){
      $this->redirect(array('action'=>'Estados'));
    }

    public function carga($id_congruencia) {

      $this->LoadModel('Congruencia');
      $congruencia = $this->Congruencia->getCongruenciaById($id_congruencia);

     $this->set(array(
        'congruencia' => $congruencia
     ));
    }

    public function cargaMapaLiceo($id_congruencia){
      // debug($id_congruencia);exit();
      if ( isset($this->request->params['form']['file']) ) {
        $archivoTmp = $this->request->params['form']['file']['tmp_name'];
        $csv = $this->_extractData($archivoTmp,$id_congruencia);
      }
    }
 private function _extractData($filePath,$id_congruencia){
      $list = array();
      $row = 0;
      $cabecera = array();

      $this->LoadModel('Congruencia');
      $congruencia = $this->Congruencia->getCongruenciaById($id_congruencia);

       // debug($congruencia);exit();

      if ( ($fileContents = fopen($filePath, 'r')) ) {

        while (($data = fgetcsv($fileContents, 0, ';')) !==FALSE) {

          $data = array_map("utf8_encode", $data);  
          $num = count($data);
          $row++;
          $error = 0;
          // $data = utf8_encode($data);
         
          if ( $row == 3) {
            $header[] = $data;
          }

            if ($row > 3) {

              $this->loadModel('MapaLiceo');
              $id_asignatura = $this->MapaLiceo->getMapaLiceoByIdasignatura($data[0],$congruencia['Congruencia']['MOV_LICEOS_RBD'],$id_congruencia);
               // debug($data[0]);
               // debug($id_asignatura);
              if(empty($id_asignatura)){
                 // $a = "prueba";
                 // debug($a);
                // var_dump($id_asignatura);exit();
              
                $new_mapa_liceo = array(
                  // 'ID_MAPA_LICEO' => hexdec(uniqid()),
                  'ID_MAPA_CONGRUENCIA' => $congruencia['MapaCongruencia']['ID_MAPA_C'],
                  'RBD_LICEO' => $congruencia['Congruencia']['MOV_LICEOS_RBD'],
                  'ID_ASIGNATURA_LICEO' => $data[0],
                  'NOM_ASIG_LICEO' => $data[1],
                  'NUM_HORAS_PEDAGOGICAS' => $data[2],
                  'OBJ_APRENDIZAJE' => $data[3],
                  'APRENDIZAJE_ESPERADO' => $data[4],
                  'CONTENIDOS' => $data[5],
                  'CRITERIOS_EVALU' => $data[6],
                  'DESC_METO_ACTIVIDADES_A' => $data[7],
                  'TIPOS_EVALUACION' => $data[8],
                  'IND_LOGROS' => $data[9],
                  'DESC_METODOLOGICA_EVAL' => $data[10],
                  'DESC_AMBIENTE' => $data[12],
                  'NOM_AMBIENTE' => $data[11],
                  'DESC_AMBIENTE_2' => $data[12],
                  'MOV_LICEOS_RBD' => $congruencia['Congruencia']['MOV_LICEOS_RBD'],
                  'MOV_CONGRUENCIA_ID_CONGRUENCIA' => $id_congruencia

                );
                $this->MapaLiceo->create(true);
                if(!$this->MapaLiceo->save($new_mapa_liceo)){
                  $error++;
                 
                };

                  
                }else{
                  //UPDATE si es que existen datos en ese RBD y esos ID de MAPA LICEO
                   // debug($id_asignatura);exit();
                  $up_mapa_liceo = array(
                  'ID_MAPA_LICEO' => $id_asignatura['MapaLiceo']['ID_MAPA_LICEO'],
                  'ID_MAPA_CONGRUENCIA' => $id_asignatura['MapaLiceo']['ID_MAPA_CONGRUENCIA'],
                  'NOM_ASIG_LICEO' => $data[1],
                  'NUM_HORAS_PEDAGOGICAS' => $data[2],
                  'OBJ_APRENDIZAJE' => $data[3],
                  'APRENDIZAJE_ESPERADO' => $data[4],
                  'CONTENIDOS' => $data[5],
                  'CRITERIOS_EVALU' => $data[6],
                  'DESC_METO_ACTIVIDADES_A' => $data[7],
                  'TIPOS_EVALUACION' => $data[8],
                  'IND_LOGROS' => $data[9],
                  'DESC_METODOLOGICA_EVAL' => $data[10],
                  'DESC_AMBIENTE' => $data[12],
                  'NOM_AMBIENTE' => $data[11],
                  'DESC_AMBIENTE_2' => $data[12]
                  );
                  if(!$this->MapaLiceo->save($up_mapa_liceo)){
                  $error++;
                              };
                }
              }
            }
        if ($error > 0) {
          $this->Session->setFlash('Ha ocurrido un error con la Carga','Flash/mensaje-info');
        }else{ 
          $this->LoadModel('MapaCongruencia');

          $resultado = $this->MapaCongruencia->getMapaCongruenciaBySrb($congruencia['Congruencia']['MOV_LICEOS_RBD']);
          if ($resultado['MapaCongruencia']['ESTADO'] == 2) {
            # code...
          $mapa_congruencia = array(
            'ID_MAPA_C'=> $resultado['MapaCongruencia']['ID_MAPA_C'],
            'ESTADO' => 3,
          );
         }
         if($resultado['MapaCongruencia']['ESTADO'] == 1){
          $mapa_congruencia = array(
            'ID_MAPA_C'=> $resultado['MapaCongruencia']['ID_MAPA_C'],
            'ESTADO' => 4,
          );
         }
         if(!empty($mapa_congruencia)){
          if (!$this->MapaCongruencia->save($mapa_congruencia)) {
            $this->Session->setFlash('Ha ocurrido un error con la Carga','Flash/mensaje-info');
          };
        }
      }
    }
      $this->Session->setFlash('Carga Éxitosa','Flash/mensaje-info');
      $this->redirect(array('action'=>'estados'));
    }

    public function estados() {
      $user = $this->Session->read('User');

      $this->LoadModel('Congruencia');
      $rbd = $user['Usuarios']['MOV_LICEOS_RBD'];
      $congruencias = $this->Congruencia->getCongruenciaBySrb($rbd);

     // debug($congruencias);exit();

      $this->set(array(
          'congruencias' =>  $congruencias

      ));

    }

    public function adjuntarArchivos() {
      
    }


  }
?>