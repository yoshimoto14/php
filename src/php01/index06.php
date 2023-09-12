<?php
function sum($a, $b) {
    $sum = $a + $b;
    return $sum;
}

echo sum(2, 3);

function totalScore($score1, $score2, $score3) {
    $sum = $score1 + $score2 + $score3;
    if ($sum > 210) {
        echo '合計点は' . $sum . 'なので合格です';
    } else {
        echo '合計点は' . $sum . 'なので不合格です';
    }
}

totalScore(8, 8, 8);

function triangle($c, $d) {
    $area1 = $c * $d / 2;
    return $area1;
}

function square($e, $f) {
    $area2 = $e * $f;
    return $area2;
}

function trapezoid($g , $h, $i) {
    $area3 = ($g + $h) * $i / 2;
    return $area3;
}

echo triangle(8, 8);
echo square(3, 5);
echo trapezoid(5, 7, 5);