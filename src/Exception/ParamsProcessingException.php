<?php
/**
 * Created by PhpStorm.
 * User: gde
 * Date: 21/03/2018
 * Time: 11:21
 */

namespace ObjectivePHP\Config\Exception;


class ParamsProcessingException extends ConfigException
{
    const INVALID_VALUE = 0x30;
    const UNKNOWN_ATTRIBUTE = 0x31;
}