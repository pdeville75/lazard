<?php

namespace Lazard\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LazardBlogBundle:Default:index.html.twig');
    }
}
