<?php namespace Satudata\Rlhprovinsi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Rlhprovinsi facade.
 *
 * @package Satudata\Rlhprovinsi
 * @author  MKI <info@mkitech.net>
 */
class Rlhprovinsi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rlhprovinsi';
    }
}
