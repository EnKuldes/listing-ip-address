<?php

namespace EnKuldes\ListingIPAddress;

use Closure;
use Illuminate\Http\Request;

class ListingIPAddress
{
    /**
    * @var string[]
    */
    protected $listIps = [
        '192.168.0.5',
    ];

    /**
     * @var string
     */
    protected $behavior = 'blacklist';

    /**
     * Construct few variable
     */
    public function __construct()
    {
        //Do your magic here
        $this->listIps = \Config::get('listing-ip-address.list_ip', []);
        $this->behavior = \Config::get('listing-ip-address.behavior', 'blacklist');
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        switch ($this->behavior) {
            case 'whitelist':
                if (in_array($request->getClientIp(), $this->listIps)) {
                    return $next($request);
                } else {
                    abort(403, "You are restricted to access the site.");
                }
                break;
            
            default:
                if (in_array($request->getClientIp(), $this->listIps)) {
                    abort(403, "You are restricted to access the site.");
                } else {
                    return $next($request);
                }
                break;
        }
    }
}
