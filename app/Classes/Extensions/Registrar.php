<?php

namespace App\Classes\Extensions;

class Registrar extends Extension {

    /**
     * Chceck availability of the given domain
     * 
     * @param string $domain
     * @return bool
     */
    public function checkAvailability($domain)
    {

    }

    /**
     * Register a domain
     * 
     * @param User $user
     * @param array $params
     * @param Order $order
     * @param OrderProduct $orderProduct
     * @param array $configurableOptions
     * @return bool
     */
    public function registerDomain($user, $params, $order, $orderProduct, $configurableOptions)
    {
        return false;
    }

    /**
     * Suspend a domain
     * 
     * @param User $user
     * @param array $params
     * @param Order $order
     * @param OrderProduct $orderProduct
     * @param array $configurableOptions
     * @return bool
     */
    public function suspendDomain($user, $params, $order, $orderProduct, $configurableOptions)
    {
        return false;
    }

    /**
     * Unsuspend a domain
     * 
     * @param User $user
     * @param array $params
     * @param Order $order
     * @param OrderProduct $orderProduct
     * @param array $configurableOptions
     * @return bool
     */
    public function unsuspendDomain($user, $params, $order, $orderProduct, $configurableOptions)
    {
        return false;
    }

    /**
     * Terminate a domain
     * 
     * @param User $user
     * @param array $params
     * @param Order $order
     * @param OrderProduct $orderProduct
     * @param array $configurableOptions
     * @return bool
     */
    public function terminateDomain($user, $params, $order, $orderProduct, $configurableOptions)
    {
        return false;
    }

}