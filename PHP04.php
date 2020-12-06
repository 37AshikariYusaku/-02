<?php

// 1
function double($number) {
    $double_number = $number * 2;
    return $double_number;
}
echo double(100);
echo "\n";

// 2
function total($a, $b) {
    $total = $a + $b;
    return $total;
}
echo total(10, 20);
echo "\n";

// 3
function multi($arr) {
    $multi = 1;
    for($i = 0; $i < count($arr); $i++) {
        $multi *= $arr[$i];
    }
    return $multi;
}
echo multi(array(1, 3, 5, 7, 9));
echo "\n";

// 4
// function max_array($arr){
//  $max_number = $arr[0];
//  foreach($arr as $a){
//      if($a > $max_number) {
//          str_replace($arr[0], $a, $arr);
//      }
//  }
//   return $max_number;
//  };
 
//  $prices = array(100, 200, 300, 400);
//  echo max_array($prices);
//  echo "\n";

// function max_array($arr){
//  $max_number = $arr[0];
//  foreach($arr as $a){
//     if($a > $max_number) {
//         arsort($arr);
//         print_r($arr);
//     };
//  }
//   return $max_number;
//  };
 
//  $prices = array(100, 200, 300, 400);
//  echo max_array($prices);
//  echo "\n";


function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
    if($a > $max_number) {
       $max_number = $a;
    };
 }
  return $max_number;
 };
 
 $prices = array(100, 200, 300, 400);
 echo max_array($prices);
 echo "\n";
 
//  5
//  strip_tags() 文字列からhtmlやphpのタグを取り除く
$words = "<a>tech boost</a>";
echo strip_tags($words);
echo "\n";

// array_push() 要素を配列の最後に追加する
$prices = array(100, 200, 300);
array_push($prices, 400, 500);
print_r($prices);
echo $prices[4];
echo "\n";

// array_merge() 複数の配列の要素を追加する。同じキー文字列を有していた場合は、
// そのキーに関する後に指定された値が前の値を上書きする。
$a = array("animal" => "dog", 1, 5);
$b = array(2, 3, 4, "animal" => "bird");
$result = array_merge($a, $b);
// echo $result;
print_r($result);
echo "\n";

// time() 現在の時刻を返す（（1970 年 1 月 1 日 00:00:00 GMT) からの通算秒として返すため、
// .date()を使って日付表記に戻す）
$nextMonth = time() + (31 * 24 * 60 * 60);
echo "Now:       ".date('y-m-d')."\n";
echo "Next Month:".date('y-m-d', $nextMonth)."\n";

// mktime() 与えられた引数に従って、日付を秒数で返す
echo date("y-m-d", mktime(0, 0, 0, 9, 11, 1994));
echo "\n";