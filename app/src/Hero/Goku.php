<?php

declare(strict_types=1);

namespace App\Hero;

use App\Interface\SuperheroInterface;

class Goku implements SuperheroInterface
{
    public function getSuperpower(): string
    {
        return 'Super Saiyan';
    }

    public function getBattleCry(): string
    {
        return 'Kamehameha!';
    }

    public function getPowerLevel(): string
    {
        return 'high';
    }

    public function getUniverse(): string
    {
        return 'Dragon Ball Z';
    }
}