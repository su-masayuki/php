<?php

$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$set = htmlspecialchars($_POST["set"], ENT_QUOTES);
$set_num = htmlspecialchars($_POST["set_num"], ENT_QUOTES);
print "私の名前は、" . $name . "<br />";
print "ご希望の商品は、" . $set . "<br />";
print "注文数は、" . $set_num;
