<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-09
 * Time: 19:46
 */

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Security\Core\User\User;

class UsersRespository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Users::class);
    }

    public function getUserId($id):array {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.id > :id')
            ->setParameter('id', $price)
            ->orderBy('p.id', 'ASC')
            ->getQuery();

        return $qb->execute();
    }
}