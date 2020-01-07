<?php

namespace GreenBeans\Console\Commands;

use GreenBeans\Console\Command;
use GreenBeans\Util\Base;
use GreenBeans\Util\Random;

class Genkey extends Command
{

    /**
     * @inheritDoc
     */
    public function run(array $args): void
    {
        file_put_contents(Base::get() . '/.key', Random::safeString(32 / 2));
        parent::success("Generated new application key");
    }

    /**
     * @inheritDoc
     */
    public static function invoke(array $args): void
    {
        (new self())->run($args);
    }
}