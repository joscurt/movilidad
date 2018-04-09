<?php
  class PruebaController extends AppController {
    public function index(){
      // $this->loadModel('MovDetalleArchivoRbd');
      // $administrativos = $this->MovDetalleArchivoRbd->find('all');
      // debug($administrativos);
      if ( isset($this->request->params['form']['file']) ) {
        $archivoTmp = $this->request->params['form']['file']['tmp_name'];
        $csv = $this->_extractData($archivoTmp);
        $carga = $this->_cargaCsv($csv);

        // debug($csv);
        debug($carga);

        $db = ConnectionManager::getDataSource('default');
        $qry = "CALL MOVILIDAD.PRC_MOV_CARGA_RBD()";
        $proc = $db->query($qry);

        // debug($csv);
        $this->set(array(
          'carga'=>$carga
        ));
      }
    }

    private function _cargaCsv( $csv = array() ) {
      $this->loadModel('MovDetalleArchivoRbd');
      
      $date = date('Y-m-d H:i:s');
      $correctos = 0;
      $erroneos = 0;
      $existentes = 0;
      $actualizados = array();
      $errores = array();
      
      foreach ( $csv as $data ) {
        foreach ( $data as $table => $currData ) {
          foreach ( $currData as $key => $value ) {
            if ( $key == 'RBD' ) {
              $rbd = $value;
            }
            
            $detalleArchivo = array(
              'CLAVE' => $key,
              'VALOR' => $value,
              'TABLA' => $table,
              'FECHA' => $date,
              'RBD_LICEO' => $rbd
            );

            $detalleArchivoSinFecha = array(
              'CLAVE' => $key,
              'VALOR' => $value,
              'TABLA' => $table,
              'RBD_LICEO' => $rbd
            );

            $exist = $this->MovDetalleArchivoRbd->hasAny($detalleArchivoSinFecha);

            // debug($exist);

            if ( strlen($key) <= 30 ) {
              if ( !$exist ) {
                $aActualizar = $this->MovDetalleArchivoRbd->hasAny(
                  array(
                    'CLAVE' => $key,
                    'VALOR !=' => $value,
                    'TABLA' => $table,
                    'RBD_LICEO' => $rbd
                  )
                );

                if ( $aActualizar ) {
                  $actualiza = $this->MovDetalleArchivoRbd->updateAll(
                    array(
                      'VALOR' => "'".$value."'",
                    ),
                    array(
                      'CLAVE' => $key,
                      'TABLA' => $table,
                      'RBD_LICEO' => $rbd
                    )
                  );

                  $actualizados[] = array(
                    'RBD' => $rbd,
                    'Tabla' => $table,
                    'Columna' => $key,
                    'Valor' => $value
                  );
                } else {
                  $this->MovDetalleArchivoRbd->create();
                  $carga = $this->MovDetalleArchivoRbd->save($detalleArchivo);

                  if ( $carga ) {
                    $correctos += 1;
                  } else {
                    $erroneos += 1;
                  }
                }

              } else {
                $existentes += 1;
              }
            } else {
              $errores[] = array(
                'Tipo' => 'Nombre de la columna es mayor a 30',
                'Columna' => $key,
                'RBD' => $rbd
              );
            }
          }
        }
      }

      $infoCarga = array(
        'Cargados' => $correctos,
        'Erroneos' => $erroneos,
        'Existentes' => $existentes,
        'Actualizados' => $actualizados,
        'Errores' => $errores
      );

      return $infoCarga;
    }

    function removeAccents($str) {
      $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή', '`', '´', '“');
      $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η', '', '', '');
      return str_replace($a, $b, $str);
    }

    private function _extractData($filePath){
      $anoActual = date("Y");
      
      ini_set('max_execution_time', 0);
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
                  $liceos['RBD'] = preg_replace("/[^0-9,.]/", "", $data[$key]);
                  $cursos['RBD'] = preg_replace("/[^0-9,.]/", "", $data[$key]);
                  $especialidades['RBD'] = preg_replace("/[^0-9,.]/", "", $data[$key]);
                  $matriculas['RBD'] = preg_replace("/[^0-9,.]/", "", $data[$key]);
                  $establecimientos['RBD'] = preg_replace("/[^0-9,.]/", "", $data[$key]);
                  $carreras['RBD'] = preg_replace("/[^0-9,.]/", "", $data[$key]);
                  $convenios['RBD'] = preg_replace("/[^0-9,.]/", "", $data[$key]);

                  // Año
                  $liceos['ANIO'] = $anoActual;
                  $cursos['ANIO'] = $anoActual;
                  $especialidades['ANIO'] = $anoActual;
                  $matriculas['ANIO'] = $anoActual;
                  $establecimientos['ANIO'] = $anoActual;
                  $carreras['ANIO'] = $anoActual;
                  $convenios['ANIO'] = $anoActual;
                }
                $cabeceraParseada = '';
                $cabeceraParseada = trim(strtoupper($this->removeAccents(str_replace(" ", "_", $tableName[1]))));
                if ( is_numeric(substr($cabeceraParseada, 0, 1)) ) {
                  $cabeceraParseada = 'N_'.trim(strtoupper($this->removeAccents(str_replace(" ", "_", $tableName[1]))));
                } 

                // Liceos
                if ( $tableName[0] == "LICEO" ) {
                  // $liceos[$cabeceraParseada] = $this->removeAccents(utf8_encode($data[$key]));
                  $liceos[$cabeceraParseada] = preg_replace("/[^a-zA-Z0-9,-.\s]/", "", $this->removeAccents($data[$key])); 
                  // $liceos['TEST'] =  'prueba'; // Forzar false en columnas existentes en tabla bd
                }

                // Cursos
                if ( $tableName[0] == "CURSOS" ) {
                  if ( $this->removeAccents($data[$key]) != '' ) {
                    $cursos[$cabeceraParseada] =  $this->removeAccents($data[$key]);
                  } 
                }

                // Especialidades
                if ( $tableName[0] == "ESPECIALIDADES" ) {
                  if ( $this->removeAccents($data[$key]) != '' ) {
                    $especialidades[$cabeceraParseada] =  $this->removeAccents($data[$key]);
                  }
                }

                // Matriculas
                if ( $tableName[0] == "MATRICULAS" ) {
                  if ( $this->removeAccents($data[$key]) != '' ) {
                    $matriculas[$cabeceraParseada] =  $this->removeAccents($data[$key]);
                  }
                }

                // Establecimientos
                if ( $tableName[0] == "SEDE" ) {
                  if ( $this->removeAccents($data[$key]) != '' ) {
                    $establecimientos[$cabeceraParseada] =  $this->removeAccents($data[$key]);
                  }
                }

                // Carreras
                if ( $tableName[0] == "CARRERA" ) {
                  if ( $this->removeAccents($data[$key]) != '' ) {
                    $carreras[$cabeceraParseada] =  $this->removeAccents($data[$key]);
                  } 
                }

                // Convenios
                if ( $tableName[0] == "CONVENIOS" ) {
                  if ( $this->removeAccents($data[$key]) != '' ) {
                    $convenios[$cabeceraParseada] =  $this->removeAccents($data[$key]);
                  }
                }
              }
            }
            $todo = array(
              'LICEOS' => $liceos,
              'CURSOS' => $cursos,
              'ESPECIALIDADES' => $especialidades,
              'MATRICULAS' => $matriculas,
              'SEDES' => $establecimientos,
              'CARRERAS' => $carreras,
              'CONVENIOS' => $convenios
            );
            array_push($list, $todo);
          }
        }
        fclose($fileContents);
        return $list;
      }
    }

  }
?>