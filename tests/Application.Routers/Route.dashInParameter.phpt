<?php

/**
 * Test: Nette\Application\Routers\Route with DashInParameter
 */

use Nette\Application\Routers\Route,
	Tester\Assert;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Route.inc';


$route = new Route('<para-meter>', array(
	'presenter' => 'Presenter',
));

testRouteIn($route, '/any', 'Presenter', array(
	'para-meter' => 'any',
	'test' => 'testvalue',
), '/any?test=testvalue');
