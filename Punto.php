<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 6/10/15
 * Time: 17:04
 */

namespace Figura;


class Punto
{

    /*
     *@var float
     *@var float
     */

    private $x;
    private $y;

    /**
     * Punto constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /*
     * var float
     * var float
     */


    public function distancia(Punto $p)
    {

        $dx = $p->getX() - $this->x;
        $dy = $p->getY() - $this->y;
        return sqrt(pow($dx, 2) + pow($dy, 2));

    }

    public function desplazar($dx, $dy)
    {

        $this->x = $this->x + $dx;
        $this->y = $this->y + $dy;

    }

    function __toString()
    {
        return "Punto { X= " . $this->x . ", Y= " . $this->y . "}";

    }
}