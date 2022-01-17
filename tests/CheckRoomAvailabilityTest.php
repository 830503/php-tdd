<?php

namespace App\tests;

use App\Entity\Room;
use App\Entity\User;
use PHPUnit\Framework\TestCase;


class CheckRoomAvailabilityTest extends TestCase
{

    public function testPremiumRoon(): void
    {
        $room = new Room(false);
        $user = new User(false);

        $this->assertTrue($room->canBook(($user)));
    }
}
