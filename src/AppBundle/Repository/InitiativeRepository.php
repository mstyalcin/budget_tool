<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InitiativeRepository extends EntityRepository
{

    public function getInitiativeList(){

        return $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Initiative i'
            )
            ->getResult();
    }

    public function getTotalInitiativeValue(){

        return $this->getEntityManager()
            ->createQuery(
                'SELECT SUM(i.value) FROM AppBundle:Initiative i'
            )
            ->getResult();
    }
}