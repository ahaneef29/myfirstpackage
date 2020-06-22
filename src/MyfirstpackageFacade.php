<?php

namespace Ahaneef29\Myfirstpackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahaneef29\Myfirstpackage\Skeleton\SkeletonClass
 */
class MyfirstpackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'myfirstpackage';
    }
}
