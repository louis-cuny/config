<?php
/**
 * Created by PhpStorm.
 * User: gde
 * Date: 27/03/2018
 * Time: 11:12
 */

namespace ObjectivePHP\Config;


interface ParametersProviderInterface
{
    public function getParameters(): array;
}