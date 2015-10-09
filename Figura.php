<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 6/10/15
 * Time: 15:28
 */

namespace Figura;
use Figura\Punto; //no es necesario proque estamos en la clase figura

require_once 'Punto.php';
abstract class Figura
{
    /**
     * @var Punto
     */

    protected $origen;

    /*
     * @var float
     */

    private static $numFiguras = 0;

    /*
     *@param Punto $origen
     */


    function __construct(Punto $origen)
    {

        self::$numFiguras++;
        $this->origen = $origen;

    }

    public static function getNumFiguras()
    {

        return self::$numFiguras;

    }


    /**
     * @return \Figura\Punto
     */

    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * @param \Figura\Punto $origen
     */

    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }

    public function desplazar($dx, $dy)
    {

        $this->origen->desplazar($dx, $dy);
    }


    public function __toString()
    {

        return $this->origen->__toString();
    }

    public function distancia(Figura $f)
    {

        return $this->origen->distancia($f->getOrigen());

    }


    public abstract function area();

    public abstract function perimetro();

    public abstract function escalar($dx);


}