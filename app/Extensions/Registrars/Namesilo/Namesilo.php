<?php 

namespace App\Extensions\Registrars\Namesilo;

use App\Classes\Extensions\Registrar;

class Namesilo extends Registrar {

    /**
    * Get the extension metadata
    * 
    * @return array
    */
    public function getMetadata()
    {
        return [
            'display_name' => 'Namesilo',
            'version' => '1.0.0',
            'author' => 'Paymenter',
            'website' => 'https://paymenter.org',
        ];
    }

    /**
     * Get all the configuration for the extension
     * 
     * @return array
     */
    public function getConfig()
    {
        return [
            [
                'name' => 'api_key',
                'type' => 'text',
                'friendlyName' => 'Api Key',
                'required' => true,
            ],
            [
                'name' => 'live',
                'type' => 'boolean',
                'friendlyName' => 'Live mode',
                'required' => false,
            ],
            [
                'name' => 'pricing_sync',
                'type' => 'boolean',
                'friendlyName' => 'Price Sync',
                'required' => false,
            ],
        ];
    }

    /**
     * Chceck availability of the given domain
     * 
     * @param string $domain
     * @return bool
     */
    public function checkAvailability($domain)
    {
        $api_key = ExtensionHelper::getConfig('Namesilo', 'api_key');
        $live = ExtensionHelper::getConfig('Namesilo', 'live');
        
        
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