<?php

namespace Aristarchusskywatcher\Chat\Tests\Feature;

use Aristarchusskywatcher\Chat\Models\Conversation;
use Aristarchusskywatcher\Chat\Tests\Helpers\Transformers\TestConversationTransformer;
use Aristarchusskywatcher\Chat\Tests\TestCase;

class DataTransformersTest extends TestCase
{
    public function testConversationWithoutTransformer()
    {
        $conversation = factory(Conversation::class)->create();
        $responseWithoutTransformer = $this->getJson(route('conversations.show', $conversation->getKey()))
            ->assertStatus(200);

        $this->assertInstanceOf(Conversation::class, $responseWithoutTransformer->getOriginalContent());
    }

    public function testConversationWithTransformer()
    {
        $conversation = factory(Conversation::class)->create();
        $this->app['config']->set('musonza_chat.transformers.conversation', TestConversationTransformer::class);

        $responseWithTransformer = $this->getJson(route('conversations.show', $conversation->getKey()))
            ->assertStatus(200);

        $this->assertInstanceOf('stdClass', $responseWithTransformer->getOriginalContent());
    }
}
