<?php

declare(strict_types=1);

namespace App\Hero;

class Wolverine
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
}