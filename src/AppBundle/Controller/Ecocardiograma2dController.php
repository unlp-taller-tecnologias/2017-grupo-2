<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ecocardiograma2d;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ecocardiograma2d controller.
 *
 * @Route("ecocardiograma2d")
 */
class Ecocardiograma2dController extends Controller
{
    /**
     * Lists all ecocardiograma2d entities.
     *
     * @Route("/", name="ecocardiograma2d_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ecocardiograma2ds = $em->getRepository('AppBundle:Ecocardiograma2d')->findAll();

        return $this->render('ecocardiograma2d/index.html.twig', array(
            'ecocardiograma2ds' => $ecocardiograma2ds,
        ));
    }

    /**
     * Creates a new ecocardiograma2d entity.
     *
     * @Route("/new/{id}", name="ecocardiograma2d_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request , $id)
    {
      $paciente = $this->getDoctrine()->getManager()->getRepository('AppBundle:Paciente')->find($id);
      $user = $this->container->get('security.context')->getToken()->getUser();
      $medico = $this->getDoctrine()->getManager()->getRepository('AppBundle:Medico')->findOneByUsuario($user->getId());

        $ecocardiograma2d = new Ecocardiograma2d($medico, $paciente,$this->getDoctrine()->getManager());
        $form = $this->createForm('AppBundle\Form\Ecocardiograma2dType', $ecocardiograma2d);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ecocardiograma2d);
            $em->flush();

            return $this->redirectToRoute('ecocardiograma2d_show', array('id' => $ecocardiograma2d->getId()));
        }

        return $this->render('ecocardiograma2d/new.html.twig', array(
            'ecocardiograma2d' => $ecocardiograma2d,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ecocardiograma2d entity.
     *
     * @Route("/{id}", name="ecocardiograma2d_show")
     * @Method("GET")
     */
    public function showAction(Ecocardiograma2d $ecocardiograma2d)
    {
        $deleteForm = $this->createDeleteForm($ecocardiograma2d);

        return $this->render('ecocardiograma2d/show.html.twig', array(
            'ecocardiograma2d' => $ecocardiograma2d,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ecocardiograma2d entity.
     *
     * @Route("/{id}/edit", name="ecocardiograma2d_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ecocardiograma2d $ecocardiograma2d)
    {
        $deleteForm = $this->createDeleteForm($ecocardiograma2d);
        $editForm = $this->createForm('AppBundle\Form\Ecocardiograma2dType', $ecocardiograma2d);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ecocardiograma2d_edit', array('id' => $ecocardiograma2d->getId()));
        }

        return $this->render('ecocardiograma2d/edit.html.twig', array(
            'ecocardiograma2d' => $ecocardiograma2d,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ecocardiograma2d entity.
     *
     * @Route("/{id}", name="ecocardiograma2d_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ecocardiograma2d $ecocardiograma2d)
    {
        $form = $this->createDeleteForm($ecocardiograma2d);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ecocardiograma2d);
            $em->flush();
        }

        return $this->redirectToRoute('ecocardiograma2d_index');
    }

    /**
     * Creates a form to delete a ecocardiograma2d entity.
     *
     * @param Ecocardiograma2d $ecocardiograma2d The ecocardiograma2d entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ecocardiograma2d $ecocardiograma2d)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ecocardiograma2d_delete', array('id' => $ecocardiograma2d->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
