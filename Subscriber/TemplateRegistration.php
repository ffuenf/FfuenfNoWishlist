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
use \FfuenfNoWishlist\Service\AbstractService;

class TemplateRegistration extends AbstractService implements SubscriberInterface
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
     * @var \Shopware_Components_Config
     */
    protected $config;

    public function __construct(string $pluginName, $pluginDirectory, \Enlight_Template_Manager $templateManager, ConfigReader $configService)
    {
        $this->pluginName      = $pluginName;
        $this->pluginDirectory = $pluginDirectory;
        $this->templateManager = $templateManager;
        $this->configService   = $configService;
        $this->config          = $this->configService->getByPluginName($this->pluginName);
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