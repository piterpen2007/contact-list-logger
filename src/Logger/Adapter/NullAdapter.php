<?php

namespace EfTech\ContactList\Infrastructure\Logger\Adapter;

use EfTech\ContactList\Infrastructure\Logger\AdapterInterface;

/**
 * Адпатер пишет логи в никуда
 */
class NullAdapter implements AdapterInterface
{
    /**
     * @inheritDoc
     */
    public function write(string $logLevel, string $msg): void
    {
    }
}
