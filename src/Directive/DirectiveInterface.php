<?php
/**
 * This file is part of the Objective PHP project
 *
 * More info about Objective PHP on www.objective-php.org
 *
 * @license http://opensource.org/licenses/GPL-3.0 GNU GPL License 3.0
 */

namespace ObjectivePHP\Config\Directive;

/**
 * Interface DirectiveInterface
 *
 * @package ObjectivePHP\Config
 */
interface DirectiveInterface
{

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return mixed
     */
    public function getDefaultValue();

    /**
     * @return string
     */
    public function getKey(): string;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param $data
     * @return mixed
     */
    public function hydrate($data);

}
