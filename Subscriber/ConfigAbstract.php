<?php
/**
 *
 * class FfuenfNoWishlist
 *
 * @category   Shopware
 * @package    Shopware\Plugins\FfuenfNoWishlist
 * @author     Achim Rosenhagen / ffuenf - Pra & Rosenhagen GbR
 * @copyright  Copyright (c) 2018, Achim Rosenhagen / ffuenf - Pra & Rosenhagen GbR (https://www.ffuenf.de)
 *
 */

namespace FfuenfNoWishlist\Subscriber;

abstract class ConfigAbstract
{
    /**
     * @var \Shopware_Components_Config
     */
    private $config;

    /**
     * @param \Shopware_Components_Config $config
     */
    public function __construct(\Shopware_Components_Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    protected function pluginConfig($key)
    {
        return $this->config->getByNamespace('FfuenfNoWishlist', $key);
    }
}
