<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form4validacionRegistro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Form4validacionregistro controller.
 *
 */
class Form4validacionRegistroController extends Controller
{
    /**
     * Lists all form4validacionRegistro entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $form4validacionRegistros = $em->getRepository('AppBundle:Form4validacionRegistro')->findAll();

        return $this->render('form4validacionregistro/index.html.twig', array(
            'form4validacionRegistros' => $form4validacionRegistros,
        ));
    }

    /**
     * Creates a new form4validacionRegistro entity.
     *
     */
    public function newAction(Request $request)
    {
        $form4validacionRegistro = new Form4validacionregistro();
        $form = $this->createForm('AppBundle\Form\Form4validacionRegistroType', $form4validacionRegistro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $form4validacionRegistro_aux = $em->getRepository('AppBundle:Form4validacionRegistro')->findBy(array(
                'dep' => $form4validacionRegistro->getDep(),
                'sie' => $form4validacionRegistro->getSie(),
                'numBoleta' => $form4validacionRegistro->getNumBoleta()
            ));

            if ($form4validacionRegistro_aux) {
                $this->get('session')->getFlashBag()->add('registroError', 'Error, ya existe el número de folio.');
                return $this->redirectToRoute('form4validacionregistro_index');
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($form4validacionRegistro);
            $em->flush();

            $this->get('session')->getFlashBag()->add('registroOk', 'Registro exitoso.');
            return $this->redirectToRoute('form4validacionregistro_index');
        }

        return $this->render('form4validacionregistro/new.html.twig', array(
            'form4validacionRegistro' => $form4validacionRegistro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a form4validacionRegistro entity.
     *
     */
    public function showAction(Form4validacionRegistro $form4validacionRegistro)
    {
        $deleteForm = $this->createDeleteForm($form4validacionRegistro);

        return $this->render('form4validacionregistro/show.html.twig', array(
            'form4validacionRegistro' => $form4validacionRegistro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing form4validacionRegistro entity.
     *
     */
    public function editAction(Request $request, Form4validacionRegistro $form4validacionRegistro)
    {
        $deleteForm = $this->createDeleteForm($form4validacionRegistro);
        $editForm = $this->createForm('AppBundle\Form\Form4validacionRegistroType', $form4validacionRegistro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            /*$em = $this->getDoctrine()->getManager();
            $form4validacionRegistro_aux = $em->getRepository('AppBundle:Form4validacionRegistro')->findBy(array(
                'dep' => $form4validacionRegistro->getDep(),
                'sie' => $form4validacionRegistro->getSie(),
                'numBoleta' => $form4validacionRegistro->getNumBoleta()
            ));

            if ($form4validacionRegistro_aux) {
                $this->get('session')->getFlashBag()->add('registroError', 'Error, ya existe el número de folio.');
                return $this->redirectToRoute('form4validacionregistro_index');
            }*/

            $this->getDoctrine()->getManager()->flush();

            $this->get('session')->getFlashBag()->add('registroOk', 'Registro exitoso.');
            return $this->redirectToRoute('form4validacionregistro_index');
        }

        return $this->render('form4validacionregistro/edit.html.twig', array(
            'form4validacionRegistro' => $form4validacionRegistro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a form4validacionRegistro entity.
     *
     */
    public function deleteAction(Request $request, Form4validacionRegistro $form4validacionRegistro)
    {
        $form = $this->createDeleteForm($form4validacionRegistro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($form4validacionRegistro);
            $em->flush();
            $this->get('session')->getFlashBag()->add('registroOk', 'Se eliminó el registro.');
        }

        return $this->redirectToRoute('form4validacionregistro_index');
    }

    /**
     * Creates a form to delete a form4validacionRegistro entity.
     *
     * @param Form4validacionRegistro $form4validacionRegistro The form4validacionRegistro entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Form4validacionRegistro $form4validacionRegistro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('form4validacionregistro_delete', array('id' => $form4validacionRegistro->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Deletes a form4validacionRegistro entity.
     *
     */
    public function eliminarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form4validacionRegistro = $em->getRepository('AppBundle:Form4validacionRegistro')->find($request->get('id'));
        $em->remove($form4validacionRegistro);
        $em->flush();
        
        return $this->redirectToRoute('form4validacionregistro_index');
    }
}
