<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.lrGgCyW' shared service.

return $this->privates['.service_locator.lrGgCyW'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('customer' => function (): \App\Entity\Customer {
    return ($this->privates['.errored..service_locator.lrGgCyW.App\Entity\Customer'] ?? $this->load('getCustomerService.php'));
}, 'transaction' => function (): \App\Entity\Transaction {
    return ($this->privates['.errored..service_locator.lrGgCyW.App\Entity\Transaction'] ?? $this->load('getTransaction2Service.php'));
}));
