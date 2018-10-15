<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdmMasterController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdmMaster/index.html.twig', array(
            // ...
        ));
       
    }

}
