<?php
for ($i = 2; $i <= 10; $i += 2) {
    echo $i;
    echo "<br>";
}

// $count = 1;

// while ($count <= 20) {
//     echo $count . '<br>';
//     $i += 1;
// }

$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . '<br>';
    $count++;
}

$num = 0;

do {
    echo 'num = ' . $num . '<br>';
    $num++;
} while ($num < 3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo '$FizzBuzz' . '<br>';
    } else if ($i % 3 === 0) {
        echo '$Fizz' . '<br>';
    } else if ($i % 5 === 0) {
        echo '$Buzz' . '<br>';
    } else {
        echo $i . '<br>';
    }
}

$i = 0;

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo '・';
    }
    echo '<br>';
}