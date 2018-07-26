<?php
  include_once '../class/ayuda.php';
  $lista=array();
  $salida = array('estatusTransaccion' => false,
                  'mensaje'=>'',
                  'error'=>'',
                  'cnt'=>0,
                  'listado'=>$lista,
                  'html'=>'');

  $objAyudas=  new Ayuda(null,null,null,null,null,null,null,null,null,null,null,null,null,null);
  $rsp = $objAyudas->buscarTodas();
  if($rsp['estatusTransaccion']){
    for($i=0; $i<$rsp['cnt'];$i++){
      $ayudaM=  new Ayuda(null,null,null,null,null,null,null,null,null,null,null,null,null,null);
      $ayudaM=$rsp['listado'][$i];
      $paraL = array( 'n' => ($i+1),
                      'cedula'=>$ayudaM->getCedula(),
                      'nombres'=>$ayudaM->getNombres(),
                      'apellidos'=>$ayudaM->getApellidos(),
                      'montoA'=>$ayudaM->getMontoAprobado(),
                      'fechaE'=>$ayudaM->getFechaRegistro(),
                      'ente'=>$ayudaM->getEnte(),
                      'estado'=>$ayudaM->getStatus());
      array_push($lista,$paraL);
    }
  }
  $salida['estatusTransaccion']=$rsp['estatusTransaccion'];
  $salida['mensaje']=$rsp['mensaje'];
  $salida['error']=$rsp['error'];
  $salida['cnt']=$rsp['cnt'];
  $salida['listado']=$lista;


  echo json_encode($salida);

?>
