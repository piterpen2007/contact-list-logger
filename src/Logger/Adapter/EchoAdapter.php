<?php

namespace EfTech\ContactList\Infrastructure\Logger\Adapter;

use EfTech\ContactList\Infrastructure\Logger\AdapterInterface;

class EchoAdapter implements AdapterInterface
{
    /**
     * @inheritDoc
     */
    public function write(string $logLevel, string $msg): void
    {
        echo "$msg\n";
    }
}
