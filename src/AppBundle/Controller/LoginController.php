<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
        if($request->isMethod('POST')) {

            $user = "";
            $token = new UsernamePasswordToken($user, null, 'main', array("ROLE_ADMIN"));
            $this->get('security.token_storage')->setToken($token);

            $this->get('session')->set('_security_main', serialize($token));

            $event = new InteractiveLoginEvent($request, $token);
            $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);

            return new RedirectResponse($this->generateUrl('new_budget'));
        }

        return $this->render('default/login.html.twig',
            array()
        );
    }

    public function logoutAction(Request $request){
        $this->get('security.token_storage')->setToken(NULL);

    }
}
