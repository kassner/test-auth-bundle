<?php

namespace Kassner\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Kassner\AuthBundle\Annotation\Secure;

class HomeController extends Controller
{

    /**
     * @Route("/", name="home")
     * @Secure("HOME")
     */
    public function indexAction()
    {
        echo sprintf('Home<br /><a href="%s">%s</a>', $this->generateUrl('another'), 'Another');
        die;
    }

    /**
     * @Route("/another", name="another")
     * @Secure("ANOTHER")
     */
    public function anotherAction()
    {
        echo sprintf('Another<br /><a href="%s">%s</a>', $this->generateUrl('home'), 'Home');
        die;
    }

}
