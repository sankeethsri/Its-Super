<?php

declare(strict_types=1);

namespace App\Hero;

class Thor
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
}