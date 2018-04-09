<?php
  class EstimacionDeCongruenciaController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index(){

    }

    function removeAccents($str) {
      $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή', '`', '´', '“');
      $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η', '', '', '');
      return str_replace($a, $b, $str);
    }

    private function _extractData($filePath){
      $list = array();
      $row = 0;
      $cabecera = array();
      
      // ini_set('memory_limit', '-1');
      if ( ($fileContents = fopen($filePath, 'r')) ) {
        while (($data = fgetcsv($fileContents, 0, ';'))) {
          $num = count($data);
          $row++;

          if ( $row == 2) {
            $cabecera[] = $data;
          }

          if ($row > 2) {
            $currData = array();
            // Liceos
            $liceos = array();
            $cursos = array();
            $especialidades = array();
            // Duoc
            $matriculas = array();
            $establecimientos = array();
            $carreras = array();
            $convenios = array();

            foreach($cabecera as $cabecera2) {
              foreach($cabecera2 as $key => $cabecera3) {
                if ( $cabecera3 != "RBD" ) {
                  $tableName = explode("__", $cabecera3);
                } else {
                  $tableName = "RBD";
                  $liceos['RBD'] = preg_replace("/[^0-9,.]/", "", utf8_encode($data[$key]));
                  $cursos['RBD'] = preg_replace("/[^0-9,.]/", "", utf8_encode($data[$key]));
                  $especialidades['RBD'] = preg_replace("/[^0-9,.]/", "", utf8_encode($data[$key]));
                  $matriculas['RBD'] = preg_replace("/[^0-9,.]/", "", utf8_encode($data[$key]));
                }
                $cabeceraParseada = '';
                $cabeceraParseada = trim(strtoupper($this->removeAccents(str_replace(" ", "_", utf8_encode($tableName[1])))));
                if ( is_numeric(substr($cabeceraParseada, 0, 1)) ) {
                  $cabeceraParseada = 'N_'.trim(strtoupper($this->removeAccents(str_replace(" ", "_", utf8_encode($tableName[1])))));
                } 

                // Liceos
                if ( $tableName[0] == "LICEOS" ) {
                  // $liceos[$cabeceraParseada] = $this->removeAccents(utf8_encode($data[$key]));
                  $liceos[$cabeceraParseada] = preg_replace("/[^a-zA-Z0-9,-.\s]/", "", $this->removeAccents(utf8_encode($data[$key]))); 
                  // $liceos['TEST'] =  'prueba'; // Forzar false en columnas existentes en tabla bd
                }

                // Cursos
                if ( $tableName[0] == "CURSOS" ) {
                  if ( $this->removeAccents(utf8_encode($data[$key])) == '' ) {
                    $cursos[$cabeceraParseada] =  $this->removeAccents(utf8_encode('0'));
                  } else {
                    $cursos[$cabeceraParseada] =  $this->removeAccents(utf8_encode($data[$key]));
                  }
                }

                // Especialidades
                if ( $tableName[0] == "ESPECIALIDADES" ) {
                  if ( $this->removeAccents(utf8_encode($data[$key])) == '' ) {
                    $especialidades[$cabeceraParseada] =  $this->removeAccents(utf8_encode('0'));
                  } else {
                    $especialidades[$cabeceraParseada] =  $this->removeAccents(utf8_encode($data[$key]));
                  }
                }

                // Matriculas
                if ( $tableName[0] == "MATRICULAS" ) {
                  if ( $this->removeAccents(utf8_encode($data[$key])) == '' ) {
                    $matriculas[$cabeceraParseada] =  $this->removeAccents(utf8_encode('0'));
                  } else {
                    $matriculas[$cabeceraParseada] =  $this->removeAccents(utf8_encode($data[$key]));
                  }
                }
              }
            }
            $todo = array(
              'LICEOS' => $liceos,
              'CURSOS' => $cursos,
              'ESPECIALIDADES' => $especialidades,
              'MATRICULAS' => $matriculas,
              'ESTABLECIMIENTOS' => $establecimientos
            );
            array_push($list, $todo);
          }
        }
        fclose($fileContents);
        return $list;
      }
    }

    private function _getColumns($table = null) {
      $this->loadModel('UserTabColumns');
      $userTabColumns = $this->UserTabColumns->getColumnsByTable($table);
      $columns = array();
      foreach($userTabColumns as $column) {
        $columns[] = $column['UserTabColumns']['COLUMN_NAME'];
      }
      return $columns;
    }

    private function _columnasInexistentes($csv = array(), $table) {
      $columnasEnTabla = $this->_getColumns($table);
      $csvData = $csv;
      $columnasEnCsv = array();

      foreach($csvData[$table] as $key => $data) {
        array_push($columnasEnCsv, $key);
      }

      $camposDiferentes = array_diff($columnasEnCsv, $columnasEnTabla);
      return $camposDiferentes;
    }

    private function _agregarCamposEnTabla($table, $columnasInexistentes = array(), $csv = array()) {
      $this->loadModel('Custom');
      foreach( $columnasInexistentes as $column ) {
        $result = $this->Custom->agregarCampo($table, $column);
      }
      $this->_cargarDatosPorTabla($table, $csv);  // Descomentar
    }
    
    private function _msg( $errors, $table ) {
      $table = ucfirst(strtolower($table));
      if ($errors == 0) {
        $this->Session->setFlash($table.' cargado a la base de datos <b>exitosamente.</b>','Flash/mensaje-exito');
      } else {
        $this->Session->setFlash('Hubo un <b>Error</b> en la carga de '.$table,'Flash/mensaje-error');
      }
    }

    private function _msgUpdate( $errors ) {
      if ($errors == 0) {
        $this->Session->setFlash($table.' ha sido modificado <b>exitosamente.</b>','Flash/mensaje-exito');
      } else {
        $this->Session->setFlash('Hubo un <b>Error</b> al modificar '.$table,'Flash/mensaje-error');
      }
    }

    private function _cargarDatosPorTabla( $table = null, $csv = array() ) {
      $columnasInexistentes = $this->_columnasInexistentes($csv, $table);
      $errors = 0;

      if ( count($columnasInexistentes) == 0 ) {
        // Insertar en tabla
        $this->loadModel('Custom');
        $result = $this->Custom->cargarDatosPorTabla($table, $csv[$table]);
        if( !$result ) {
          $errors++;
          $errorLog[$table] = $csv[$table];
          $errorLog['TIPO_ERROR'] = 'Error al agregar';
          $this->_errorLog($errorLog);
        } else {
          $logCarga[$table] = $csv[$table];
          $logCarga['LOG_CARGA'] = 'Carga exitosa';
          $this->_logCarga($logCarga);
        }
        // $this->_logCarga($datosCargados);
        $this->_msg($errors, $table);
      } else {
        $this->_agregarCamposEnTabla($table, $columnasInexistentes, $csv);
      }
    }

    private function _modificarDatosPorTabla( $table = null, $csv = array() ){
      $columnasInexistentes = $this->_columnasInexistentes($csv, $table);
      $errors = 0;

      if ( count($columnasInexistentes) == 0 ) {
        // Update en tabla
        $this->loadModel('Custom');
        $result = $this->Custom->modificarDatosPorTabla($table, $csv[$table]);
        if( !$result ) {
          $errors++;
          $errorLog = $csv[$table];
          $errorLog['TIPO_ERROR'] = 'Error al modificar';
          $this->_errorLog($errorLog);
        } else {
          $logCarga[$table] = $csv[$table];
          $logCarga['LOG_CARGA'] = 'Modificacion exitosa';
          $this->_logCarga($logCarga);
        }
        // $this->_msgUpdate($errors, $table);
        $arrErrors = array(
          $table => $errors
        );
        return $arrErrors;
      } else {
        $this->_agregarCamposEnTabla($table, $columnasInexistentes, $csv);
      }
    }

    function unique_multidim_array($array, $key) { 
      $temp_array = array(); 
      $i = 0; 
      $key_array = array(); 
      
      foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i] = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
      }
      return $temp_array; 
    } 

    private function _validarCarga( $csv = array() ) {
      $arrExistentes = array();
      $arrPorCrear = array();
      $tables = array_keys($csv[0]);

      $this->loadModel('Custom');
      $i = 0;
      $porCrear = array();
      $existentes = array();

      foreach ( $csv as $key => $csv ) {
        foreach ( $csv as $key => $csv ) {
          if ( isset($csv['RBD']) ) {
            $existeRbd = $this->Custom->existeRbd($tables[$i], $csv['RBD']);
          }
          
          if ( $existeRbd ) {
            if ( $csv ) {
              $existentes[$key] = $csv;
            }
          } else {
            if ( $csv ) {
              $porCrear[$key] = $csv;
            }
          }
          $i++;
          if ( $i == count($tables) ) {
            $i = 0;
          }
        }
        if ( $porCrear ) {
          array_push($arrPorCrear, $porCrear);
        }
        if ( $existentes ) {
          array_push($arrExistentes, $existentes);
        }
      }

      if ( isset($arrPorCrear[0]) ) {
        $columnn = array_keys($arrPorCrear[0]);
        foreach ( $columnn as $columnn ) {
          $arrPorCrear = $this->unique_multidim_array($arrPorCrear, $columnn);
        }
      }

      if ( isset ( $existentes[0] ) ) {
        $columnn = array_keys($existentes[0]);
        foreach ( $columnn as $columnn ) {
          $existentes = $this->unique_multidim_array($existentes, $columnn);
        }
      }

      // debug($arrExistentes);

      // Insert
      if ( count($arrPorCrear) > 0 ) {
        foreach ( $arrPorCrear as $i => $data ) {
          foreach ( $data as $key => $value ) {
            $this->_cargarDatosPorTabla($key, $data);
          }
        }
      }

      // Update
      if ( count($arrExistentes) > 0 ) {
        $log = array();
        foreach ( $arrExistentes as $i => $data ) {
          foreach ( $data as $key => $value ) {
            $errors = $this->_modificarDatosPorTabla($key, $data);
            $log[] = $errors;
          }
        }
      }
    }

    private function _errorLog( $data = array() ) {
      // $this->Session->delete('errors.errorLog');

      if ($this->Session->check('log.errors')) {
        $this->Session->write('log.errors', am(
          $this->Session->read('log.errors'),
          array($data)
        ));
      } else {
        $this->Session->write('log.errors', array($data));
      }
    }

    private function _logCarga( $data ) {
      // $this->Session->delete('errors.errorLog');

      if ($this->Session->check('log.carga')) {
        $this->Session->write('log.carga', am(
          $this->Session->read('log.carga'),
          array($data)
        ));
      } else {
        $this->Session->write('log.carga', array($data));
      }
    }

    public function procesoCongruencia() {
      $user = $this->Session->read('User');

      // debug($user);exit();

      $this->LoadModel('Congruencia');
      $rbd = $user['Usuarios']['MOV_LICEOS_RBD'];
      $congruencias = $this->Congruencia->getCongruencia();

      // debug($congruencias);exit();

      $this->set(array(
          'congruencias' =>  $congruencias

      ));


    }

    public function crearProcesoCongruencia() {

    }

    public function mapaTransferencia() {

    }

    public function mapas() {
      
    }

    public function mapaTransferenciaPreliminar() {
      
    }

    public function cargaMapaAcademico() {

    }

    public function asignacionCongruencia() {

    }

    public function carreras() {

    }

    public function congruencia() {
      
    }

    public function asignaturas() {

    }

    public function asignarDocente() {

    }

    public function ingresarCarrera() {

    }

    public function relacionarCarreras() {
      
    }

    public function resultadoCongruencia() {
      
    }

    public function asignaturasLiceo() {
      
    }

    public function caracter() {
      
    }

    public function examinacion() {
      
    }

    public function unidadDeCompetencia() {
      
    }

    public function asignaturaLiceo() {
      
    }

    public function validacionMapaTransferencia() {
      
    }

    public function prueba() {
      // debug($this->request->params['form']['file']);
      $this->Session->delete('log.errors');
      $this->Session->delete('log.carga');
      if ( isset($this->request->params['form']['file']) ) {
        $csv = $this->_extractData($this->request->params['form']['file']['tmp_name']);
        $this->_validarCarga($csv);
        $errorLog = $this->Session->read('log.errors');
        $logCarga = $this->Session->read('log.carga');
        // echo "Log error";
        // debug($errorLog);
        // echo "Log carga";
        $cont = 0;

        foreach ( $logCarga as $data) {
          foreach ( $data as $key => $value ){
            if ( $key == 'LICEOS') {
              $cont++;
            }
          }
        }
        // debug($logCarga);
        $this->set(array(
          'errorLog' => $errorLog
        ));
      }
    }

  }
?>