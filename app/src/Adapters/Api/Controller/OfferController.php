<?php
// src/Controller/LuckyController.php
namespace App\Adapters\Api\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Adapters\Database\Repository\OfferRepository;
use App\Domain\Actions;
use Symfony\Component\Serializer\SerializerInterface;


class OfferController extends AbstractController
{

    #[Route('/offers/{id}', name:'get_offer', requirements: ['id' => '\d+'])]
    public function getOffer(int $id, OfferRepository $offerRepository, SerializerInterface $serializer): Response
    {
        $actions = new Actions($offerRepository);
        $offer = $actions->getOffer($id);

        $data = $serializer->serialize($offer, 'json');

        $response = new Response(
            $data,
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
         );
         
         return $response;
    }

    #[Route('/offers', name:'get_offers')]
    public function getOffers(OfferRepository $offerRepository, SerializerInterface $serializer): Response
    {
        $actions = new Actions($offerRepository);
        $offers = $actions->getOffers();

        $data = $serializer->serialize($offers, 'json');

        $response = new Response(
            $data,
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
         );
         
         return $response;
    }
}
