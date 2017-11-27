<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    const RECIPES_PER_PAGE = 5;

    public function testShowAllRecipesAction()
    {
        $client = static::createClient();
        $client->request('GET', '/api/recipes?cuisine=british');
        $response = $client->getResponse();
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testShowRecipeAction()
    {
        $client = static::createClient();
        $client->request('GET', '/api/recipes/1');
        $response = $client->getResponse();
        $this->assertSame(200, $response->getStatusCode());
        $responseData = json_decode($response->getContent(), true);
        $this->assertEquals(1, $responseData['id']);
    }

}
