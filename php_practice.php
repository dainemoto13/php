<?php
// 演習問題
//問題1
echo '<br>';
for ($i = 100; $i > 0; $i--) {
  echo $i . '<br>';
}

//問題2
echo '<br>';
for ($i = 1; $i <= 9; $i++) {
  echo $i * 3 . ' ';
}

//問題３
echo '<br>';
for ($i = 1; $i < 100; $i++) {
  if($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz" . '<br>';
  }elseif($i % 5 == 0) {
    echo "Buzz" . '<br>';
  }elseif($i % 3 == 0) {
    echo "Fizz" . '<br>';
  }else{
    echo $i . '<br>';
  }
}
//問題４
echo '<br>';
for ($i = 1; $i < 100; $i++) {
  if($i % 10 == 0) {

  }
}
$var = 1;
    echo '<br>';
    while ($var < 100) {
      echo $var . ' ';
    if($var % 10 == 0) {
      echo'<br>';
    }
    $var++;
  }
//問題5
echo '<br>';
  $alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
  $i = 0;
  foreach ($alpha as $v) {
    if($v === 'A'){
      $i++;
    }
  }

//問題6
echo '<br>';
$english = 70;
$math = 70;

if( $english >= 60 && $math >= 60 && $math + $english >= 140) {
  echo '合格!' . '<br>';
}else{
  echo '残念!' . '<br>';
}

// 問題7
echo '<br>';
for($i = 1; $i <= 9; $i++){
  for($j = 1; $j <= 9; $j++){
    $res = $i * $j . ' ';
    echo $res;
  }
  echo '<br>';
}

// 問題8
echo '<br>';
$primeNumbers = [];
for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j <= $i; $j++) {
        if ($i % $j === 0 && $j < $i) {
            break;
        }
        if ($i === $j) {
            $primeNumbers[] = $i;
        }
    }
}
print_r($primeNumbers);