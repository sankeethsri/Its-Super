<?php

declare(strict_types=1);

namespace App\Hero;

class SpiderMan
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
}