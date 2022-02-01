<?php

namespace EfTech\ContactList\Infrastructure\Logger\Adapter;

use EfTech\ContactList\Infrastructure\Logger\AdapterInterface;

/**
 * Запись лога в файл
 */
class FileAdapter implements AdapterInterface
{
    /**
     * @var string путь до файла где пишутся логи
     */
    private string $pathToFile;

    /**
     * @param string $pathToFile
     */
    public function __construct(string $pathToFile)
    {
        $this->pathToFile = $pathToFile;
    }

    /**
     * @inheritDoc
     */
    public function write(string $logLevel, string $msg): void
    {
        file_put_contents($this->pathToFile, "$msg\n", FILE_APPEND);
    }
}
