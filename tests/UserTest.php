<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testNotifyReturnsTrue()
    {
        $user = new User('dave@example.com');

        $mailer = $this->createMock(Mailer::class);

        $mailer->method('send')
               ->willReturn(true);

        $user->setMailer($mailer);

        $this->assertTrue($user->notify('Hello!'));
    }
}
