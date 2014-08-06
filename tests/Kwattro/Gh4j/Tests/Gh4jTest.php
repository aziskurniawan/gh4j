<?php

namespace Kwattro\Gh4j\Tests;

use Kwattro\Gh4j\Gh4j;

class Gh4jTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultConnection()
    {
        $gh = new Gh4j();
        $this->assertInstanceOf('Kwattro\Gh4j\Gh4j', $gh);

        $connector = $gh->getConnector();
        $this->assertInstanceOf('Kwark\Client\HttpClientInterface', $connector->getHttpClient());
        $this->assertInstanceOf('Kwark\Client\Api', $connector->getApi());
    }
}