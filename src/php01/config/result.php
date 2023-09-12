<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print '私の名前は、' . $name . '<br>';

$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
print 'ご希望の商品は、' . $goods . '<br>';

$amount = htmlspecialchars($_POST['amount'], ENT_QUOTES);
print '注文数は、' . $amount . '<br>';