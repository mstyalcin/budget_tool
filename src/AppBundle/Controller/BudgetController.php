<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Budget;
use AppBundle\Entity\Initiative;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class BudgetController extends Controller
{

    private $em;

    public function newBudgetAction(Request $request)
    {
        if($request->isMethod('POST')) {

            $title = $request->request->get('title');
            $value = $request->request->get('value');
            $startDate = $request->request->get('startdate');
            $endDate = $request->request->get('enddate');

            $budget = new Budget($title, $value, $startDate, $endDate);
            $validator = $this->get('validator');
            $errors = $validator->validate($budget);

            if (count($errors) > 0) {
                return $this->render('default/new_budget.html.twig', array(
                    'errors' => $errors,
                ));
            }

            $budget->setStartDate(new \DateTime($startDate));
            $budget->setEndDate(new \DateTime($endDate));

            $this->getDoctrine()
                ->getRepository(Budget::class)
                ->insertBudget($budget);

            $this->addFlash('success', 'Budget has been added successfully.');
            return new RedirectResponse($this->generateUrl('new_initiative'));
        }

        return $this->render('default/new_budget.html.twig',
            array()
        );

    }

    public function newInitiativeAction(Request $request)
    {
        $this->em = $this->getDoctrine()->getManager();
        $errors = null;

        if($request->isMethod('POST')) {
            $title = $request->request->get('title');
            $value = $request->request->get('value');

            $initiative = new Initiative($title, $value);
            $validator = $this->get('validator');
            $errors = $validator->validate($initiative);

            $this->getDoctrine()
                ->getRepository(Budget::class)
                ->insertInitiative($initiative);

        }

        $initiatives = $this->getDoctrine()
            ->getRepository(Initiative::class)
            ->getInitiativeList();

        return $this->render('default/new_initiative.html.twig',
            array("initiatives" => $initiatives, "errors" => $errors)
        );

    }


}
