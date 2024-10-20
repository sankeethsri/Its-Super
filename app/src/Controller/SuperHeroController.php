<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\SuperheroService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SuperHeroController extends AbstractController
{

    public function __construct(
        private readonly SuperheroService $superheroService
    )
    {
    }

    #[Route(path: '/super-hero/data', name: 'super_hero_data', methods: ['GET'])]
    public function _invoke(Request $request): Response
    {
        // Retrieve 'hero' from query string
        $heroRequested = $request->query->get('hero');

        // Validate hero request
        $validHeros = ['hulk', 'ironman', 'spiderman', 'thor', 'wolverine', 'goku', 'vegeta'];

        if($heroRequested === null || !in_array($heroRequested, $validHeros)){
            return new JsonResponse([
                'error' => 'Invalid hero name. Choose from: ' . implode(', ', $validHeros)
            ]);
        }

        // Get the hero requested
        $hero = $this->superheroService->getSuperHero($heroRequested);

        $power = $this->superheroService->getSuperpower($hero);
        $battleCry = $this->superheroService->getBattleCry($hero);
        $powerLevel = $this->superheroService->getPowerLevel($hero);
        $universe = $this->superheroService->getUniverse($hero);

        return new JsonResponse([
            'name' => $heroRequested,
            'superpower' => $power,
            'battleCry' => $battleCry,
            'powerLevel' => $powerLevel,
            'universe' => $universe,
        ]);
    }
}
