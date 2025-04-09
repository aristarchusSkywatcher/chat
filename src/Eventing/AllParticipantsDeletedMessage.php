<?php

namespace Aristarchusskywatcher\Chat\Eventing;

use Aristarchusskywatcher\Chat\Models\Message;

class AllParticipantsDeletedMessage extends Event
{
    public $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }
}
