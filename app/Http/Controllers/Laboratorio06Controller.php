<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laboratorio06Controller extends Controller
{
    public function ejercicio1(){
        return view('ejercicio1');
    }

    public function recibirDatos1(Request $request){
        $edad = $request -> input('edad');
        $condicion= $request -> input('gender');
        $pago=0;
        if ($edad<12 OR $condicion=='si'){
            $pago=3;
        }else{
            $pago=10;
        }

        echo "El pago es de $pago soles";
    }

    public function ejercicio2(){
        return view('ejercicio2');
    }

    public function recibirDatos2(Request $request){

        $stock_inka=90;
        $stock_coca=80;
        $stock_guar=86;
        $stock_peps=65;
        $stock_spri=45;

        $quantity_inka = $request -> input('quantity_inka');
        $quantity_coca = $request -> input('quantity_coca');
        $quantity_guar = $request -> input('quantity_guar');
        $quantity_peps = $request -> input('quantity_peps');
        $quantity_spri = $request -> input('quantity_spri');
        $monto = $request -> input('monto');


        if($quantity_inka==null){
            $quantity_inka==0;
        }
        if($quantity_coca==null){
            $quantity_coca==0;
        }
        if($quantity_guar==null){
            $quantity_guar==0;
        }
        if($quantity_peps==null){
            $quantity_peps==0;
        }
        if($quantity_spri==null){
            $quantity_spri==0;
        }

        $stock_inka=$stock_inka-$quantity_inka;
        $stock_coca=$stock_coca-$quantity_coca;
        $stock_guar=$stock_guar-$quantity_guar;
        $stock_peps=$stock_peps-$quantity_peps;
        $stock_spri=$stock_spri-$quantity_spri;

        $neto=$quantity_inka*3.0+$quantity_coca*3.0+$quantity_guar*1.5+$quantity_peps*1.8+$quantity_spri*2.0;
        $resto=$monto-$neto;
        if($monto<$neto){
            echo "No tiene dinero suficiente";
        }else{
            echo "El monto total a pagar es: $neto, el vuelto es: $resto y el total de stock de todas las gaseosas es: ";
            echo "<br>Stock Inka Kola: $stock_inka";
            echo "<br>Stock Coca Kola: $stock_coca";
            echo "<br>Stock Guaraná: $stock_guar";
            echo "<br>Stock Pepsi: $stock_peps";
            echo "<br>Stock Sprite: $stock_spri";
        }
    }

    public function ejercicio3(){
        return view('ejercicio3');
    }

    public function recibirDatos3(Request $request){
        $habitacion = $request -> input('habitacion');
        $quantity_dias = $request -> input('quantity_dias');
        $quantity_personas = $request -> input('quantity_personas');

        if ($habitacion=='simple'){
            if ($quantity_dias<6){
                $costo_dia=70;
            }else{
                $costo_dia=50;
            }
        }elseif ($habitacion=='doble'){
            if ($quantity_dias<6){
                $costo_dia=80;
            }else{
                $costo_dia=60;
            }
        }else{
            if ($quantity_personas<=4){
                if ($quantity_dias<6){
                    $costo_dia=120;
                }else{
                    $costo_dia=100;
                }
            }else{
                return;
            }

        }
        $neto=$costo_dia*$quantity_dias;

        echo "La habitacion es: $habitacion, el monto total es: $neto y la cantidad de personas son: $quantity_personas";

    }
}
