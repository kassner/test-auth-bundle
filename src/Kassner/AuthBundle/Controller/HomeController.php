<?php

namespace Kassner\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Kassner\AuthBundle\Annotation\Secure;

/**
 * @Secure("HOME")
 */
class HomeController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        die(__METHOD__);
    }

}
