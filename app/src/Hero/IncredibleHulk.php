<?php

declare(strict_types=1);

namespace App\Hero;

class IncredibleHulk
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
}