<?php

namespace Paulobunga\ParkmanDatagrid;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Paulobunga\ParkmanDatagrid\Skeleton\SkeletonClass
 */
class ParkmanDatagridFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'parkman-datagrid';
    }
}
