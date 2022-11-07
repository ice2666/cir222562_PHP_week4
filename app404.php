<?php
//4.Increment/Decratment
$x = 10;
$y = 10;

// echo "1.Postfig ++x:".++$x.";//Postfig "<br>" x; $x + 1;//$x = 10 + 1//11
// echo "2.Postfig ++y:".++$y.";//Postfig "<br>" y; $x + 1;//$x = 10 + 1//11

// echo "3.Prerfig x++:".$x++ ."<br>";//Pretfig x;//$x = 11
// echo "4.Prerfig x++:".$y++ ."<br>";//Pretfig x;//$x + 1;//$x = 12

// echo "5.Postfig y++:".$y++.";//Postfig "<br>" y; $y = $y;//$y = 11 
// echo "6.Postfig y++:".$y++.";//Postfig "<br>" y; $y = $y + 1 ;//$y = 12

echo "7.Postfig x--:".$x-- .";//Postfig "<br>" x; $x = $x - 1;//$x = 10 - 1 //10
echo "7.Postfig x--:".$x-- .";//Postfig "<br>" x; $x = $x - 1;//$x = 10 - 1 //9

echo "8.Postfig --y:",--$y . "<br>";//Postfig y; $x = $y - 1;//$y = 10 -1 //9
?>