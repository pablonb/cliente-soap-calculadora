<?php

	// Clase
    require_once('cliente.php');

    // Ruta donde se encuentra el wsdl
    define('RUTA_WSDL', 'wsdl/original.wsdl');

    // Guarda el objeto en una variable
    $clienteSoap = new SoapClient(RUTA_WSDL);

    // Recoge que operacion se va a realizar
    $accion = $_POST["operacion"];
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];

    // Crea el array con los parametros que se le van a pasar a la funcion
    $parametros = array(
    	"intA" => $numero1,
        "intB" => $numero2,    
    );

    $textoSalida = "El resultado de la " . $accion . " es: ";

    // Operacion a realizar
    switch($accion){
        case "resta":
        	$operacion = $clienteSoap->Subtract($parametros);
        	$resultado = $operacion->SubtractResult;
        	$textoSalida .= $resultado;
        	echo $textoSalida;
        	break;
    	case "multiplicacion":
    		$operacion = $clienteSoap->Multiply($parametros);
    		$resultado = $operacion->MultiplyResult;
    		$textoSalida .= $resultado;
    		echo $textoSalida;
    		break;
		case "division":
			$operacion = $clienteSoap->Divide($parametros);
			$resultado = $operacion->DivideResult;
			$textoSalida .= $resultado;
			echo $textoSalida;
			break;
		default:
            $operacion = $clienteSoap->Add($parametros);
            $resultado = $operacion->AddResult;
            $textoSalida .= $resultado;
            echo $textoSalida;
            break;
    }