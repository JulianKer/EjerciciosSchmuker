<?php

/*
 * Ejercicio 6: Nombre completo
Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
persona.
Dicha clase debe implementar el métod saludoFormal( $horario ) el cual debe responder
concatenado al nombre un prefijo dependiendo del horario:
05hs a 13hs “Buenos días”
13hs a 21hs “Buenas tardes”
21hs a 05hs “Buenas noches”
Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
Dicha clase debe implementar también el métod saludoInformal( $horario ) el cual debe responder
sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
perteneciente al horario .
Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
“¡Hola Ezequiel! Que tengas un buen día”
*/

class Saludar{
    private $nombre;
    private $apellido;
    public function __construct($nombre, $apellido){
        $this->nombre= $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario){
        $hora = $this->dameElHorarioEnHora($horario);
        $mensaje = "¡";

        $hora > 5 && $hora <= 13 ? $mensaje .= "Buenos días " :
            ($hora>13 && $hora <= 21 ? $mensaje .= "Buenas tardes " :
                $mensaje .= "Buenas noches ");
        return $mensaje . $this->nombre . " " . $this->apellido . "!";
    }

    public function saludoInformal($horario){
        $hora = $this->dameElHorarioEnHora($horario);
        $mensaje = "¡Hola " . $this->nombre . "! Que tengas ";

        $hora > 5 && $hora <= 13 ? $mensaje .= "un buen dia":
            ($hora>13 && $hora <= 21 ? $mensaje .= "una buena tarde" :
                $mensaje .= "una buena noche");
        return $mensaje;
    }







    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @param $horario
     * @return mixed|string
     */
    public function dameElHorarioEnHora($horario){
        str_split($horario)[0] == 1 ? $hora = str_split($horario)[0] . str_split($horario)[1] : $hora = str_split($horario)[1];
        return $hora;
    }
}