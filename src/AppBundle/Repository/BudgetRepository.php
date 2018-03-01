<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BudgetRepository extends EntityRepository
{

    public function getBudget(){
        $query = $this->getEntityManager()->createQuery("select b from AppBundle:Budget b ORDER BY b.id");
        $query->setMaxResults(1);
        return $query->getResult();
    }

}