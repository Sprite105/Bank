<?php

namespace App\EventListener;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiExceptionSubscriber implements EventSubscriberInterface
{
    public $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $request = $event->getRequest();
        $exception = $event->getException();
        if(strpos($request->getPathInfo(), 'api') === false){
            return;
        }
        $response = new JsonResponse([
            'status' => 'fail',
            'error' => $exception->getMessage(),
            'code' => $exception->getCode(),
        ], 400);
        $event->setResponse($response);
        $event->stopPropagation();
    }



    public static function getSubscribedEvents()
    {
        // TODO: Implement getSubscribedEvents() method.
        return array(
            KernelEvents::EXCEPTION => 'onKernelException'
        );
    }
}