<?php

namespace EnKuldes\ListingIPAddress;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EnKuldes\ListingIPAddress\Skeleton\SkeletonClass
 */
class ListingIPAddressFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'listing-ip-address';
    }
}
