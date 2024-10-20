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

        // Get the hero requested
        $hero = $this->superheroService->getSuperHero($heroRequested);

        $power = $this->superheroService->getSuperpower($hero);
        $battleCry = $this->superheroService->getBattleCry($hero);
        $powerLevel = $this->superheroService->getPowerLevel($hero);

        $universe = match (get_class($hero)) {
            'App\Hero\Goku' => 'Dragon Ball Z',
            'App\Hero\IncredibleHulk' => 'Marvel',
            'App\Hero\IronMan' => 'Marvel',
            'App\Hero\SpiderMan' => 'Marvel',
            'App\Hero\Thor' => 'Marvel',
            'App\Hero\Vegeta' => 'Dragon Ball Z',
            'App\Hero\Wolverine' => 'Marvel',
        };

        // TODO: return a json object, not a string
        return new JsonResponse("{$heroRequested} {$universe} {$power}, {$battleCry}, {$powerLevel}");
    }
}
