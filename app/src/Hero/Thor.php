<?php

declare(strict_types=1);

namespace App\Hero;

use App\Interface\SuperheroInterface;

class Thor implements SuperheroInterface
{
    public function getSuperpower(): string
    {
        return 'God of Thunder';
    }

    public function getBattleCry(): string
    {
        return 'For Asgard!';
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