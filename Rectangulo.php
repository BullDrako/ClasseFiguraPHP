<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 6/10/15
 * Time: 16:46
 */

namespace Figura;

require_once 'Cuadrado.php';
require_once 'Punto.php';
class Rectangulo extends Cuadrado
{
    /**
     * @var float
     */

    private $altura;

    /**
     * @param Punto $origen
     * @param float $ancho
     * @param float $altura
     */

    public function __construct(Punto $origen, $ancho, $altura)
    {

        parent::__construct($origen, $ancho);
        $this->altura = $altura;

    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */

    public function perimetro()
    {

        return ($this->ancho * 2) + ($this->altura * 2);
    }

    /**
     * @return mixed
     */
    public function area()
    {

        return $this->ancho * $this->altura;

    }

    /**
     * @return string
     */
    function __toString()
    {
        return "Rectangulo { base " . $this->ancho . ", altura " . $this->altura . "}";
    }


}

