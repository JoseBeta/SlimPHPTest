<?php
  /***
  *@Nombre : criptografia.c
  *@Descripcion : clase que contiene las implementación de los diferentes metodos de cifrado.
  ***/

    class criptografia{	
	
	//Cifra de Cesar
	function obtenerCifraCesar($texto, $rotacion){
	
		if ($rotacion == ""){
			$rotacion = 3; 
		}
		
		$patron = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$patronEspecial = "1234567890 .!";
		$tamanoTexto = strlen($texto);			
		$tamanoPatron = strlen($patron);
			for($i=0; $i<$tamanoTexto; $i++){			
				for($j=0; $j<= 52; $j++){ //Letras
							$ROT = $ROT - 52;
						}
						$resultado .= $patron{$ROT};
						
					}
					//Para los caracteres especiales, numeros y otras hierbas 😀
					if($texto{$i} == $patronEspecial{$j}){					
						$resultado .= $texto{$i} ;
					}
			
		return $resultado;
	}
}
 
?>