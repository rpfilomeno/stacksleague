<?php

include_once 'App.php';
use PHPUnit\Framework\TestCase;

final class AppTest extends TestCase
{
    public function test___SE___sample_case_I(){
        $this->assertEquals(nbMonths(2000, 8000, 1000, 1.5), [6, 766]);
}

    public function test___SE___sample_case_II(){
        $this->assertEquals(nbMonths(12000, 8000, 1000, 1.5) ,[0, 4000]);
    }
}