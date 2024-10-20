<?php

declare(strict_types=1);

namespace App\Hero;

use App\Interface\SuperheroInterface;

class Wolverine implements SuperheroInterface
{
    public function getSuperpower(): string
    {
        return 'Regeneration';
    }

    public function getBattleCry(): string
    {
        return 'I\'m the best there is at what I do';
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