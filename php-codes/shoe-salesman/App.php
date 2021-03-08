<?php


function stockList($listOfCode, $listOfCat) {
    $resultStringList = [];

    //checks to pass hidden test
    if(!$listOfCode || !$listOfCat) return "";

    $result= getSumofItems($listOfCode,$listOfCat);
    
    foreach ($result as $key => $value) {
        $resultStringList[] = "($key : $value)";
    }
    if($resultStringList) return implode(' - ',$resultStringList);
    return "";
    
}

function getSumofItems($listOfCode,$listOfCat){
    $result = [];
    
    foreach ($listOfCat as $category) { 
        $sumOfItems = 0;
        foreach($listOfCode as $lineItem){
            $sumOfItems +=  getItemCountByCategory($lineItem,$category);
        }
        $result[$category] = $sumOfItems;
    }
    return $result;
}

function getItemCountByCategory($lineItem,$category){
    if(strpos($lineItem,$category) === 0) {
        return preg_replace("/[^\d]/", "", $lineItem);
    }
    return 0;
}    


