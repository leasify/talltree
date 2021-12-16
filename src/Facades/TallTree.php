<?php

namespace Leasify\TallTree\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Leasify\TallTree\TallTree
 */
class TallTree extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'talltree';
    }
}
