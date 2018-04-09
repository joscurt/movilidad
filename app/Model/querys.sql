SELECT Convenio.ID_CONVENIO, Convenio.RBD_CONVENIO, Convenio.ESPECIALIDAD, Convenio.FECHA_INICIO, 
Convenio.FECHA_FIN, Convenio.OBSERVACIONES_CONVENIO, Convenio.USUARIO, Convenio.MOV_LICEOS_RBD 
FROM MOV_CONVENIO Convenio INNER JOIN MOV_LICEOS Liceos ON (Liceos.RBD = Convenio.MOV_LICEOS_RBD) 
WHERE 1 = 1;
Convenio.ID_CONVENIO, Convenio.RBD_CONVENIO, Convenio.ESPECIALIDAD, Convenio.FECHA_INICIO, 
Convenio.FECHA_FIN, Convenio.OBSERVACIONES_CONVENIO, Convenio.USUARIO, 
Convenio.MOV_LICEOS_RBD FROM MOV_CONVENIO Convenio INNER JOIN MOV_LICEOS Liceos 
ON (Liceos.RBD = Convenio.MOV_LICEOS_RBD)  WHERE 1 = 1   ',
	'params' => array(),
	'affected' => (int) 4,
	'numRows' => (int) 4,
	'took' => (float) 1

	'SELECT Usuarios.ID_USUARIO, Usuarios.RUT, Usuarios.USERNAME, Usuarios.APELLIDO, Usuarios.ROL_USUARIO,
	 Usuarios.EMAIL, Usuarios.PASS_USUARIO_LICEO, Usuarios.MOV_LICEOS_RBD, Usuarios.NOMBRE 
	 FROM MOV_USUARIOS Usuarios   WHERE 1 = 1   


SELECT Convenio.ID_CONVENIO, Convenio.RBD_CONVENIO, Convenio.ESPECIALIDAD, Convenio.FECHA_INICIO,
 Convenio.FECHA_FIN, Convenio.OBSERVACIONES_CONVENIO, Convenio.USUARIO, Convenio.MOV_LICEOS_RBD, 
 Alumnos.ID_ALUMNO, Alumnos.RUT_ALUMNO, Alumnos.NOM_ALUMNO, Alumnos.APELLIDO_ALUMNO, Alumnos.EMAIL_ALUMNO,
 Alumnos.ANIO_EGRESO, Alumnos.ESTADO_CONVALIDACION, Alumnos.MOV_LICEOS_RBD 
 FROM MOV_CONVENIO Convenio LEFT JOIN MOV_ALUMNO Alumnos ON (Alumnos.MOV_LICEOS_RBD = Convenio.MOV_LICEOS_RBD)
 WHERE Convenio.MOV_LICEOS_RBD = 1347 


