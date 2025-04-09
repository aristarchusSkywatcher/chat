<?php

namespace Aristarchusskywatcher\Chat\Eventing;

use Aristarchusskywatcher\Chat\Models\Conversation;

class AllParticipantsClearedConversation
{
    public $conversation;

    public function __construct(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }
}
