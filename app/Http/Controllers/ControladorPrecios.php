<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function precios($pr) {
        if (is_numeric($pr) && $pr > 0) {
            if ($pr > 0 && $pr < 100000) {
                return 'Este producto no tiene descuento';
            }
            elseif ($pr >=100000 && $pr < 150000) {
                $desc = 0.02*$pr;
                return 'El descuento del producto es del 2%, y el total a
                pagar es: ' . $pr-$desc;
            }
            elseif ($pr >=150000 && $pr <= 300000) {
                $desc = 0.03*$pr;
                return 'El descuento del producto es del 2%, y el total a
                pagar es: ' . $pr-$desc;
            }
            elseif ($pr > 300000 && $pr <= 500000) {
                $desc = 0.04*$pr;
                return 'El descuento del producto es del 4%, y el
                total a pagar es de: ' . $pr-$desc;
            }
            elseif ($pr > 500000) {
                $desc = 0.05*$pr;
                return 'El descuento del producto es del 4%, y el
                total a pagar es de: ' . $pr-$desc;
            }
        }
        else {
            return 'El valor ingresado es incorrecto. Inténtelo nuevamente';
        }
    }


    public function getIVA($art,$pr) {
        $iva = (0.19*$pr);
        $total = $pr+$iva;
        return 'El artículo ' . $art . ' sin IVA cuesta $' . $pr
        . ' y el precio del IVA es de $' . $iva . '. El total a pagar
        por el articulo es de $' . $total;
    }
}
