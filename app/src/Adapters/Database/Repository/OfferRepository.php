<?php

namespace App\Adapters\Database\Repository;

use App\Domain\Offer;
use App\Adapters\Database\Entity\Offer as OfferEntity;
use App\Domain\OfferRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Uid\Uuid;
use Datetime;

/**
 *
 */
class OfferRepository extends ServiceEntityRepository implements OfferRepositoryInterface
{
    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OfferEntity::class);
    }


    /**
     * @param id $id
     * @return Offer|null
     * @throws NonUniqueResultException
     */
    public function findOneById(int $id): ?Offer
    {

        /** @var Offer|null $qb */
        $result = $this
            ->createQueryBuilder('o')
            ->where('o.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$result) {
            return null;
        }
        $offer = new Offer(
            $result->getId(),
            $result->gettitle(),
            $result->getContent(),
            null
        );

        return $offer;
    }

}