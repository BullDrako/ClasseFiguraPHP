<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 6/10/15
 * Time: 17:43
 */

namespace Figura;

require_once 'Figura.php';
require_once 'Punto.php';
class Circulo extends Figura
{

    /*
     *@var float
     */

    private $radio;


    /*
     *@param Punto $origen
     *@param  $radio
     */
    function __construct(Punto $origen, $radio)
    {
        parent::__construct($origen);
        $this->radio = $radio;

    }

    /**
     * @return mixed
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param mixed $radio
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }


    public function area()
    {

        return Math . PI * Math . pow($this->radio, 2);
    }

    public function perimetro()
    {

        return Math . sqrt(Math . pow($this . altura, 2) + Math . pow($this . base / 2, 2) * 2 + $this . base);

    }


    public function escalar($d)
    {

        $this->radio = $this->radio * $d;
    }


    public function __toString()
    {
        return "Circulo { radio " . $this->radio . " }";


    }
}