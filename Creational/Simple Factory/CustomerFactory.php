<?php


class CustomerFactory
{
  protected $accountManagerRepo;

  public function __construct(AccountManagerRepository $repository)
  {
    $this->accountManagerRepo = $repository;
  }

  public function createCustomer($name)
  {
    $customer = new Customer();
    $customer->setName($name);
    $customer->setCreditLimit(0);
    $customer->setStatus('pending');
    $customer->setAccountManager(
        $this->accountManagerRepo->getRandom()
    );

    return $customer;
  }
}