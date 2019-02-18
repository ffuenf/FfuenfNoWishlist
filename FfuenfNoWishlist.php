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

namespace FfuenfNoWishlist;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Shopware\Components\Plugin\Context\UpdateContext;
use Shopware\Components\Plugin\Context\EnableContext;
use Shopware\Components\Plugin\Context\DisableContext;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FfuenfNoWishlist extends Plugin
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('ffuenf_no_wishlist.plugin_dir', $this->getPath());
        parent::build($container);
    }

    /**
     * @param InstallContext $context
     */
    public function install(InstallContext $context)
    {
        parent::install($context);
    }

    /**
     * @param UninstallContext $context
     */
    public function uninstall(UninstallContext $context)
    {
        $context->scheduleClearCache(UninstallContext::CACHE_LIST_ALL);
        parent::uninstall($context);
    }

    /**
     * @param UpdateContext $context
     */
    public function update(UpdateContext $context)
    {
        $context->scheduleClearCache(UpdateContext::CACHE_LIST_ALL);
        parent::update($context);
    }

    /**
     * @param ActivateContext $context
     */
    public function activate(ActivateContext $context)
    {
        $context->scheduleClearCache(ActivateContext::CACHE_LIST_ALL);
        parent::activate($context);
    }

    /**
     * @param DeactivateContext $context
     */
    public function deactivate(DeactivateContext $context)
    {
        $context->scheduleClearCache(DeactivateContext::CACHE_LIST_ALL);
        parent::deactivate($context);
    }

    /**
     * @param EnableContext $context
     */
    public function enable(EnableContext $context)
    {
        $context->scheduleClearCache(EnableContext::CACHE_LIST_ALL);
        parent::enable($context);
    }

    /**
     * @param DisableContext $context
     */
    public function disable(DisableContext $context)
    {
        $context->scheduleClearCache(DisableContext::CACHE_LIST_ALL);
        parent::disable($context);
    }

}