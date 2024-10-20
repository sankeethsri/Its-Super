<?php

declare(strict_types=1);

namespace App\Hero;

use App\Interface\SuperheroInterface;

class SpiderMan implements SuperheroInterface
{
    public function getSuperpower(): string
    {
        return 'Spider sense';
    }

    public function getBattleCry(): string
    {
        return 'With great power comes great responsibility';
    }

    public function getPowerLevel(): string
    {
        return 'medium';
    }

    public function getUniverse(): string
    {
        return 'Marvel';
    }
}