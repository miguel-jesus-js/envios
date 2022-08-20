<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcularEnvioController extends Controller
{
    public function index(Request $request){
        // $request->validate([
        //     'ciudad'  => 'required',
        //     'estado'  => 'required',
        //     'municipio'  => 'required',
        //     'colonia'  => 'required',
        //     'calle'  => 'required',
        //     'n_casa'  => 'required',
        //     'cp'  => 'required'
        // ]);
        $datos = $request->all();
        $direccion = $datos['calle'].' '.$datos['n_casa'].', '.$datos['colonia'].', '.$datos['municipio'].', '.$datos['estado'];

        $apiKey = 'AIzaSyB4CbJQ4DyUU8PBQA9wtm9IqClbF7dhOuo';
        // Change address format
        $formattedAddrFrom    = str_replace(' ', '+', $direccion);
        // Geocoding API request with start address
        $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey);
        $outputFrom = json_decode($geocodeFrom);
        if(!empty($outputFrom->error_message)){
            return $outputFrom->error_message;
        }
        // Get latitude and longitude from the geodata
        $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
        $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
        $destino = $latitudeFrom.','.$longitudeFrom;
        $origen = '16.895869616938253,-92.06743465462998';

        //calcular distancia
        $respuesta=file_get_contents("https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyB4CbJQ4DyUU8PBQA9wtm9IqClbF7dhOuo&origin=$origen&destination=$destino&mode=driving");
        $json=json_decode($respuesta);
        $distancia=$json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
        return json_encode(['origen' => $origen, 'destino' => $destino, 'distancia' => $distancia]);
    }
}
