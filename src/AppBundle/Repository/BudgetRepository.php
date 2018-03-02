<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BudgetRepository extends EntityRepository
{
    public function insertBudget($budget){
        $this->getEntityManager()->persist($budget);
        $this->getEntityManager()->flush();
    }

    public function insertInitiative($initiative){
        $this->getEntityManager()->persist($initiative);
        $this->getEntityManager()->flush();
    }

    public function getBudget(){
        $query = $this->getEntityManager()->createQuery("select b from AppBundle:Budget b ORDER BY b.id");
        $query->setMaxResults(1);
        return $query->getResult();
    }

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

    public function budgetExceeded(){
        $totalInitiative = $this->getTotalInitiativeValue();
        $totalInitiativeValue = floatval($totalInitiative[0][1]);

        $budget = $this->getBudget();
        $budgetValue = floatval($budget[0]->getValue());

        if($totalInitiativeValue  > $budgetValue){
            return true;
        }else{
            return false;
        }
    }

}