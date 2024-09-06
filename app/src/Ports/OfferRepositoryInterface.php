<?php

namespace App\Ports;

use App\Domain\Offer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Uid\Uuid;

/**
 *
 */
interface OfferRepositoryInterface
{
    public function findOneById(int $id): ?Offer;
}