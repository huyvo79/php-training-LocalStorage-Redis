<?php
if (!class_exists('Redis')) {
	die('The Redis extension is not installed or enabled.');
}
$redis = new Redis();
$redis->connect('127.0.0.1', 6380); // Đúng port Redis bạn đang chạy
?>