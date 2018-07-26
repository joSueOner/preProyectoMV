<?php
	require 'cn.php';
	/**
	* 	Esta es la clase que contiene SOLO LOS DATOS Y LOS METODS del Cliente
	*/
  setlocale(LC_TIME,'es_VE', 'es_VE.utf8', 'es_VE.utf8');
  date_default_timezone_set('America/Caracas');

	class Ayuda {
		var $nombres;
		var $cedula;
		var $estatus;
		var $apellidos;
		var $correo;
    var $codigoCarnet;


		var $telefonoHabitacion;
		var $direccionHabitacion;

		var $telefonoCelular;
		var $motivoSolicitud;

		var $montoSolicitud;
    var $montoAprobado;
		var $enteAsigno;
    var $fechaRegistro;

		/*FUNCIONES DE LAS PROPIEDADES-*/
//		(cedula,nombre,apellido,carnetPatria,correo,status,telefonoHabitacion,direccion)+(celular,motivo,montoS,montoA)+(enteAsigno,fechaRegistro)
		//Construcctor
			function __construct($c,$n,$a,$cp,$cc,$s,$th,$dh,$tc,$ms,$mts,$mta,$ent,$fr){
				$this->cedula=$c;
				$this->nombres=$n;
				$this->apellidos=$a;
        $this->codigoCarnet=$cp;
				$this->correo=$cc;

				$this->estatus=$s;

				$this->telefonoHabitacion=$th;

				$this->direccionHabitacion=$dh;

				$this->telefonoCelular=$tc;
				$this->motivoSolicitud=$ms;

        $this->montoSolicitud=$mts;
        $this->montoAprobado=$mta;

				$this->enteAsigno=$ent;
        $this->fechaRegistro=$fr;

			}

		public function setNombres($nom)
		{
			$this->nombres=$nom;
		}

		public function setApellidos($app)
		{
			$this->apellidos=$app;
		}

		public function setCedula($ced)
		{
			$this->cedula=$ced;
		}
    public function setCodigoCarnet($cp)
		{
			$this->codigoCarnet=$cp;
		}

		public function setTelefonoHabitacion($tel)
		{
			$this->telefonoHabitacion=$tel;
		}

		public function setDireccion($dir)
		{
			$this->direccionHabitacion=$dir;
		}

		public function setStatus($stat)
		{
			$this->estatus=$stat;
		}

		public function setCorreo($cc)
		{
			$this->correo=$cc;
		}

		public function setTelefonoCelular($tc)
		{
			$this->telefonoCelular=$tc;
		}
		public function setMotivo($mt)
		{
			$this->motivoSolicitud=$mt;
		}

		public function setMontoSolicitud($ms)
		{
			$this->montoSolicitud=$ms;
		}
    public function setMontoAprobado($ma)
		{
			$this->montoAprobado=$ma;
		}


		public function setEnte($e)
		{
			$this->enteAsigno=$e;
		}
    public function setFechaRegistro($fe)
		{
			$this->fechaRegistro=$fe;
		}

/*
    GETTERS

	*/
		public function getNombres()
		{
			return $this->nombres;
		}

		public function getCedula()
		{
			return $this->cedula;
		}

    public function getCodigoCarnet()
		{
			return $this->codigoCarnet;
		}


		public function getApellidos()
		{
			return $this->apellidos;
		}

		public function getTelefonoHabitacion()
		{
			return $this->telefonoHabitacion;
		}

		public function getDireccion()
		{
			return $this->direccionHabitacion;
		}

		public function getStatus()
		{
			return $this->estatus;
		}

		public function getCorreo()
		{
			return $this->correo;
		}
		public function getTelefonoCelular()
		{
			return $this->telefonoCelular;
		}
		public function getMotivo()
		{
			return $this->motivoSolicitud;
		}

		public function getMontoSolicitud()
		{
			return $this->montoSolicitud;
		}

    public function getMontoAprobado()
		{
			return $this->montoAprobado;
		}

		public function getEnte()
		{
			return $this->enteAsigno;
		}

    public function getFechaRegistro()
		{
			return $this->fechaRegistro;
		}


    /*AQUI COMIENZAN LOS MNETODOS
    --------------CRUD----------------
    */
	function registrarAyuda(){
		global $cn;
    /*--------------------------
	   *-----------------------*/
     $salida = array('estatusTransaccion' => false,
     'mensaje'=>'',
     'error'=>''
      );
     $this->setFechaRegistro(date('Y-m-d H:i:s'));
     $sentencia="INSERT INTO `ayudas`(`cedula`, `nombres`, `apellidos`, `carnetPatria`, `direccionHabitacion`, `telefonoHabitacion`, `telefonoCelular`, `correo`, `motivo`, `montoSolicitud`, `montoAprobado`, `fechaAprobado`, `ente_idEnte`, `fechaRegistroPeticion`, `estadoAyuda`)
                      VALUES ('".$this->getCedula()."','".$this->getNombres()."','".$this->getApellidos()."','".$this->getCodigoCarnet()."','".$this->getDireccion()."','".$this->getTelefonoHabitacion()."','".$this->getTelefonoCelular()."','".$this->getCorreo()."','".$this->getMotivo()."',".$this->getMontoSolicitud().",0,'0000/00/00 00:00',".$this->getEnte().",'".$this->getFechaRegistro()."',0)";

     $resultSet=mysqli_query($cn,$sentencia);
     if ($resultSet) {
    	  $salida['estatusTransaccion']=true;
  	}else {
    		$salida['mensaje'].="No inserto : En clase Ayuda";
    		$salida['error'].=mysqli_error($cn);
  	}
  	return $salida;


  }//DEL LA FUNCION registrarAyuda()



  public function buscarAyuda($ced){
		global $cn;
		$salida = array('estatusTransaccion' => false,
										'mensaje'=>'',
									'error'=>'',
									'encontrado'=>false,
								  'objetoEncontrado'=>null);

		$sentencia="SELECT * FROM `ayudas` WHERE `cedula`='".$ced."' ";
		$resultSet=mysqli_query($cn,$sentencia);

		if ($resultSet) {
			$numrow=mysqli_num_rows($resultSet);
			$salida['estatusTransaccion']=true;
			if($numrow>0){
				  $row=mysqli_fetch_assoc($resultSet);
		      $cedula=($row['cedula']);
		      $nombres=($row['nombres']);
		      $apellidos=($row['apellidos']);
		      $carnet=($row['carnetPatria']);
		      $direccion=($row['direccionHabitacion']);
		      $tlfHabitacion=($row['telefonoHabitacion']);
		      $tlfCelular=($row['telefonoCelular']);
		      $correo=($row['correo']);
		      $motivo=($row['motivo']);
		      $montoS=($row['montoSolicitud']);
		      $montoA=($row['montoAprobado']);
		      $fechaA=($row['fechaAprobado']);
		      $ente=($row['ente']);
		      $fechaP=($row['fechaRegistroPeticion']);
		      $estado=($row['estadoAyuda']);
		      $nuevaAyuda= new Ayuda($cedula,$nombres,$apellidos,$carnet,$correo,$estado,$tlfHabitacion,$direccion,$tlfCelular,$motivo,$montoS,$montoA,$ente,$fechaP);
					$salida['encontrado']=true;
		      $salida['objetoEncontrado']=$nuevaAyuda;
		   }

		}else {
		  $salida['mensaje'].="No Busca : En clase Ayuda";
			$salida['error'].=mysqli_error($cn);
		}
		return $salida;

  }


	public function buscarTodas(){
		global $cn;
		$listadoA=array();
		$salida= array('estatusTransaccion'=>false,
										'mensaje'=>'',
										'error'=>'',
										'cnt'=>0,
										'listado'=>$listadoA);

	$sentencia="SELECT * FROM `ayudas` INNER JOIN `ente` ON (`ente`.`idEnte`=`ayudas`.`ente_idEnte`) GROUP BY `ayudas`.`id`";
	$sentencia="SELECT *,`ente`.`ente` FROM `ayudas` INNER JOIN `ente` ON (`ente`.`idEnte`=`ayudas`.`ente_idEnte`) GROUP BY `ayudas`.`id`";
	$sentencia="SELECT * FROM `ayudas` ";


	$resultSet=mysqli_query($cn,$sentencia);
	if($resultSet){
		$salida['estatusTransaccion']=true;
		$numrow=mysqli_num_rows($resultSet);
		$salida['cnt']=$numrow;
		while ($row=mysqli_fetch_array($resultSet)){
			$cedula=($row['cedula']);
			$nombres=($row['nombres']);
			$apellidos=($row['apellidos']);
			$carnet=($row['carnetPatria']);
			$direccion=($row['direccionHabitacion']);
			$tlfHabitacion=($row['telefonoHabitacion']);
			$tlfCelular=($row['telefonoCelular']);
			$correo=($row['correo']);
			$motivo=($row['motivo']);
			$montoS=($row['montoSolicitud']);
			$montoA=($row['montoAprobado']);
			$fechaA=($row['fechaAprobado']);
			$ente=($row['ente_idEnte']);
			$fechaP=($row['fechaRegistroPeticion']);
			$estado=($row['estadoAyuda']);
			$aiuda= new Ayuda($cedula,$nombres,$apellidos,$carnet,$correo,$estado,$tlfHabitacion,$direccion,$tlfCelular,$motivo,$montoS,$montoA,$ente,$fechaP);
			array_push($listadoA,$aiuda);
		}
		$salida['listado']=$listadoA;
	}else{
		$salida['mensaje'].="No BuscaListado : En clase Ayuda";
		$salida['error'].=mysqli_error($cn);
	}

	return $salida;
}


	/*----------------------------------
		FIN DE CRUD
	---------------------------------*/

	}//De la clase Usuario
?>
