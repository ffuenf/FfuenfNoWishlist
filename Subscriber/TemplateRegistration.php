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
use FfuenfCommon\Service\AbstractService;
use Enlight_Event_EventArgs;

class TemplateRegistration extends AbstractService implements SubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'addTemplateDir'
        ];
    }

    public function addTemplateDir(Enlight_Event_EventArgs $args)
    {
        $controller = $args->getSubject();
        $view = $controller->View();
        $this->templateManager->addTemplateDir($this->viewDirectory);
    }
}