<?php

declare(strict_types=1);

namespace App\Hero;

use App\Interface\SuperheroInterface;

class IncredibleHulk implements SuperheroInterface
{
    public function getSuperpower(): string
    {
        return 'Super strength';
    }

    public function getBattleCry(): string
    {
        return 'HULK SMASH!';
    }

    public function getPowerLevel(): string
    {
        return 'high';
    }

    public function getUniverse(): string
    {
        return 'Marvel';
    }
}