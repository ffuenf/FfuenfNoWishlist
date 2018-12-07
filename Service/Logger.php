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

use Shopware\Components\Logger as BaseLogger;

class Logger extends BaseLogger
{
    /**
     * @var \Shopware\Components\Logger
     */
    protected $logger;

    /**
     * Logger constructor.
     * @param \Shopware\Components\Logger $logger
     */
    public function __construct(\Shopware\Components\Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * writes an error log entry
     *
     * @param string $level
     * @param string $data
     * @param string $key
     */
    public function log($level, $message, $context = array())
    {
        parent::log($level, "FfuenfNoWishlist: " . $message, $context);
    }

}