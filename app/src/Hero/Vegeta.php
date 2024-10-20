<?php

declare(strict_types=1);

namespace App\Hero;

use App\Interface\SuperheroInterface;

class Vegeta implements SuperheroInterface
{
    public function getSuperpower(): string
    {
        return 'Super Saiyan';
    }

    public function getBattleCry(): string
    {
        $battleCries = [
            'Final Flash!',
            'Big Bang Attack!',
            'Galick Gun!',
            'It\'s over 9000!',
            'I am the prince of all Saiyans!'
        ];

        return $battleCries[array_rand($battleCries)];
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