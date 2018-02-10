<?php

namespace App\Repository;

use App\Entity\TavernTask;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class TavernTaskRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TavernTask::class);
    }


    public function findByLvlCompar($value, $value2)
    {
        return $this->createQueryBuilder('t')
            ->where('t.task_compar_from <= :value')->setParameter('value', $value)
            ->andWhere('t.task_compar_to >= :value2')->setParameter('value2', $value2)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

}
