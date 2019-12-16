<?php
class Hostal
{
    // Declaración de una propiedad
    public $id_hostal;
    public $nom_hostal;
    public $clase_hostal;
    public $tipo_hostal;
    public $lugar_hostal;
    public $prec_hostal;
    public $prec_var_hostal;

    public function cotizadorHostal(int $id_hostal)//validación int de PHP7
    {
        return $this->find("id_hostal = $id_hostal", 'order: nombre');
    }
}
?>