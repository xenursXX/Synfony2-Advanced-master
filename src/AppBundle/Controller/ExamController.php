<?php // src/AppBundle/ExamController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Exam;
use AppBundle\Form\ExamType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ExamController
 */
class ExamController extends Controller
{
    /**
     * @Route("/exam", name="exam_list")
     */
    public function indexAction()
    {
        $exams = $this->getDoctrine()->getManager()->getRepository('AppBundle:Exam')->findAll();

        return $this->render('AppBundle:Exam:index.html.twig', [
            'exams' => $exams
        ]);
    }

    /**
     * @Route("/exam/addexam", name="exam_form")
     */
    public function addAction(Request $request)
    {
        $exam = new Exam();

        $form = $this->createForm(new ExamType(), $exam);

        if ($request->isMethod('POST')
            && $form->handleRequest($request)
            && $form->isValid()) {
            $db = $this->getDoctrine()->getManager();
            $db->persist($exam);
            $db->flush();

            return $this->redirectToRoute('exam_list');
        }

        return $this->render('AppBundle:Exam:add.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/exam/delete/{id}", name="exam_delete")
     */
    public function deleteAction($id)
    {
        $db = $this->getDoctrine()->getManager();
        $exam = $db
            ->getRepository('AppBundle:Exam')
            ->find($id);
        $db->remove($exam);
        $db->flush();
        return $this->redirectToRoute('exam_list');
    }

    /**
     * @Route("/exam/update/{id}", name="exam_update")
     */
    public function updateAction($id)
    {
        $request = $this->get('request');

        if (is_null($id)) {
            $postData = $request->get('AppBundle:Exam');
            $id = $postData['id'];
        }

        $db = $this->getDoctrine()->getEntityManager();
        $exam = $db->getRepository('AppBundle:Exam')->find($id);
        $form = $this->createForm(new ExamType(), $exam);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // perform some action, such as save the object to the database
                $db->flush();

                return $this->redirect($this->generateUrl('exam_list'));
            }
        }

        return $this->render('AppBundle:Exam:update.html.twig', array(
            'form' => $form->createView()
        ));
    }
}