<?php

/**
 * @exitCode 255
 * @outputMatch #^Test::setUp,× testMe\s+Exception: setUp\s+in#
 */

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

Tester\Environment::$useColors = false;


class Test extends Tester\TestCase
{
	protected function setUp()
	{
		echo __METHOD__ . ',';
		throw new Exception('setUp');
	}


	public function testMe()
	{
		echo __METHOD__ . ',';
		throw new Exception('testMe');
	}


	protected function tearDown()
	{
		echo __METHOD__ . ',';
		throw new Exception('tearDown');
	}
}

(new Test)->run();
