<?php

namespace OC\PlatformBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/platform');

        $this->assertTrue($crawler->filter('html:contains("Ferrari")')->count() > 0);
    }
}
