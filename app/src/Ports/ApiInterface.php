<?php

namespace App\Ports;

use App\Ports\OfferRepositoryInterface;
use App\Domain\Offer;

interface ApiInterface
{
    public function getOffer(Offer $offer): ?string;
    public function getOffers(): ?string;
}
