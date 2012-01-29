<?php

namespace Chamic\BudgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('ChamicBudgetBundle:Default:index.html.twig');
    }
}
