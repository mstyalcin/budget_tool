<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Budget;
use AppBundle\Entity\Initiative;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */


class InitiativeController extends Controller
{
    private $em;

    public function newInitiativeAction(Request $request)
    {

        $this->em = $this->getDoctrine()->getManager();
        $budgetErr = false;
        $errors = null;

        if($request->isMethod('POST')) {
            $title = $request->request->get('title');
            $value = $request->request->get('value');

            $initiative = new Initiative($title, $value);
            $validator = $this->get('validator');
            $errors = $validator->validate($initiative);


            if($this->budgetExceeded($value)){
                $budgetErr = true;
            }else{
                $this->em->persist($initiative);
                $this->em->flush();
            }

        }

        $initiatives = $this->getDoctrine()
            ->getRepository(Initiative::class)
            ->getInitiativeList();

        return $this->render('default/new_initiative.html.twig',
            array("initiatives" => $initiatives, "budgetErr" => $budgetErr, "errors" => $errors)
        );

    }

    public function budgetExceeded($newValue){
        $totalInitiative = $this->getDoctrine()
            ->getRepository(Initiative::class)
            ->getTotalInitiativeValue();

        $totalInitiativeValue = floatval($totalInitiative[0][1]) + $newValue;

        $budget = $this->getDoctrine()
            ->getRepository(Budget::class)
            ->getBudget();

        $budgetValue = floatval($budget[0]->getValue());

        if($totalInitiativeValue  > $budgetValue){
            return true;
        }else{
            return false;
        }
    }
}
