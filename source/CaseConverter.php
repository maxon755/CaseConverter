<?php

namespace CaseConverter;

use CaseConverter\Handlers\ArrayValuesHandler;
use CaseConverter\Handlers\StringHandler;
use InvalidArgumentException;

class CaseConverter
{
    private function __construct()
    {
    }

    /**
     * Single string conversion
     *
     * @param string $string
     * @return StringHandler
     */
    public static function string(string $string)
    {
        return new StringHandler($string);
    }

    /**
     * Array conversion
     *
     * @param $array
     * @return ArrayProxy
     */
    public static function array(array $array)
    {
        return new ArrayProxy($array);
    }
}
