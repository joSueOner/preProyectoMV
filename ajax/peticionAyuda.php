<?php

  $salida = array('estatus' =>false,'mensaje'=>'','error'=>'','existente'=>true);
  include_once '../class/ayuda.php';


   function validarTelefonoMovil($tlfMovil)
   {
       return preg_match("/^(\(\+)([0-9]){2}(\)) (\()([0-9]){3}(\)) [0-9]{3}-[0-9]{2}-[0-9]{2}/", $tlfMovil );
   }


   function validarTelefonoFijo($tlfFijo)
   {
       return preg_match("/^(\()02([0-9]){2}(\)) [0-9]{3}-[0-9]{2}-[0-9]{2}/", $tlfFijo );
   }

if(
  (!isset($_POST['cedula'])) || ($_POST['cedula']=="") ||
  (!isset($_POST['nombres'])) || ($_POST['nombres']=="") ||
  (!isset($_POST['apellidos']))|| ($_POST['apellidos']=="") ||
  (!isset($_POST['codCarnet']))|| ($_POST['codCarnet']=="") ||
  (!isset($_POST['direccion']))|| ($_POST['direccion']=="") ||
  // (!isset($_POST['tlfFijoOperadora']))|| ($_POST['tlfFijoOperadora']=="")
  (!isset($_POST['tlfHabitacion']))|| ($_POST['tlfHabitacion']=="") ||
  (!isset($_POST['tlfCelular']))|| ($_POST['tlfCelular']=="") ||
  (!validarTelefonoMovil($_POST['tlfCelular'])) ||
  (!validarTelefonoFijo($_POST['tlfHabitacion'])) ||
  (!isset($_POST['email']))|| ($_POST['email']=="") ||
  (!isset($_POST['motivo']))|| ($_POST['motivo']=="") ||
  (!isset($_POST['montoSolicitud']))|| ($_POST['montoSolicitud']=="") ||
  (!isset($_POST['ente']))|| ($_POST['ente']=="")
){
  $salida['error']="camposVacios";
  $salida['mensaje']="No se han recivido los campos completos";
}else{
  //		(cedula,nombre,apellido,carnetPatria,correo,status,telefonoHabitacion,direccion)+(celular,motivo,montoS,montoA)+(enteAsigno,fechaRegistro)
  $cedula=($_POST['cedula']);
  $nombres=($_POST['nombres']);
  $apellidos=($_POST['apellidos']);
  $carnet=($_POST['codCarnet']);
  $direccion=($_POST['direccion']);
  $tlfHabitacion=($_POST['tlfHabitacion']);
  $tlfCelular=($_POST['tlfCelular']);
  $correo=($_POST['email']);
  $motivo=($_POST['motivo']);
  $montoS=($_POST['montoSolicitud']);
  $ente=($_POST['ente']);
  $nuevaAyuda= new Ayuda($cedula,$nombres,$apellidos,$carnet,$correo,1,$tlfHabitacion,$direccion,$tlfCelular,$motivo,$montoS,0,$ente,0);
    $rsBuscarExistente=$nuevaAyuda->buscarAyuda($cedula);
    if($rsBuscarExistente['estatusTransaccion']){
        $salida['estatus']=true;
        if($rsBuscarExistente['encontrado']){
          $salida['mensaje'].="Existen un registro de ayuda con esta cedula";
          $salida['error'].="Existe";
        }else{
          $rs = $nuevaAyuda->registrarAyuda();
          $salida['existente']=false;
          $salida['mensaje'].=$rs['mensaje'];
          $salida['error'].=$rs['error'];

        }
    }else{
      $salida['mensaje'].=$rsBuscarExistente['mensaje'];
      $salida['error'].=$rsBuscarExistente['error'];

    }
}

  echo json_encode($salida);
?>
