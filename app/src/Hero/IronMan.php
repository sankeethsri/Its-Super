<?php

declare(strict_types=1);

namespace App\Hero;

class IronMan
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
}