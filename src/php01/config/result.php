<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$goods = htmlspecialchars($_POST["goods"],ENT_QUOTES);
$count = htmlspecialchars($_POST["count"], ENT_QUOTES);

print "私の名前は、" . $name . "です";
echo "<br />";
print "ご希望の商品は、" . $goods . "セットです";
echo "<br />";
print "注文数は" . $count;