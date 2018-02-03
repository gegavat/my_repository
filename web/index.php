<?php
/**
 * Это единая точка входа для нашего приложения.
 * На этот файл будут перенаправлены все запросы нашего сайта.
 */
// require __DIR__ . '/../vendor/liw/core/App.php';
// require __DIR__ . '/../app/App.php';

use app\App;
use liw\core\App as Data1;

function autoLoad($className) {
	$classPieces = explode('\\', $className);
	switch ($classPieces[0]) {
		case 'app':
			require __DIR__ . "/../" . implode(DIRECTORY_SEPARATOR, $classPieces) . ".php";
			break;
		case 'liw':
			require __DIR__ . "/../vendor/" . implode(DIRECTORY_SEPARATOR, $classPieces) . ".php";
	}
}

spl_autoload_register(autoLoad, true, true);

$app = new App();
echo "\n";
$data1 = new Data1();
echo "\n";