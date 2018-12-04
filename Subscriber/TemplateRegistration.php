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

use Enlight\Event\SubscriberInterface;
use Shopware\Components\Plugin\ConfigReader;
use Shopware\Models\Shop\Shop;

class TemplateRegistration extends ConfigAbstract implements SubscriberInterface
{
    /**
     * @var string
     */
    private $pluginName;

    /**
     * @var string
     */
    private $pluginDirectory;

    /**
     * @var \Enlight_Template_Manager
     */
    private $templateManager;

    /**
     * @var CachedConfigReader
     */
    private $configService;

    /**
     * @var Shop
     */
    private $shopService;

    /**
     * @var \Shopware_Components_Config
     */
    private $config;

    public function __construct(string $pluginName, $pluginDirectory, \Enlight_Template_Manager $templateManager, ConfigReader $configService)
    {
        $this->shop            = Shopware()->Shop();
        $this->pluginName      = $pluginName;
        $this->pluginDirectory = $pluginDirectory;
        $this->templateManager = $templateManager;
        $this->configService   = $configService;
        $this->config          = $this->configService->getByPluginName($this->pluginName, $this->shop);
    }

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatch' => 'onPostDispatchFrontend'
        ];
    }

    public function onPostDispatchFrontend()
    {
        if ($this->config['disableWishlist']) {
            $this->templateManager->addTemplateDir($this->pluginDirectory . '/Resources/views');
        }
    }
}