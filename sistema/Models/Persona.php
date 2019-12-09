<?php
class Persona
{
    // Declaración de una propiedad
    public $id_per;
    public $nom_per;
    public $ape_per;
    public $direc_per;
    public $email_per_per;
    public $email_corp_per;
    public $cel_per_per;
    public $cel_corp_per;
    public $dni_per;
    public $cargo_per;
    public $log_per;
    public $pass_per;
    public $estado_per;
    public $notificacion_per;
    
    public $id_area;

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}
?>