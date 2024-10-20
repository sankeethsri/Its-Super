<?php

namespace App\Interface;

interface SuperheroInterface
{
    public function getSuperpower(): string;
    public function getBattleCry(): string;
    public function getPowerLevel(): string;
    public function getUniverse(): string;
}