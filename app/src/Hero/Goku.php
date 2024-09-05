<?php

declare(strict_types=1);

namespace App\Hero;

class Goku
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
}