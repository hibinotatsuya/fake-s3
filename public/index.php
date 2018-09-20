<?php
require_once('../config/config.php');

// パラメーターのチェック
if (empty($_FILES) || empty($_POST) || empty($_POST['hash']) || empty($_POST['bucket']) || empty($_POST['object_key'])) {
	exit;
}

// hashのチェック
$hash = hash(ALGO, KEY . SECRET);
if ($hash != $_POST['hash']) {
	echo 'hash_error';
	exit;
}

// ファイルコピー
$path = './' . $_POST['bucket'] . '/' . $_POST['object_key'];
if (strpos($path, '..') !== false) {
	echo 'path_error';
	exit;
}

$dir = dirname($path);
if (!file_exists($dir)) {
	mkdir($dir, 0777, true);
}

$bool = copy($_FILES['file']['tmp_name'], $path);
if ($bool) {
	echo 'ok';
} else {
	echo 'file_error';
}
