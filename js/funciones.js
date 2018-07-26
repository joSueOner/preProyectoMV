function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }//SOLO LETRAS



		function soloNumeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
    especiales = [8,37,39,46];

    tecla_especial = false;

    for(var ik in especiales){
      if(key == especiales[ik]){
        tecla_especial = false;
        break;
      }
    }

    if(letras.indexOf(tecla)==-1 && !tecla_especial)
        return false;
  }//SOLO NUMEROS



function soloNum2(e){
    key = e.keyCode || e.which;

    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
//    especiales = [8,37,39,45,46];
    especiales = [8];

    tecla_especial = false;

    for(var r in especiales){
    if(key == especiales[r]){
     tecla_especial = true;
     break;
        }
    }


    if(letras.indexOf(tecla)==-1 && !tecla_especial ){
      return false;
    }
  }//SOLO NUMEROS CASA

function validarMinimo(elemeto,min){

	//Almacenamos los valores
	cnt=elemeto.value;
   //Comprobamos la longitud de caracteres
	if (cnt.length>min){
		return true;
	}
	else {
		alert('Minimo '+min+' caracteres');
		return false;

	}

}// MINIMOS
