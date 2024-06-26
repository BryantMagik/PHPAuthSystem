<?php
class Horno
{
    private const TEMPERATURAMAX = 350;
    private $tempDeseada;
    private $tempActual;

    function __construct($tempDeseada, $tempActual = 25)
    {
        $this->tempDeseada = $tempDeseada;
        $this->tempActual = $tempActual;
    }

    function calentar($incremento = 10)
    {
        echo "Calentando... \n";

        if ($incremento != 10) {
            for ($this->tempActual; $this->tempActual <= $this->tempDeseada; $this->tempActual += $incremento) {
                usleep(20000);
                if ($this->tempActual > $this::TEMPERATURAMAX) {
                    break;
                }
                echo "Temperatura actual:" . $this->tempActual . "\n";
            }
        } else {
            for ($this->tempActual; $this->tempActual <= $this->tempDeseada; $this->tempActual += $incremento) {
                usleep(20000);
                echo "Temperatura actual:" . $this->tempActual . "\n";
            }
        }

        if ($this->tempActual >= $this->tempDeseada) {
            echo "Temperatura alcanzada: " . $this->tempDeseada . " grados\n";
        } else {
            echo "Temperatura máxima alcanzada " . $this::TEMPERATURAMAX . " grados.\n";
        }
    }
}

class Microondas
{
    private $nivel = ['Bajo', 'Medio', 'Alto'];
    private $temporizador = 90;

    function __construct($nivel, $temporizador)
    {
        $this->nivel = $nivel;
        $temporizador->temporizador = $temporizador;
    }



    function calentar($temporizador = 90)
    {
        usleep(90);
        for ($temporizador; $temporizador <= 0; $temporizador--) {
            echo $temporizador;
        }
    }

}

$horno = new Horno(360, 70);
$horno->calentar(5);
$micro = new Microondas(1, 23);