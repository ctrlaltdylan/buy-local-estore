<?php

namespace eStore\StoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/product/create');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/product/index');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/product/index');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/product/delete');
    }

}
