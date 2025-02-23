<?php

use PHPUnit\Framework\TestCase;
use UnitTestPhp\Box;


class BoxTest extends TestCase
{
    private Box $box;

    protected function setUp(): void
    {
        $this->box = new Box(['Qalam' , 'Ruchka' , 'Qaychi']);

    }
    public function test_user_buyumlarni_kiritdi()
    {
     $ish = $this->box->has('Qalam');
        $this->assertTrue($ish);
        // $this->assertFalse(  $ish ,'Igna');

    }
}