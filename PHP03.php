<?php
// 1
$name = "芦苅";
if($name === "芦苅") {
    echo '私は'.$name.'です';
} else {
    echo 'あなたの名前ではありません';
}
echo "\n";

// 2
$total = 0;
for($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total."\n";

// 3
$fruits = array('メロン', 'キウイ', 'バナナ', 'パイナップル', 'イチゴ');
foreach($fruits as $fruit) {
    echo $fruit."\n";
}

// 4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i."\n";
  }
}