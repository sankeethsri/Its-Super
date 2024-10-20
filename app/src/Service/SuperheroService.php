<?php

declare(strict_types=1);

namespace App\Service;

use App\Hero\Goku;
use App\Hero\IncredibleHulk;
use App\Hero\IronMan;
use App\Hero\SpiderMan;
use App\Hero\Thor;
use App\Hero\Vegeta;
use App\Hero\Wolverine;

readonly class SuperheroService
{
    public function __construct(
        private IncredibleHulk $incredibleHulk,
        private IronMan $ironMan,
        private SpiderMan $spiderMan,
        private Thor $thor,
        private Wolverine $wolverine,
        private Goku $goku,
        private Vegeta $vegeta,
    )
    {
    }

    public function getSuperHero(string $heroName): IncredibleHulk|IronMan|SpiderMan|Thor|Wolverine|Goku|Vegeta
    {
        $heroes = [
            'hulk' => $this->incredibleHulk,
            'ironman' => $this->ironMan,
            'spiderman' => $this->spiderMan,
            'thor' => $this->thor,
            'wolverine' => $this->wolverine,
            'goku' => $this->goku,
            'vegeta' => $this->vegeta,
        ];

        return $heroes[$heroName];
    }

    public function getSuperpower(IncredibleHulk|IronMan|SpiderMan|Thor|Wolverine|Goku|Vegeta $hero): string
    {
        return $hero->getSuperpower();
    }

    public function getBattleCry(IncredibleHulk|IronMan|SpiderMan|Thor|Wolverine|Goku|Vegeta $hero): string
    {
        return $hero->getBattleCry();
    }

    public function getPowerLevel(IncredibleHulk|IronMan|SpiderMan|Thor|Wolverine|Goku|Vegeta $hero): string
    {
        return $hero->getPowerLevel();
    }

    public function getUniverse(IncredibleHulk|IronMan|SpiderMan|Thor|Wolverine|Goku|Vegeta $hero): string
    {
        return match (get_class($hero)) {
            IncredibleHulk::class, IronMan::class, SpiderMan::class, Thor::class, Wolverine::class => 'Marvel',
            Goku::class, Vegeta::class => 'Dragon Ball Z',
            default => 'No Universe',
        };
    }
}