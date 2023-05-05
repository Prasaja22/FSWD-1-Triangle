<?php

function upsideupTriangle($symbol, $rows){

    if($rows == 0 || $rows == ""){
        $rows = 5;
    }


    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            if($symbol == ""){
                echo "*";
            } else {
                echo $symbol;
            }
        }
        echo "<br>";
    }
}

upsideupTriangle("", "");


function downsideDownTriangle($symbol, $rows){
    
    if($rows == 0 || $rows == ""){
        $rows = 5;
    }

    for ($i = 0; $i < $rows; $i++) {
        for ($j = $i; $j < $rows; $j++) {
            if($symbol == ""){
                echo "*";
            } else {
                echo $symbol;
            }
        }
        echo "<br>";
    }
}

echo "<br>";

echo downsideDownTriangle("","");

function downsideRightTriangle($symbol, $rows){
    
    if($rows == 0 || $rows == ""){
        $rows = 5;
    }

    for($i = 0; $i < $rows; $i++) {
        for($j = 1; $j < $rows - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k <= $i; $k++) {
            if($symbol == ""){
                echo "*";
            } else {
                echo $symbol;
            }
        }
        echo "<br>";
    }
}

echo downsideRightTriangle("","");
echo "<br>";

function downsideDownRightTriangle($symbol, $rows){
    if($rows == 0 || $rows == ""){
        $rows = 5;
    }
    for ($i = 0; $i <= $rows - 1; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k < $rows - $i; $k++) {
            if($symbol == ""){
                echo "*";
            } else {
                echo $symbol;
            }
        }
        echo "<br>";
    }
}

echo downsideDownRightTriangle("","");


function starsCondition($align){

    if($align == "upside up"){
        upsideupTriangle("a", "");
    } else if($align == "upside down"){
        echo downsideDownTriangle("a","");
    } else if($align == "upside up right"){
        echo downsideRightTriangle("a","");
    } else if($align == "upside down right"){
        echo downsideDownRightTriangle("a","10");
    }

}

echo "<br>";

starsCondition("upside down right");


?>
