<?php

// conditions
// all the numbers in the array will be >= -1 <= 100
// in each array there will be >= 1 <=2 , -1 values
// only maximum of 5 elements can be present in the array
$array = [
    [12, -1, 1, -1,2], // => 2
    [12, -1, 66, 4, -1], // => 70
    [12, -1, 66, 76, -1], // => 0
    [-1, 1, 2, -1, 4], // => 10
    [56, -1, 66, -1, 67], // => 66
];

// print the index which has the maximum sum between each 1s => 1
// print the array with all the sum values => [2, 70, 0, 10, 66]

// complete solution**************************************************
$MinusIndex = [];
$tempTotal = [];
$totalSum = [];
    for ($i=0;$i<count($array);$i++){
        //this loop i used loop the variable array inside the array
        for ($j=0;$j<count($array[$i]);$j++){
            if($array[$i][$j] === -1){
               $MinusIndex[$i][] = $j;
            }
        }
        // this array slice i'm used to find range first -1 to next -1
        $betweenRange = array_slice($array[$i],$MinusIndex[$i][0],$MinusIndex[$i][1]);

        for ($p=0;$p<count($betweenRange);$p++){
            //i'm find the -1 inside of the betweenrage array the -1 will come i'm eliminate that number after comimg number that one i calculate
            if($betweenRange[$p]=== -1){
            continue;
        }
        else{
            //i'm push -1 to -1 between number into temptoatl array;
            $tempTotal[$i][] = $betweenRange[$p];
        }
        }

        //i'm calculate the total sum in temptotal array then i store exact value in totalSum array;
        $totalSum[] = array_sum($tempTotal[$i]);
    }




print_r("The index with maximum sum is ". (array_keys($totalSum, max($totalSum))[0]));
print_r($totalSum);

//**************************************************************************************** */









///****************single diamenstional array
//$name =   [-1, 1, 1, -1,2];
//$name3 = [];
//$sum = 0;
//for ($i=0;$i<count($name)-1;$i++){
//    if($name[$i] === -1){
//        array_push($name3,$i);
//    }
//}
////print_r($name3);
//for ($j=0;$j<count($name)-1;$j++){
//    if($j>$name3[0] && $j<$name3[1]){
//        $sum = $sum + $name[$j];
//    }
//}
//
//echo $sum;



//************************************************


//******* problem solved by Rehan***************

//$allSums = [];
//for ($m = 0; $m <= count($array) - 1; $m++) {
//    $found = false;
//    $sum = 0;
//    for ($i = 0; $i <= count($array[$m]) -1 ; $i++) {
//        if ($found) {
//            if ($array[$m][$i] === -1) {
//                $found = false;
//                break;
//            } else {
//                $sum += $array[$m][$i];
//            }
//        }
//
//        if ($array[$m][$i] === -1) {
//            $found = true;
//        }
//    }
//    $allSums[] = $sum;
//}
//
//print_r("The index with maximum sum is ". (array_keys($allSums, max($allSums))[0]));
//echo "\n";
//print_r($allSums);



///*************************************************