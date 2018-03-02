<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Entity\Budget;
use AppBundle\Entity\Initiative;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DefaultControllerTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    protected function setUp()
    {
        $kernel = self::bootKernel();

        $this->em = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testIndex()
    {

        $budget = new Budget("New Test Budget", 1000, new \DateTime("2017-10-10"), new \DateTime("2018-10-10"));
        $this->em->getRepository(Budget::class)->insertBudget($budget);


        $initiative = new Initiative("New Test Initiative", 200);
        $initiative2 = new Initiative("New Test Initiative 2", 800);
        $initiative3 = new Initiative("New Test Initiative 3", 200);

        $this->em->getRepository(Budget::class)->insertInitiative($initiative);
        $budgetResult = $this->em->getRepository(Budget::class)->budgetExceeded();
        $this->assertFalse($budgetResult);

        $this->em->getRepository(Budget::class)->insertInitiative($initiative2);
        $budgetResult2 = $this->em->getRepository(Budget::class)->budgetExceeded();
        $this->assertFalse($budgetResult2);


        $this->em->getRepository(Budget::class)->insertInitiative($initiative3);
        $budgetResult3 = $this->em->getRepository(Budget::class)->budgetExceeded();
        $this->assertTrue($budgetResult3);

    }

    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null; // avoid memory leaks
    }
}
