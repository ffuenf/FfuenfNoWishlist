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

namespace FfuenfNoWishlist\Subscriber;

use Enlight\Event\SubscriberInterface;
use Shopware\Components\Plugin\ConfigReader;
use \FfuenfNoWishlist\Service\AbstractService;

class TemplateRegistration extends AbstractService implements SubscriberInterface
{

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