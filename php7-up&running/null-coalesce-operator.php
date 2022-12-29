<?php
$array = ['foo'=>'bar'];

//如果左運算子存在且不為空返回第一個操作數;否則返回第二個
$message = $array['foo'] ?? 'not set';
echo $message.PHP_EOL;
