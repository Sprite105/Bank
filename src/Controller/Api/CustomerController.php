<?php

namespace App\Controller\Api;

use App\Entity\Customer;
use App\Repository\CustomerRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends AbstractController
{
    /**
     * @Route("api/customers/create")
     * @Method("POST")
     */
    public function create(Request $request)
    {
        $customer = new Customer();

        $customer->setName($request->get('name'));
        $customer->setCnp($request->get('cnp'));
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($customer);
        $em->flush();

        return new JsonResponse(array(
            'status'     => 'success',
            'customerId' => $customer->getId()
        ));
    }
}