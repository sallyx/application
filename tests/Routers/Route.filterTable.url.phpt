<?php

/**
 * Test: Nette\Application\Routers\Route with FilterTable
 */

use Nette\Application\Routers\Route;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Route.inc';


$route = new Route('<presenter>', [
	'presenter' => [
		Route::FILTER_TABLE => [
			'produkt' => 'Product',
			'kategorie' => 'Category',
			'zakaznik' => 'Customer',
			'kosik' => 'Basket',
		],
	],
]);

testRouteIn($route, '/kategorie/', 'Category', [
	'test' => 'testvalue',
], '/kategorie?test=testvalue');

testRouteIn($route, '/other/', 'Other', [
	'test' => 'testvalue',
], '/other?test=testvalue');
