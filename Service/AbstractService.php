<?php
/**
 *
 * class FfuenfNoWishlist
 *
 * @category   Shopware
 * @package    Shopware\Plugins\FfuenfNoWishlist
 * @author     Achim Rosenhagen / ffuenf - Pra & Rosenhagen GbR
 * @copyright  Copyright (c) 2019, Achim Rosenhagen / ffuenf - Pra & Rosenhagen GbR (https://www.ffuenf.de)
 *
 */

namespace FfuenfNoWishlist\Service;

use Shopware\Components\Plugin\ConfigReader;
use Enlight_Template_Manager;
use \FfuenfCommon\Components\Logger;

abstract class AbstractService
{
    /**
     * @var string
     */
    protected $pluginName;

    /**
     * @var string
     */
    protected $pluginDirectory;

    /**
     * @var \Enlight_Template_Manager
     */
    protected $templateManager;

    /**
     * @var ConfigReader
     */
    protected $configService;

    /**
     * @var Shopware\Container\Config
     */
    protected $config;

    /**
     * @var FfuenfCommon\Components\Logger
     */
    protected $logger;

    /**
     * @param string $pluginName
     * @param string $pluginDirectory
     * @param Enlight_Template_Manager $templateManager
     * @param ConfigReader $configService
     */
    public function __construct(string $pluginName, string $pluginDirectory, Enlight_Template_Manager $templateManager, ConfigReader $configService)
    {
        $this->pluginName      = $pluginName;
        $this->pluginDirectory = $pluginDirectory;
        $this->templateManager = $templateManager;
        $this->configService   = $configService;
        $this->config          = $this->container->get('shopware.plugin.config_reader')->getByPluginName($this->pluginName);
        $this->logger          = new Logger();
    }
}