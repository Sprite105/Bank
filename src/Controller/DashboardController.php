<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     */
    public function index() {

    	$transactions = array(
    		array('a'=>'-', 'b'=>'-', 'c'=>'-')
    	);

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'transactions'    => $transactions
        ]);
    }
}
