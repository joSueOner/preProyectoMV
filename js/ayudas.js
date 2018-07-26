$(document).on("ready", function() {
//    verModal();
    $('[data-mask]').inputmask();

    $('#btnCerra').on('click',function(a){
      a.preventDefault();
      closeModal();
    })


  $('#frmAyuda').on('submit',function(e){
    e.preventDefault();
    var datosAyuda = $(this).serialize();
    $.ajax({
        url:'ajax/peticionAyuda.php',
        type: 'POST',
        dataType: 'JSON',
        data: datosAyuda,
        beforeSend: function(e){
          document.getElementById('informacion').innerHTML='<p>Enviando datos...</p>';
        },
        success:function(rsp){
          document.getElementById('informacion').innerHTML='';
          console.log(rsp);
          if(rsp.estatus){
            if(!rsp.existente){
              if(rsp.error==""){
                // AQUI SON LAS ACCIONES POR SUCCESS
                var p="<p class='paragrafoModal'>Peticion registrada exitosamente</p>";
                p+="<p class='paragrafoModal'>Mensaje mensaje mensaje mensajeMensaje mensaje mensaje mensajeMensaje mensaje mensaje mensajeMensaje mensaje mensaje mensajeMensaje mensaje mensaje mensaje</p>";
                mensajeModal("Proceso exitoso",p,"Peticion exitosa");
                $('#frmAyuda')[0].reset()
              }else{
                // AQUI SON LAS ACCIONES POR "Error en ejecucioon de procedimientos en back-end " al registrar peticion
                console.log(rsp.error);
                console.log(rsp.mensaje);
                var p="<p class='paragrafoModal'>En estos momentos no podemos procesar su solicitud</p>";
                p+="<p class='paragrafoModal'>Intente mas tarde</p>";
                mensajeModal("Error",p,"Disculpe las molestias");
              }
            }else{
              console.log(rsp.error);
              console.log(rsp.mensaje);
              var p="<p class='paragrafoModal'>Usted ya ha solicitado una ayuda</p>";
              p+="<p class='paragrafoModal'></p>";
              mensajeModal("Atencion",p,"Peticion negada");

            }

          }else{
              if(rsp.error=="camposVacios"){
                // AQUI SON LAS ACCIONES POR "Campos vacios" o INCOMPLETOS
                document.getElementById('informacion').innerHTML='<p class="text-danger">Debes completar todos los datos</p>';



              }else{
                // AQUI SON LAS ACCIONES POR "estatus FALSE"
                console.log(rsp.error);
                console.log(rsp.mensaje);
                var p="<p class='paragrafoModal'>En estos momentos no podemos procesar su solicitud</p>";
                p+="<p class='paragrafoModal'>Intente mas tarde</p>";
                mensajeModal("Error",p,"Disculpe las molestias");
              }
          }

        },
        error:function(err,x){
          document.getElementById('informacion').innerHTML='';
          console.log(err);
          console.log(x);
          var p="<p class='paragrafoModal'>En estos momentos no podemos procesar su solicitud</p>";
          p+="<p class='paragrafoModal'>Intente mas tarde</p>";
          mensajeModal("Error",p,"Disculpe las molestias");
        }
      });
    });




});

function mensajeModal(titulo,cuerpo,footer) {
  var t = document.getElementsByClassName('tituloModal')[0];
  var c = document.getElementsByClassName('cuerpoModal')[0];
  var p = document.getElementsByClassName('pieModal')[0];
  t.innerHTML="<h5>"+titulo+"</h5";
  c.innerHTML=cuerpo;
  p.innerHTML="<p class='text-muted'>"+footer+"</p";

  verModal();
}

function closeModal(){
  document.getElementById('openModal').style.display='none';
}

function verModal(){
  document.getElementById('openModal').style.display='block';
}

function validarCampos(){


}
