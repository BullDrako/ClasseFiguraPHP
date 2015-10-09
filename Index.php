<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 7/10/15
 * Time: 19:13
 */

namespace Figura;


require_once 'Figura.php';
require_once 'Punto.php';
require_once 'Cuadrado.php';
require_once 'Circulo.php';
require_once 'Rectangulo.php';
require_once 'Triangulo.php';
class Index
{
    public static function testPunto(){

        $p1 = new Punto(1,2);

        echo $p1 . '<br/>';


        $p1->desplazar(5,5);

        echo  "Distancia ".$p1.'<br/>';


    }

    public static function testCuadrado(){

        $p1 = new Punto(1,1);
        $cuad1 = new Cuadrado($p1,5);

        echo $cuad1.'<br/>';

        echo "Area Cuadrado = ".$cuad1->area().'<br/>';
        echo "Perimetro Cuadrado = ".$cuad1->perimetro().'<br/>';
        echo "Escalar Cuadrado = ".$cuad1->escalar(5).$cuad1.'<br/>';

    }

    public static function testRectangulo()
    {
        $r1 = new Rectangulo(new Punto(3,0), 10, 20);
        $r2 = new Rectangulo(new Punto(0,0), 10, 20);

        echo "Rectangulo Perimetro = ".$r1->perimetro().'<br/>';
        echo "Rectangulo Area = ".$r1->area().'<br/>';
        echo "Rectangulo Escalar = ".$r1->escalar(3).$r1.'<br/>';
        echo "Rectangulo Desplazar = ".$r1->desplazar(1,1).$r1.'<br/>';
        echo "Rectangulo Distancia = ".$r1->distancia($r2).'<br/>';
    }

    public static function testCirculo()
    {
        echo "Circulo Numero de Figuras = ".Figura::getNumFiguras().'<br/>';
        $origen = new Punto(0,0);
        $c1 = new Circulo($origen, 3);
        $c2 = new Circulo($origen, 4);
        echo "Circulo = ".$c1.'<br/>';
        echo "Circulo Desplazar".$c1->desplazar(10,10).$c1.'<br/>';
        echo "Circulo 2 = ".$c2.'<br/>';
        echo "Circulo Numero de Figuras ". Figura::getNumFiguras();
    }

    public static function testTriangulo(){

        $p1 = new Punto(0,0);
        $t1 = new Triangulo($p1,2,2);

        echo $t1.'<br/>';

        echo "Triangulo Perimetro = ".$t1->perimetro().'<br/>';
        echo "Triangulo Area = ".$t1->area().'<br/>';
        echo "Triangulo Escalar = ".$t1->escalar(2).$t1.'<br/>';


    }
}

Index::testPunto();
Index::testCuadrado();
Index::testRectangulo();
Index::testCirculo();
Index::testTriangulo();