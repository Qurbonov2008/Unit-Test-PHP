<?php

use PHPUnit\Framework\TestCase;
use UnitTestPhp\User;

class UserTest extends TestCase
{
    public function test_user_yarartsa_boladimi()
    {
        $ozodbek = new User(16, 'Ozodbek');

        $this->assertSame('Ozodbek', $ozodbek->name);
        $this->assertSame(16, $ozodbek->age);
        $this->assertEmpty($ozodbek->favorite_movies);
    }

    public function test_user_ismini_aytyapti()
    {
        $ozodbek = new User(16, 'Ozodbek');

        $this->assertIsString($ozodbek->tellName());
        $this->assertStringContainsString('Ozodbek', $ozodbek->tellName());
    }
    public function test_user_yoshini_aytdi()
    {
        $ozodbek = new User(16, 'Ozodbek');
        $this->assertStringContainsString(16, $ozodbek->tellAge());
    }
    public function test_yaxshi_korgan_kinonni_qoshsa_bolyabdi()
    {
        $ozodbek = new User(16 , 'Ozodbek');

        $ish = $ozodbek->addFavoriteMovie('AmurTemur');
       

        $this->assertTrue($ish);
        $this->assertContains('AmurTemur' , $ozodbek->favorite_movies);
        $this->assertCount(1 ,  $ozodbek->favorite_movies);
 

    }
    public function test_user_yaxshi_korgan_kinoni_ochirish()
    {
        $ozodbek = new User(16 , 'Ozodbek');

        $ish = $ozodbek->addFavoriteMovie("Spider Men");
        $ish = $ozodbek->addFavoriteMovie("Salom");

        $act = $ozodbek->removeFavoriteMovie('Salom');

        $this->assertTrue($act);

        $this->assertNotContains('Salom' , $ozodbek->favorite_movies);

        $this->assertCount(1 , $ozodbek->favorite_movies);
        }
}
