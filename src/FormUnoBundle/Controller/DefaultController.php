<?php

namespace FormUnoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();
        $query = "select * from  formulario_uno_index";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po = $stmt->fetchAll();                
        return $this->render('FormUnoBundle:Default:index.html.twig', array('po' => $po));
    }

    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();
        $query = "select * from  formulario_uno_index";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po = $stmt->fetchAll();                
        return $this->render('FormUnoBundle:Default:index.html.twig', array('po' => $po));
    }
}
