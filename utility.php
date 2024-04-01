#!/usr/bin/env php
<?php
function checkEnv(): void {
	$version = explode('.', phpversion());
	if ((int) $version[0] < 7) {
		die('Unsupported PHP version. Please update to version >= 7');
	}

	if (!extension_loaded('bcmath')) {
		die('Please install missing extension bcmath');
	}
	echo 'Env is properly set up';
}

checkEnv();
