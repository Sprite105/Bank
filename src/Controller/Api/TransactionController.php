<?php

namespace App\Controller\Api;


use App\Entity\Customer;
use App\Entity\Transaction;
use App\Repository\TransactionRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class TransactionController extends AbstractController
{
    /**
     * @Route("api/transactions")
     * @Method("GET")
     */
    public function index(Request $request, TransactionRepository $transactions)
    {
        $filtred = $transactions->findByFilter(
            $request->query->get('customerId'),
            $request->query->get('amount'),
            $request->query->get('date'),
            $request->query->get('offset'),
            $request->query->get('limit')
        );

        $data = array();

        foreach ( $filtred as $transaction ) {
            $data[] = array(
                'transactionId' => $transaction->getId(),
                'customerId'    => $transaction->getCustomer()->getId(),
                'amount'        => $transaction->getAmount(),
                'date'          => $transaction->getDate()->format('d.m.Y')
            );
        }
        return new JsonResponse(array(
            'status' => 'success',
            'data'   => $data
        ));
    }

    /**
     * @Route("api/transactions/{customer}/{transaction}")
     * @Method("GET")
     */
    public function getOne(Customer $customer, Transaction $transaction)
    {
        return new JsonResponse(array(
            'status'        => 'success',
            'transactionId' => $transaction->getId(),
            'amount'        => $transaction->getAmount(),
            'date'          => $transaction->getDate()->format('d.m.Y')
        ));

    }

    /**
     * @Route("api/transactions/create")
     * @Method("POST")
     */
    public function create(Request $request)
    {
        $em                 = $this->getDoctrine()->getManager();
        $customerRepository = $em->getRepository(Customer::class);
        $customerId         = $request->request->get('customerId');
        $customer           = $customerRepository->find($customerId);

        if (!$customer) {
            return new JsonResponse(
                array(
                    'status'  => 'fail',
                    'message' => 'Customer not found'
                )
            );
        }

        $transaction = new Transaction();
        $transaction->setCustomer($customer);
        $transaction->setAmount($request->request->get('amount'));

        $em->persist($transaction);
        $em->flush();

        return new JsonResponse(
            array(
                'status'        => 'success',
                'transactionId' => $transaction->getId(),
                'customerId'    => $customer->getId(),
                'amount'        => $transaction->getAmount(),
                'date'          => $transaction->getDate()->format('d.m.Y')
            )
        );
    }

    /**
     * @Route("api/transactions/{transaction}")
     * @Method("PUT")
     */
    public function update(Request $request, Transaction $transaction)
    {
        $amount = $request->get('amount');

        if(!empty($amount)) {

            $em = $this->getDoctrine()->getManager();
            $transaction->setAmount($amount);
            $em->persist($transaction);
            $em->flush();

            return new JsonResponse(array(
                'status'        => 'success ',
                'transactionId' => $transaction->getId(),
                'customerId'    => $transaction->getCustomer()->getId(),
                'amount'        => $transaction->getAmount(),
                'date'          => $transaction->getDate()->format('d.m.Y')
            ));
        }else{
            return new JsonResponse(array(
                'status'  => 'fail',
                'message' => 'Amount doesn\'t set'
            ));
        }
    }

    /**
     * @Route("api/transactions/{transaction}")
     * @Method("DELETE")
     */
    public function delete(Transaction $transaction)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($transaction);
        $em->flush();

        return new JsonResponse(array(
            'status' => 'success'
        ));
    }
}