<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Employee;
use App\Form\EmployeeType;


class EmployeeController extends FOSRestController
{
    /**
     * Lists all Employee.
     * @Rest\Get("api/v1/employee")
     *
     * @return Response
     */
    public function getMovieAction()
    {
        $repository = $this->getDoctrine()->getRepository(Employee::class);
        $movies = $repository->findall();
        return $this->handleView($this->view($movies));
    }


}