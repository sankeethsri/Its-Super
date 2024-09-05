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

    // TODO: Get this to return a specific requested hero
    public function getSuperHero(): IncredibleHulk|IronMan|SpiderMan|Thor|Wolverine|Goku|Vegeta
    {
        $heroes = [
            $this->incredibleHulk,
            $this->ironMan,
            $this->spiderMan,
            $this->thor,
            $this->wolverine,
            $this->goku,
            $this->vegeta,
        ];

        return $heroes[array_rand($heroes)];
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
}