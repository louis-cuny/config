<?php
/**
 * Created by PhpStorm.
 * User: gde
 * Date: 29/03/2018
 * Time: 13:38
 */

namespace ObjectivePHP\Config\ParameterProcessor;


use ObjectivePHP\Config\ConfigInterface;
use ObjectivePHP\Config\Directive\DirectiveInterface;

abstract class AbstractParameterProcessor implements ParameterProcessorInterface
{
    /**
     * @var ConfigInterface
     */
    protected $config;

    protected $referenceKeyword;

    public function doesHandle($parameter, DirectiveInterface $directive): bool
    {
        $startPattern = $this->getReferenceKeyword() . '(';
        $endPattern = ')';

        return substr($parameter, 0, strlen($startPattern)) === $startPattern && substr($parameter, -1) === $endPattern;

    }

    /**
     * @return mixed
     */
    public function getReferenceKeyword()
    {
        return $this->referenceKeyword;
    }

    /**
     * @param mixed $referenceKeyword
     */
    public function setReferenceKeyword($referenceKeyword)
    {
        $this->referenceKeyword = $referenceKeyword;
    }

    /**
     * @return ConfigInterface
     */
    public function getConfig(): ConfigInterface
    {
        return $this->config;
    }

    /**
     * @param ConfigInterface $config
     */
    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * @param $expression
     * @return null|object
     */

    protected function parseParameter($parameter): bool
    {
        return substr($parameter, strlen($this->getReferenceKeyword()) + 1, -1);
    }

}