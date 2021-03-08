<?php

include_once 'App.php';
use PHPUnit\Framework\TestCase;

final class AppTest extends TestCase
{
    public function test___DS___sample_tests_I(){

        $stock = ["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"];
        $category = ["A", "B", "C", "D"];
        $this->assertSame("(A : 0) - (B : 1290) - (C : 515) - (D : 600)",stockList($stock, $category));
    }
    public function test___DS___sample_tests_II(){

        $stock = ["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"];
        $category = ["A", "B"];
        $this->assertSame("(A : 200) - (B : 1140)",stockList($stock, $category) );
    }
}