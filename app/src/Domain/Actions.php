<?php

namespace App\Domain;

class Actions
{

    public function __construct(private OfferRepositoryInterface $offerRepository)
    {
        $this->offerRepository = $offerRepository;
    }

    public function getOffer(int $id): Offer
    {
        $offer = $this->offerRepository->findOneById($id);

        return $offer;
    }

    public function getOffers(): array
    {
        $offers = $this->offerRepository->findAll();

        return $offers;
    }
}
