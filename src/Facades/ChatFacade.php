<?php

namespace Aristarchusskywatcher\Chat\Facades;

use Illuminate\Support\Facades\Facade;
use Aristarchusskywatcher\Chat\Chat;

class ChatFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor()
    {
        self::clearResolvedInstance(Chat::class);

        return Chat::class;
    }
}
