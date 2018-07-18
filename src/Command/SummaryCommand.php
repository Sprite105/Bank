<?php

namespace App\Command;


use App\Entity\Summary;
use App\Repository\TransactionRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SummaryCommand extends Command
{
    private $repository;
    private $manager;

    public function __construct(TransactionRepository $repository, ObjectManager $manager) {
        $this->repository = $repository;
        $this->manager    = $manager;

        parent::__construct();
    }

    protected function configure() {
        $this->setName('app:summary')->setDescription('Store sum of all transactions from previous day.');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $date   = new \DateTime('now - 1 day');
        $result = $this->repository->summary($date);

        if (empty($result['summary']))
            return;

        $summary = new Summary();
        $summary->setAmount($result['summary']);
        $summary->setDate($date);

        $this->manager->persist($summary);
        $this->manager->flush();
    }
}