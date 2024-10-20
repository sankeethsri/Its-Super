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
use App\Interface\SuperheroInterface;

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

    public function getSuperHero(string $heroName): SuperheroInterface
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

    public function getSuperpower(SuperheroInterface $hero): string
    {
        return $hero->getSuperpower();
    }

    public function getBattleCry(SuperheroInterface $hero): string
    {
        return $hero->getBattleCry();
    }

    public function getPowerLevel(SuperheroInterface $hero): string
    {
        return $hero->getPowerLevel();
    }

    public function getUniverse(SuperheroInterface $hero): string
    {
        return $hero->getUniverse();
    }
}