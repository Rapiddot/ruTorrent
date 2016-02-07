<?php
	require_once( '../../php/util.php' );
	$quotafile = file_get_contents($topDirectory."/.quotaspace");
	$usedfile = file_get_contents($topDirectory."/.useddiskspace");
	$quota = (int)$quotafile * 1000 * 1000;
	$used = (int)$usedfile * 1000 * 1000;
	$free = $quota - $used;
	cachedEcho('{ "total": '.$quota.', "free": '.$free.' }',"application/json");
