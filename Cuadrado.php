<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 6/10/15
 * Time: 16:28
 */

namespace Figura;

require_once 'Figura.php';
require_once 'Punto.php';
class Cuadrado extends Figura
{
    /**
     * @var float
     */

    protected $ancho;

    /**
     * @param Punto $origen
     * @param float $ancho
     */

    public function __construct(Punto $origen, $ancho)
    {
        parent::__construct($origen);
        $this->ancho = $ancho;
    }


    /**
     * @return mixed
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * @param mixed $ancho
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    /**
     * @return float
     */
    public function area(){

        return $this->ancho * $this->ancho;

    }

    /**
     * @return float
     */
    public function perimetro(){

        return $this->ancho * 4;
    }

    /**
     * @param float $dx
     */
    public function escalar($dx){

        $this->ancho = $this->ancho * $dx;

    }

    public function __toString()
    {
        $origenToString = parent::__toString();
        return 'Cuadrado[ origen ' . $origenToString . ', lado ' . $this->ancho . ']';
    }


}