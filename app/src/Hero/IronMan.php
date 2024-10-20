<?php

declare(strict_types=1);

namespace App\Hero;

use App\Interface\SuperheroInterface;

class IronMan implements SuperheroInterface
{
    public function getSuperpower(): string
    {
        return 'Super intelligence';
    }

    public function getBattleCry(): string
    {
        return 'I am IronMan';
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