<?php
/**
 * Controlador para las acciones y vistas con el usuario
 */
class CotizarHotel
{

    public function index()
    {
        
    }

    public function getHotel(){
        //Carga la variable $region_id en la vista
        $this->id_hostal = Input::post('id_hostal');
    }

    public function getTipoHotel(){
        //Carga la variable $comuna_id en la vista
        $this->id_hostal = Input::post('id_hostal');
    }

    public function getClaseHotel(){
        //Carga la variable $comuna_id en la vista
        $this->id_hostal = Input::post('id_hostal');
    }
}