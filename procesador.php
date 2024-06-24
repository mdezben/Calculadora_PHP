<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST["v1"];
    $valor2 = $_POST["v2"];
    $operaciones = $_POST["operaciones"];

    function sumar($valor1, $valor2) {
        return $valor1 + $valor2;
    }

    function restar($valor1, $valor2) {
        return $valor1 - $valor2;
    }

    function multiplicar($valor1, $valor2) {
        return $valor1 * $valor2;
    }

    function dividir($valor1, $valor2) {
        if ($valor2 == 0) {
            return "Error: División por cero";
        }
        return $valor1 / $valor2;
    }

    if (is_numeric($valor1) && is_numeric($valor2)) {
        switch ($operaciones) {
            case "sumar":
                $resultado = sumar($valor1, $valor2);
                break;
            case "restar":
                $resultado = restar($valor1, $valor2);
                break;
            case "multiplicar":
                $resultado = multiplicar($valor1, $valor2);
                break;
            case "dividir":
                $resultado = dividir($valor1, $valor2);
                break;
            default:
                $resultado = "Operación no válida";
                break;
        }
    } else {
        $resultado = "Los valores ingresados no son numéricos";
    }
     echo "El resultado es: $resultado";
}
?>