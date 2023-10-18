<?php

namespace Tests\Entitys;

use Ramsey\Uuid\Uuid;

use app\Entitys\Comments;

use PHPUnit\Framework\TestCase;

class CommentsTest extends TestCase
{
    public function test_set_userUuid_method(): void
    {
    	$userUuid = Uuid::uuid4();

        $comments = new Comments(new \DateTime(), Uuid::uuid4());
        $comments->setUserUuid($userUuid);

        $this->assertEquals($userUuid, $comments->getUserUuid());
    }

    public function test_set_postUuid_method(): void
    {
    	$postUuid = Uuid::uuid4();

        $comments = new Comments(new \DateTime(), Uuid::uuid4());
        $comments->setPostUuid($postUuid);

        $this->assertEquals($postUuid, $comments->getPostUuid());
    }

    public function test_set_content_method(): void
    {
    	$content = "Hello World.";

        $comments = new Comments(new \DateTime(), Uuid::uuid4());
        $comments->setContent($content);

        $this->assertEquals($content, $comments->getContent());
    }

    public function test_get_date_method(): void
    {
    	$date = new \DateTime();

        $comments = new Comments($date, Uuid::uuid4());

        $this->assertEquals($date, $comments->getDate());
    }

    public function test_get_uuid_method(): void
    {
    	$uuid = Uuid::uuid4();

        $comments = new Comments(new \DateTime(), $uuid);

        $this->assertEquals($uuid, $comments->getUuid());
    }

    public function test_constructor_method(): void
    {
        $uuid = Uuid::uuid4();
        
        $date = new \DateTime();
        
        $comments = new Comments($date, $uuid);

        $this->assertEquals($uuid, $comments->getUuid());
        $this->assertEquals($date, $comments->getDate());
    }
}