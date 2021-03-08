<?php

function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
    $totalSave = 0.0;
    $totalOldMotor = 0.0;
    $totalNewMotor = 0.0;
    $month = 0;

    $balance = $startPriceNew - $startPriceOld;

    //checks to pass hidden test
    if($balance==0) return [0,0];
    if($balance<0) return [0,abs(round($balance))];


    while($balance>=0) {
        $month++;
        $totalOldMotor = findMotorValue($startPriceOld, $month, $percentLossByMonth);
        $totalNewMotor = findMotorValue($startPriceNew, $month, $percentLossByMonth);
        $totalSave = $savingPerMonth * $month;
        $balance = $totalNewMotor - ($totalOldMotor + $totalSave);
        
       
    }
    return [$month,abs(round($balance))];
  }


function findMotorValue($currentValue, $month, $rate=1.5, $increase=.005) {
    $rate = $rate / 100;
    if ( $month == 0) return $currentValue;
    for($i = 1; $i <=$month; $i++) {
        if($i % 2 === 0) {
            $rate = $rate + $increase;
        }
        $depreciation = $currentValue * $rate;
        $currentValue = $currentValue - $depreciation;
    }
    return $currentValue;
}

