<?php
// tests/Controller/PostControllerTest.php
namespace App\Tests\Controller;

use App\Entity\BlogPost;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testSignGet()
    {
        $client = static::createClient();

        $client->request('GET', '/admin/sign');


        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSign()
    {
        $client = static::createClient();


        $client->request('POST', '/admin/author/create',['username' => 'Fabien','password' => '123456']);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }
    public function testLogin()
    {
        $client = static::createClient();


        $client->request('POST', '/blog',['username' => 'Fabien','password' => '123456']);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }


}