<?php
/**
 * Created by PhpStorm.
 * User: guillaumenouhaud
 * Date: 17/11/2015
 * Time: 10:15
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;




class ApiController extends Controller
{
    /**
     * @Route("/api/students", name="api_students")
     */
    public function StudentAction(){
        $students = $this->getDoctrine() ->getManager()
            ->getRepository('AppBundle:Student')
            ->findAll();
        $json = $this->get('jms_serializer')->serialize($students, 'json');

        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
}
