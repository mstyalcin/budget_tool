<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();


        $client->request(
            'POST',
            '/login',
            array());

        $client->request(
            'POST',
            '/new_budget',
            array(
            'title' => 'Budget Test',
            'value'=> "1000",
            'startdate'=> "2017-10-10",
            'enddate' =>  "2018-10-10"
            ));
        $this->assertTrue($client->getResponse()->isRedirect('/new_initiative'));

        $client->request(
            'POST',
            '/new_initiative',
            array(
                'title' => 'Initiative 1',
                'value'=> "200",
            ));

        $this->assertContains('Budget Exceeded', $client->getResponse()->getContent());

        $client->request(
            'POST',
            '/new_initiative',
            array(
                'title' => 'Initiative 1',
                'value'=> "800",
            ));

        $this->assertContains('Budget Exceeded', $client->getResponse()->getContent());

        $client->request(
            'POST',
            '/new_initiative',
            array(
                'title' => 'Initiative 1',
                'value'=> "200",
            ));

        $this->assertContains('Budget Exceeded', $client->getResponse()->getContent());

    }
}
