<?php

use PHPUnit\Framework\TestCase;
 require './functions.php';

class FunctionsTest extends TestCase
{


    public function test_test()
    {
        $this->assertTrue(true);
    }
 public function test_sonnlarni_qoshsa_bolyapti()
 {
   

    $natija = addNumbers(10 , 25);


      $this->assertSame(35 , $natija);
 }

 public function test_sonlar_notogri_qoshilsa_xato_beryabdi()
 {
    $qoshilganda = addNumbers(10,25);
    $this->assertNotEquals(40 ,  $qoshilganda);
 }

 public function test_bir_nolga_teng_emas()
 {
    $this->assertNotSame(0,1);
 }
 public function test_biu_birga_teng()
 {
    $this->assertSame(1,1);

 }
 public function test_array_qaytaryapti()
 {
    $this->assertIsArray(returnCars());

}
public function test_array_qaytarilyabti_id_da()
{
     $this->assertArrayHasKey(2 , returnCars());
    
 }
 public function test_array_ichida_qiymat_yoq()
 {
    $this->assertArrayNotHasKey(6 , returnCars());
 }
}