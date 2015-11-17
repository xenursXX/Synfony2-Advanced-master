<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_list
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_list',);
            }

            // admin_form
            if ($pathinfo === '/admin/addadmin') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addAction',  '_route' => 'admin_form',);
            }

            // admin_delete
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::deleteAction',));
            }

            // admin_update
            if (0 === strpos($pathinfo, '/admin/update') && preg_match('#^/admin/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::updateAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/exam')) {
            // exam_list
            if ($pathinfo === '/exam') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExamController::indexAction',  '_route' => 'exam_list',);
            }

            // exam_form
            if ($pathinfo === '/exam/addexam') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExamController::addAction',  '_route' => 'exam_form',);
            }

            // exam_delete
            if (0 === strpos($pathinfo, '/exam/delete') && preg_match('#^/exam/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'exam_delete')), array (  '_controller' => 'AppBundle\\Controller\\ExamController::deleteAction',));
            }

            // exam_update
            if (0 === strpos($pathinfo, '/exam/update') && preg_match('#^/exam/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'exam_update')), array (  '_controller' => 'AppBundle\\Controller\\ExamController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/grade')) {
            // grade_list
            if ($pathinfo === '/grade') {
                return array (  '_controller' => 'AppBundle\\Controller\\GradeController::indexAction',  '_route' => 'grade_list',);
            }

            // grade_form
            if ($pathinfo === '/grade/addgrade') {
                return array (  '_controller' => 'AppBundle\\Controller\\GradeController::addAction',  '_route' => 'grade_form',);
            }

            // grade_delete
            if (0 === strpos($pathinfo, '/grade/delete') && preg_match('#^/grade/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grade_delete')), array (  '_controller' => 'AppBundle\\Controller\\GradeController::deleteAction',));
            }

            // grade_update
            if (0 === strpos($pathinfo, '/grade/update') && preg_match('#^/grade/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grade_update')), array (  '_controller' => 'AppBundle\\Controller\\GradeController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/student')) {
            // student_list
            if ($pathinfo === '/student') {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::indexAction',  '_route' => 'student_list',);
            }

            // student_form
            if ($pathinfo === '/student/addstudent') {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::addAction',  '_route' => 'student_form',);
            }

            // student_delete
            if (0 === strpos($pathinfo, '/student/delete') && preg_match('#^/student/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_delete')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::deleteAction',));
            }

            // student_update
            if (0 === strpos($pathinfo, '/student/update') && preg_match('#^/student/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_update')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::updateAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
