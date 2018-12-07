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

namespace FfuenfNoWishlist\Service;

use Shopware\Models\Shop\Shop;
use \FfuenfNoWishlist\Service\Logger;

abstract class AbstractService
{
    /**
     * @var string
     */
    protected $pluginName = NULL;

    /**
     * @var \FfuenfNoWishlist\Service\Logger
     */
    protected $logger;

    /**
     * @var Shopware\Container\Config
     */
    protected $config;

    /**
     * AbstractService constructor.
     * @param string $pluginName
     * @param \FfuenfNoWishlist\Service\Logger $logger
     */
    public function __construct($pluginName, \FfuenfNoWishlist\Service\Logger $logger, Shop $shop)
    {
        $this->pluginName = $pluginName;
        $this->config     = $this->getConfig($shop);
        $this->logger     = $this->config['debug'] ? $logger : NULL;
        $this->config     = $this->getConfig($shop);
    }

    /**
     * @param Shop|null $shop
     * @return array
     * @throws \Exception
     */
    public function getConfig(Shop $shop = NULL)
    {
        if ($shop === NULL) {
            $shop = $this->getDefaultShop();
        }

        return Shopware()->Container()->get('shopware.plugin.config_reader')->getByPluginName($this->pluginName, $shop);
    }

    /**
     * @return bool|\Doctrine\ORM\EntityRepository|mixed
     * @throws \Exception
     */
    public function getDefaultShop()
    {
        $shop = false;
        if (Shopware()->Container()->has('shop')) {
            $shop = Shopware()->Container()->get('shop');
        }
        if (!$shop) {
            $shop = Shopware()->Container()->get('models')->getRepository(Shop::class)->getActiveDefault();
        }
        return $shop;
    }
}