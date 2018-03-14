<?php
/**
 * Created by PhpStorm.
 * User: gde
 * Date: 05/09/2017
 * Time: 16:52
 */

namespace Tests\ObjectivePHP\Config;


use ObjectivePHP\Config\Config;
use ObjectivePHP\Config\SingleDirective;
use ObjectivePHP\PHPUnit\TestCase;

class SingleDirectiveTest extends TestCase
{

    public function testDefaultBehaviour()
    {
        $config = new Config();

        $directive = new SampleSingleDirective('x', 'y');

        $config->import($directive);

        $this->assertSame($directive, $config->get(SampleSingleDirective::class));
    }

}

class SampleSingleDirective extends SingleDirective
{

    protected $x;

    protected $y;

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
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


}
