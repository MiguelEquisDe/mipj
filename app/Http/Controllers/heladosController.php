<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladosController extends Controller
{
    public function helado($opc) {
        if(is_numeric($opc) && ($opc < 4 && $opc > 0)) {
            if($opc >= 1 && $opc <= 3) {
                $valorHelado = 3000;
                $valorTopping = 0;
                $topping = '';
                $valorTotal = 0;
                if ($opc == 1) {
                    $valorTopping = 500;
                    $topping = 'Chocolate';
                }
                elseif ($opc == 2) {
                    $valorTopping = 1000;
                    $topping = 'Brownie';
                }
                else {
                    $valorTopping = 1500;
                    $topping = 'Delicatessen';
                }
                $valorTotal = $valorHelado+$valorTopping;
                return 'El topping escogido es: ' . $topping
                        . ', y su precio es de: ' . $valorTopping
                        . '. El valor total a pagar por el helado es: ' . $valorTotal;
            }
            else {
                return 'Opción no válida';
            }
        }
    }
}
