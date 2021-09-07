<?php
class numero
{
    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function numeroValido()
    {
        if ($this->numero > 10 || $this->numero <= 0) {
            return false;
        }
        return true;
    }

    public function parOimpar()
    {
        if (!$this->numeroValido()) {
            return "no es un numero valido.";
        }
        if ($this->numero % 2 == 0) {
            return "es par";
        } {
            return "es impar";
        }
    }

    public function numeroGrande()
    {
        if (!$this->numeroValido()) {
            return "no es un numero valido.";
        }
        if ($this->numero < 6) {
            return "es un numero chico.";
        }
        return "es un numero grande.";
    }
}
