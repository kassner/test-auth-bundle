<?php

namespace Kassner\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/auth")
 */
class AuthController extends Controller
{

    /**
     * @Route("/login", name="auth_login")
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('KassnerAuthBundle::login.html.twig', array(
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error' => $error /** @TODO translate */
        ));
    }

    /**
     * @Route("/logout", name="auth_logout")
     */
    public function logoutAction()
    {
        // fake method
    }

    /**
     * @Route("/login_check", name="auth_login_check")
     */
    public function loginCheckAction()
    {
        // fake method
    }

}
