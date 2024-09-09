<?php
namespace App\Adapters\Api\Adapter;

use App\Ports\OfferRepositoryInterface;
use App\Domain\Offer;
use Symfony\Component\Serializer\SerializerInterface;
use App\Adapters\Api\Adapter\DTOffer;

class ApiAdapter
{
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }
    public function getOffer(Offer $offer): string
    {
        $dtOffer = new DTOffer($offer->getId(), $offer->getTitle(), $offer->getContent(), null);
        $data = $this->serializer->serialize($dtOffer, 'json', ['groups' => 'group2']);

        return $data;
    }
    public function getOffers(): string
    {
        return 'ok';
    }
}