<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 6/10/15
 * Time: 18:47
 */

namespace Figura;

require_once 'Figura.php';
require_once 'Punto.php';
class Triangulo extends Figura
{

    /**
     * @var float
     */

    private $base;

    /**
     * @var float
     */



    private $altura;

    /**
     * @param Punto $origen
     * @param $base
     * @param $altura
     */

   public function __construct(Punto $origen, $base, $altura)
    {
        parent::__construct($origen);
        $this->base = $base;
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
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

    public function perimetro()
    {
    return sqrt(pow($this->altura,2) + pow($this->base / 2, 2)) * 2 + $this->base;

}

    public function area(){
        return ($this->base * $this->altura) / 2;
    }

    public function escalar($d){

        $this->base = $this->base * $d;
        $this->altura = $this->altura * $d;
    }

   public function __toString()
    {
        return "Triangulo { base ".$this->base." altura".$this->altura." }";
    }


}