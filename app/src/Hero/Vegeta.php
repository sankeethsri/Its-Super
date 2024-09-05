<?php

declare(strict_types=1);

namespace App\Hero;

class Vegeta
{
    public function getSuperpower(): string
    {
        return 'Super Saiyan';
    }

    public function getBattleCry(): string
    {
        return array_rand([
            'Final Flash!',
            'Big Bang Attack!',
            'Galick Gun!',
            'It\'s over 9000!',
            'I am the prince of all Saiyans!'
        ]);
    }

    public function getPowerLevel(): string
    {
        return 'high';
    }
}