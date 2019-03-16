<?php
$redis = new Redis();
$redis->connect('10.10.10.2', 6379);
$redis->auth('foobared');
echo "Connection to server successfully";
echo "Server is running: " . $redis->ping();