<?php

declare(strict_types=1);

namespace Yiisoft\Translator\Message\Db\Tests\Mssql;

use Yiisoft\Translator\Message\Db\Tests\AbstractMessageSourceTest;
use Yiisoft\Translator\Message\Db\Tests\Support\MssqlHelper;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @group mssql
 */
final class MssqlMessageSourceTest extends AbstractMessageSourceTest
{
    use MssqlHelper;
}